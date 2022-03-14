<?php
    session_start();
    require_once 'connect.php';
    
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $password = md5($password);
    $check_user = mysqli_query($connect, "select * from User where Login='$login' and Password='$password'");
    
    if(mysqli_num_rows($check_user) > 0){
        
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['Login']
            ];
            header('Location: ../main.php');
    }
    else{
       $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php'); 
    }
    

?>