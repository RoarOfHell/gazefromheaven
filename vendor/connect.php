<?php 
	$connect = new mysqli("localhost", "f0504886_Users", "пароль", "f0504886_Users");
    if($connect->connect_error){
        die("Ошибка: " . $connect->connect_error);
    }
    
 ?>