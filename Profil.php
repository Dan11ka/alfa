<?php
    session_start();
	if($_SESSION['user']['roles']== '')
	{
		header('Location:vhod.php');
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALFA-TEST</title>
	<link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/profil.css">
</head>
<body>
<header>
        <a href="Alfa.php"><img class="logo-menu" src="img/logo-ckba.png" alt="">
        <p class="text-menu">АО "ЦКБА"<br>ALFA-TEST</p></a>
            <nav>
                <a class="li" href="Alfa.php">Курсы</a>
                <a class="li" href="Testirovanie.php">Тестирование</a>
                <a class="li" href="Help.php">Помощь</a>
                <a class="li" href="Profil.php">Результат</a>
				<?php
					if(isset($_SESSION['user']['username'])) echo('<a class="li" href="exit.php">Выход ('.$_SESSION['user']['username'].')</a>');
					else echo('<a class="li" href="vhod.php">Войти</a>');
				?>
            </nav>
</header>
<main>
		<p class="zagalovok-main">Результаты</p>
		<div class="block-main">
            <table>
                <tr>
                    <th>Пользователь</th>
                    <th>Тест</th>
                    <th>Попыток</th>
                    <th>Лучший результат</th>
                    <th>Пройден</th>
                </tr>

<?php
require_once ('php/config.php');

if($_SESSION['user']['roles'] == 'admin') {

    $results = $pdo->prepare("
        SELECT r.*, u.username, t.title as testName
        FROM results as r
        LEFT JOIN users as u ON r.user = u.id
        LEFT JOIN tests as t ON r.test = t.id
        WHERE 1");
} else {
    $results = $pdo->prepare("
        SELECT r.*, u.username, t.title as testName
        FROM results as r
        LEFT JOIN users as u ON r.user = u.id
        LEFT JOIN tests as t ON r.test = t.id
        WHERE user = :user");
    $results->bindValue(':user', $_SESSION['user']['id']);
}

$results->execute();
$usersArray = [];
while ($result = $results->fetch(PDO::FETCH_ASSOC)) {
    if(!isset($usersArray[$result['user']])) $usersArray[$result['user']] = [
        'name' => $result['username'],
        'data' => []
    ];
    if(!isset($usersArray[$result['user']]['data'][$result['test']])) {
        $usersArray[$result['user']]['data'][$result['test']] = [
            'name' => $result['testName'],
            'count' => 0,
            'best' => 0,
            'passed' => 'Нет'
        ];
    }
    $usersArray[$result['user']]['data'][$result['test']]['count'] += 1;
    if($usersArray[$result['user']]['data'][$result['test']]['best'] < $result['balls']) $usersArray[$result['user']]['data'][$result['test']]['best'] = $result['balls'];
    if($result['result'] == 'pass') $usersArray[$result['user']]['data'][$result['test']]['passed'] = 'Да';
}
if(count($usersArray) > 0)
    foreach($usersArray as $user) {
        if(count($user['data']) > 0)
            foreach($user['data'] as $test) {
?>
        <tr>
            <td><?=$user['name']?></td>
            <td><?=$test['name']?></td>
            <td><?=$test['count']?></td>
            <td><?=$test['best']?></td>
            <td><?=$test['passed']?></td>
        </tr>
<?php

    }
}

?>
            </table>
		</div>
</main>
<footer>
	<p class="text-footer">Центр информационных технологий</p>
</footer>
</body>
</html>



