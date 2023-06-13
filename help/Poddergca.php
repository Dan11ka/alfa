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
	<link rel="icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/poddergca.css">
</head>
<body>
<header>
        <a href="../Alfa.php"><img class="logo-menu" src="../img/logo-ckba.png" alt="">
        <p class="text-menu">АО "ЦКБА"<br>ALFA-TEST</p></a>
            <nav>
                <a class="li" href="../Alfa.php">Курсы</a>
                <a class="li" href="../Testirovanie.php">Тестирование</a>
                <a class="li" href="../Help.php">Помощь</a>
                <a class="li" href="../Profil.php">Результат</a>
				<?php
					if(isset($_SESSION['user']['username'])) echo('<a class="li" href="../exit.php">Выход ('.$_SESSION['user']['username'].')</a>');
					else echo('<a class="li" href="../vhod.php">Войти</a>');
				?>
            </nav>
</header>
<main>
	<p class="zagalovok-main">Теходдержка</p>
        <div class="obratnay-svyaz">
			<p class="zag-obsv">По любым вопросам, связанным с работой Alfa-Test, вы можете обращаться к сотрудникам, осуществляющих поддержку пользователей<p>
			<p class="podzag-obsv">Контакты технической поддержки</p>
			<div class="pochta-obsv">
                    <p class="text-pochta"><b>Шидловская Ксения Викторовна</b></p>
                    <p class="text-pochta">Отдел АСУП</p>
                    <p class="text-pochta">Рабочий телефон: 05-70 (э)</p>
                    <a href="mailto:ShidlovskayaKV@ckba.local" class="text-pochta">ShidlovskayaKV@ckba.local</a>
                    <p class="text-pochta">Корпус №1, кабинет №300</p>
            </div>
        </div>
</main>
<footer>
    <p class="text-footer">Центр информационных технологий</p>
</footer>
</body>
<html>   
