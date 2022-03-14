<?php
    session_start();
    require_once 'connect.php';
    
    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];
    $email = $_POST['email'];
    
    if($login != ""){
        if($password != ""){
           if($password === $repeatPassword){
            $password = md5($password);
            mysqli_query($connect, "INSERT INTO `User` (`Login`, `Password`, `EMail`) VALUES ('$login', '$password', '$email')");
            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../index.php');
        
            }
            else{
                $_SESSION['message'] = 'Пароли не совпадают!';
                header('Location: ../registration.php');
            } 
        }
        else{
            $_SESSION['message'] = 'Пароль не может быть пустым!';
        header('Location: ../registration.php');
        }
        
    }
    else{
        $_SESSION['message'] = 'Логин не может быть пустым!';
        header('Location: ../registration.php');
    }
    
?>