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
	<title>Autorization</title>
	<link rel="icon" href="image/icon.ico" type="image/x-icon">
</head>
<body>
	<div class="form">
		<h1>Регистрация</h1>
		
		<form action="vendor/singup.php" method="post" enctype="multipart/form-data">
		    
			<div class="input-form">
			<input type="text" name="login" placeholder="Логин" >
		</div>
		<div class="input-form">
			<input type="password" name="password" placeholder="Пароль">
		</div>
		<div class="input-form">
			<input type="password" name="repeatPassword" placeholder="Повторите пароль">
		</div>
		<div class="input-form">
			<input type="email" name="mail" placeholder="Почта">
		</div>
		<div class="input-form">
			<input type="submit" value="Зарегистрироваться">
		</div>
		</form>
		<a href="index.php" class="login">Войти</a>
		
		<?php
		    if($_SESSION['message']){
		        echo '<p class="msgErrorPass">' . $_SESSION['message'] . '</p>';
		    }
		    unset($_SESSION['message']);
		    ?>
		
	</div>
</body>
</html>