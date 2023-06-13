<?php
    require_once 'php/config.php';
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
    <script src="js/jquery-3.6.4.min.js"></script>
	<link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/kurs.css">
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
	<p class="zagalovok-main">Каталог курсов</p>
	<div class="block-kategor" >
        <div class="wrapper">
            <div id="search-container">
                <input type="search" id="search-input" placeholder="Введите запрос..."/>
                <button id="search">Найти</button></div>
            <div id="buttons">
                <button class="button-value filter-button" data-filter="all">Все</button>
                <button class="button-value filter-button" data-filter="Proiz">Производство</button>
                <button class="button-value filter-button" data-filter="Mto">Склад</button>
                <button class="button-value filter-button" data-filter="Zakupki">Закупки</button>
            </div>
            <div id="products">
				<?php
					if($_SESSION['user']['roles'] == 'admin') {
					$stmt = $pdo->prepare('SELECT * FROM kurs');
					$stmt->execute();
					} else {
					$stmt = $pdo->prepare('SELECT * FROM kurs WHERE roles = ?');
					$stmt->execute([$_SESSION['user']['roles']]);
					}
					while($kurs = $stmt->fetch(PDO::FETCH_ASSOC)) {
				?>
                <div class="card <?=$kurs['category']?>">
                    <div class="container">
                        <p class="product-name"><?=$kurs['title']?></p>
                        <button type="button" class="btn-click" target="_blank" onClick="location.href='kurs/<?=$kurs['page']?>';">Открыть курс</button><br>
                    </div>
                </div>
        <?php
    }
?>
            </div>
            <script src="js/test-categor.js"></script>
        </div>
    </div>
</main>
</body>
<footer>
	<p class="text-footer">Центр информационных технологий</p>
</footer>
</html>
