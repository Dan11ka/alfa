<?php
    session_start();
	
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
	<link rel="stylesheet" href="css/help.css">
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
	<p class="zagalovok-main">Обратная связь</p>
        <div class="obratnay-svyaz">
		<p class="podzag-obrt-svyaz">Вы можете сообщить о замеченных ошибках или прочитать справочную информацию, выбрав нужный раздел ниже.</p>
            <div class="item-obratnay-svyaz">
				<a href="help/Poddergca.php" class="slk-item">
					<div class="item-card">
						<img style="width:23%;" src="img/1.png">
						<div class="text-card">
							<p>Техподдержка</p>
							<p class="text">Сотрудники, ответственные за поддержку Alfa-Test</p>
						</div>
					</div>
				</a>
				<a href="help/Pravila.php" class="slk-item">
					<div class="item-card">
						<img style="width:20%;" src="img/2.png">
						<div class="text-card">
							<p>Правила</p>
							<p class="text">Ознакомиться с правилами системы Alfa</p>
						</div>
					</div>
				</a>	
			</div>
        </div>
</main>
<footer>
    <p class="text-footer">Центр информационных технологий</p>
</footer>
</body>
<html>   
