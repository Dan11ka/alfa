<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.entropy_file', '/dev/urandom');
ini_set('session.hash_function', 'whirlpool');
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);
	session_start();
    include('php/config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $pdo->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Неверные пароль или имя пользователя!</p>';
        } else {
            if ($password == $result['password']) {
                $_SESSION['user']['id'] = $result['id'];
                $_SESSION['user']['username'] = $result['username'];
                $_SESSION['user']['roles'] = $result['roles'];
				header("Location: Alfa.php");
				exit;
				
                echo '<p style="position: absolute;margin-top: 17%; margin-left: 45%;">Вы прошли авторизацию!</p>';
            } else {
                echo '<p class="error"> Неверные пароль или имя пользователя!</p>';
            }
        }
    }
?>
<?php
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
         
            $query = $connection->prepare("INSERT INTO users(username,password) VALUES (:username,:password)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password", $password, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p style="position: absolute;margin-top: 42%;margin-left: 43.5%;">Регистрация прошла успешно!</p>';
            } else {
                echo '<p style="position: absolute;margin-top: 42%;margin-left: 43.5%;">Ќеверные данные!</p>';
            }
        
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
	<link rel="stylesheet" href="css/vhod.css">
</head>
<body>
<header style="margin-top: 1%;">
         <a href="Alfa.php"><img class="logo-menu" src="img/logo-ckba.png" alt="">
		 <p class="text-menu">АО "ЦКБА"<br>ALFA-TEST</p></a>
           <nav>
                <a class="li" href="Alfa.php">Курсы</a>
                <a class="li" href="Testirovanie.php">Тестирование</a>
                <a class="li" href="Help.php">Помощь</a>
                <a class="li" href="Profil.php">Результат</a>
				<a class="li" href="vhod.php">Войти</a>
				<a class="li" href="exit.php"><?php echo @$_SESSION['user']['username']; ?></a>
            </nav>
    </header>

    <main> 
        <div class="block-vhod">
        <p class="zag-registr">Авторизация</p>
            <form method="post" action="" name="signin-form">
				<div class="form-element">
					<label>Логин</label><br>
					<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
				</div>
				<div class="form-element">
					<label>Пароль</label><br>
					<input type="password" name="password" required />
				</div>
			<button id="showContent" class="btn" type="submit" name="login" value="login">Войти</button>
			</form>
			<p class="linia">------------------------------------</p>
			<!--  
            <p class="zag-registr">Зарегистрироваться</p>	
			<form method="post" action="" name="signup-form">
				<div class="form-element">
					<label>Логин</label><br>
					<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
				</div>
				<div class="form-element">
					<label>Пароль</label><br>
					<input type="password" name="password" required />
				</div>
			<button class="btn" type="submit" name="register" value="register">Регистрация</button>
			</form>
        -->
        </div>
        </div>
    </main>
	<footer>
		<p class="text-footer">Центр информационных технологий</p>
	</footer>
</body>
</html>


