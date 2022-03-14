<?php
    session_start();
    require_once 'connect.php';
    
    $price = $_POST['price'];
    $nameItem = $_POST['nameItem'];
    $userId = $_SESSION['user']['id'];
    $money = $_SESSION['userInfo']['Money'];
    
    if($nameItem != ""){
        echo $nameItem;
        if($money >= $price){
            $newMoney = $money-$price;
            
            mysqli_query($connect, "UPDATE `UserInfo` SET `Money` = '$newMoney' WHERE `UserInfo`.`UserID` = $userId;");
            mysqli_query($connect, "INSERT INTO `ItemsInventory` (`Name`, `Count`, `IdUser`) VALUES ('$nameItem', 1, $userId)");
            
        }
        header('Location: ../shop.php');
       // "UPDATE `news` SET `text` = 'The very first news' WHERE `id` = 1;";
            
        
    }
    else{
        //header('Location: ../registration.php');
    }
    
?>