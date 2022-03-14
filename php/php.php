<?php
    
   $a = 5;
   $b =1;



    $conn = new mysqli("localhost", "f0504886_Users", "999888777z", "f0504886_Users");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $sql = "INSERT INTO User (Login, Password, EMail) VALUES ('RoarOfHell', '12341234', 'test@mail.ru')";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();

?>