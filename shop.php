<?php
    session_start();
    if(!$_SESSION['user']){
        header('Location: index.php');
    }
    else{
        require_once 'vendor/connect.php';
        $idU = $_SESSION['user']['id'];
        $nameU = $_SESSION['user']['login'];
        $userInfo = mysqli_query($connect, "select * from UserInfo where UserID=$idU");
        
        if(mysqli_num_rows($userInfo) == 0){
            mysqli_query($connect, "INSERT INTO `UserInfo` (`UserName`, `Money`, `Level`, `UserID`) VALUES ('$nameU', 50000, 100, $idU);");
          $_SESSION['userInfo'] = [
            "Level" => 100,
            "Money" => 50000,
            "UserName" => $nameU
            ];
        }
        else{
            $userInfoSelect = mysqli_fetch_assoc($userInfo);
            
            $_SESSION['userInfo'] = [
            "Level" => $userInfoSelect['Level'],
            "Money" => $userInfoSelect['Money'],
            "UserName" => $userInfoSelect['UserName']
            ];
        }
           
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>
	<link rel="icon" href="image/icon.ico" type="image/x-icon">
</head>
<body background="image/Storm_Dragon_Aurelion_Sol.jpg">
	
	<div class="topBar">
		<div class="topBarButtons">
			<a class="textTopBar" href="main.php">Главная</a>
			<a class="textTopBar" href="shop.php">Магазин</a>
		</div>
		
		<div class="profileButton">
		     <p style="margin-right: 10px; color: #fff;"><?= $_SESSION['user']['login'] ?></p>
			<button class="profile" onclick="showAndHideSettings()">
			   
				<img src="image/profileImage.png" width="45" height="45">
			</button>
		</div>
		
	</div>

	<div class="profileInfoDiv" id="profileInfoDiv">
	   
	        <div style="display: flex; align-items: center;">
			<img src="image/profileImage.png" width="100" height="100">
			<form>
			    <p1><?= $_SESSION['user']['login'] ?></p1>
			</form>
		</div>
		<br>
			<p2>Level: <?= $_SESSION['userInfo']['Level']?></p2><br><br>
			<p2>Money: <?= $_SESSION['userInfo']['Money']?></p2>
	</div>

	<div class="shop" id="store">
		<pShopName>Магазин</pShopName>
		<div class="contents">
			
			<div class="item">
			    <form action="vendor/buy.php" method="post" enctype="multipart/form-data" style="display: block; flex-wrap: wrap;">
			        <img src="image/items/Container3.png" height="150" width="150">
				    <input readonly class="itemItemName" type="text" id="nameItem" name="nameItem" value="Деревянный сундук">
				    <input readonly class="itemPrice" type="text" id="price" name="price" value="100">
				    <input type="submit" value="Купить">
				</form>
				
			</div>
			<div class="item">
			    <form action="vendor/buy.php" method="post" enctype="multipart/form-data" style="display: block; flex-wrap: wrap;">
			        <img src="image/items/Container4.png" height="150" width="150">
				    <input readonly class="itemItemName" type="text" id="nameItem" name="nameItem" value="Железный сундук">
				    <input readonly class="itemPrice" type="text" id="price" name="price" value="200">
				    <input type="submit" value="Купить">
			    </form>
				
			</div>
			<div class="item">
			    <form action="vendor/buy.php" method="post" enctype="multipart/form-data" style="display: block; flex-wrap: wrap;">
			        <img src="image/items/Container2.png" height="150" width="150">
				    <input readonly class="itemItemName" type="text" id="nameItem" name="nameItem" value="Серебренный сундук">
				    <input readonly class="itemPrice" type="text" id="price" name="price" value="300">
				    <input type="submit" value="Купить">
			    </form>
			</div>
		</div>
	</div>

	<div class="exitAndSettings" id="userSettingsDiv">
			<a onclick="openProfile()">Профиль</a>
			<a href="inventory.php">Инвентарь</a>
			<form action="vendor/logout.php" method="post">
		    <input type="submit" class="exit" value="Выйти">
			</form>
		</div>
	<script src="js/JavaScript.js"></script>
</body>
</html>