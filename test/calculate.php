<?php
session_start();
require_once ('../php/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user'])) {
    // Получаем данные пройденного теста из БД по имени файла теста
    $fname = explode('/', $_SERVER['HTTP_REFERER']);
    $fname = end($fname); // Это имя файла теста.
    $testId = $pdo->prepare("SELECT * FROM tests WHERE page = ?");
    $testId->execute([$fname]);
    $testId = $testId->fetch(PDO::FETCH_ASSOC);

    // Добавляем в БД запись о прохождении теста.
    $testResult = $pdo->prepare('INSERT INTO results SET user = :user, test = :test');
    $testResult->bindValue(':user', $_SESSION['user']['id'], PDO::PARAM_INT);
    $testResult->bindValue(':test', $testId['id'], PDO::PARAM_INT);
    $testResult->execute();
    $resultId = $pdo->lastInsertId(); // id нового результата теста

    $ans = $pdo->prepare("SELECT * FROM answers WHERE test = ?");
    $ans->execute([$testId['id']]);

    // Собираем массив правильных ответов
    $answersArray = [];
    while ($answer = $ans->fetch(PDO::FETCH_ASSOC)) {
        $answersArray[$answer['question']][] = $answer['answer'];
    }

    $balls = 0;


    $answerSet = $pdo->prepare('INSERT INTO results_answers SET `result` = :result, question = :question, answer = :answer, `right` = :right');
    $answerSet->bindValue(':result', $resultId, PDO::PARAM_INT);
    if(isset($_POST['q']) && count($_POST['q']) > 0) {
        foreach ($_POST['q'] as $question => $answers) { // Перебираем все вопросы на которые поставлена хоть одна галочка
            $continue = false;
            $ball = 1/count($answersArray[$question]);
            foreach($answers as $answer) { // Перебираем указанные варианты ответа
                // Записываем в БД вариант ответа
                $answerSet->bindValue(':question', $question, PDO::PARAM_INT);
                $answerSet->bindValue(':answer', $answer, PDO::PARAM_INT);
                if(in_array($answer, $answersArray[$question])) {
                    $answerSet->bindValue(':right', 'yes');
                    if(!$continue) $balls += $ball;
                } else {
                    $answerSet->bindValue(':right', 'no');
                    $continue = true;
                }
                $answerSet->execute();
            }
            unset($answersArray[$question]);
        }
    }

    // Теперь проверяем баллы, сравниваем с проходным баллом теста и записываем результат

    echo($balls);


    $testResult = $pdo->prepare('UPDATE results SET balls = :balls, result = :result WHERE id = :id');
    $testResult->bindValue(':balls', $balls);
    $testResult->bindValue(':id', $resultId, PDO::PARAM_INT);
    if($balls >= $testId['success']) {
        $testResult->bindValue(':result', 'pass');
    } else {
        $testResult->bindValue(':result', 'fail');
    }
    $testResult->execute();


    header('Location:../Profil.php');
}


