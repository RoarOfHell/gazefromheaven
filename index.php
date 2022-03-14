<?php
    session_start();
    
    if($_SESSION['user']){
        header('Location: main.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация</title>
	<link rel="icon" href="image/icon.ico" type="image/x-icon">
</head>
<body>
	<div class="block" id="blocksd" data-attr="<?php echo $a; ?>"></div>
	<div class="form">
		<h1>Вход</h1>
		<form action="vendor/singin.php" method="post">
		    <div class="input-form">
			<input type="text" id="textlogin" name="login" placeholder="Логин">
		</div>
		<div class="input-form">
			<input type="password" id="pasw" name="password" placeholder="Пароль">
		</div>
		<div class="input-form">
	
			<input type="submit" value="Войти" onclick="updateButton()">
		</div>
		<div class="textForgReg">
			<a href="registration.php" class="registr">Зарегистрироваться</a>
			<a href="#" class="forget">Забыли пароль?</a>
			
			<?php
		    if($_SESSION['message']){
		        echo '<p class="msgErrorPass">' . $_SESSION['message'] . '</p>';
		    }
		    unset($_SESSION['message']);
		    ?>
		</div>
		</form>
		
	</div>

	<script src="js/JavaScript.js"></script>
</body>
</html>