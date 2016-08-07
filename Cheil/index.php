<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="major">
	<div class="container">
		<h2>Some text</h2>
		<div class="windoww">
			<h1><p></p></h1>
			<p><span>Lorem Ipsum is simply dummy text</span> of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
			<form>
				<input type="text" name="text" id="textId">
				<input type="submit" name="give" id="giveId" value="Give cashe" >
			</form>
			<h2><i>Do you cash now?</i></h2>
		</div>
		<form>
			<input type="submit" name="button1" id="buttonId1" value="Button1" >
			<input type="submit" name="button2" id="buttonId2" value="Button2" >
		</form>
		
		<a href="#" ><h3 class="star"></h3><p>Home page</h3><h3 class="star"></h3></a>
		
		<div id="star">&nbsp;</div>
	</div>
	<div class="container2">
		<?php include '/php/logowanie.php' ;?>
		<?php include 'php/rejestracja.php' ?>
		<h2>Witam, <?php echo $man ?> ,na mojej stronie</h2>
		<br>
		<h3>Zaloguj się, </h3>
		<br><br>
		<form method="post">
		<input type="text" name="name" placeholder="Wprowadż imę" >
		<br><label id="imie"><?php include'/php/badLogin.php' ?></label><br>
		<input type="password" name="password" placeholder=" Wprowadż hasło">
		<br><label id="haslo"><?php include'/php/badPassword.php' ?></label><br>
		<input type="submit" name="logo" value="Rejestracja">
		<?php echo "<p>$rejestracja</p>"?>
		<br>
		</form>
		<form method="post">
		<input type="text" name="nameIsset" placeholder="Wprowadż imę" >
		<br><label id="imieIsset"></label><br>
		<input type="password" name="passwordIsset" placeholder=" Wprowadż hasło">
		<br><label id="hasloIsset"></label><br>
		<input type="submit" name="logoIsset" value="Wejście"></form>
		<?php echo "<p>$logowanie</p>"?>
		<br><br>
		<p>Na ten <a href="mailto:vitalikaniushok@gmail.com">adres </a>można wysyłać pozytywne odpowiedzi z rekrutacji :)</p>
		<br><p>Pod tym adresem <a href="https://github.com/VitaliKaniushok/FirstCode/tree/master/Cheil">na servisie Githuba</a> znajdują się kody tej strony</p>
		<br><p>Przejść na<a href="../index.html"> główną stronę</a></p>
		</div>
	</div>
</body>
</html>