<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="example,lesson,html5,junior developer" >
	<meta name="description" content="przykład tworzenia strony internetowej,składającej się z headera,contenta i footera w html5" >
	<meta name="viewport" content="width=device-width;initial-scale=1,0;user-scalable=yes"/>
	<title>Example_1</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="header">
		<?php include '/php/logowanie.php' ;?>
		<?php include 'php/rejestracja.php' ?>
		<h2>Witam, <?php echo $man ?> ,na mojej reprezyntacyjnej stronie</h2>
		<h3>Zaloguj się, aby móc prowadzić liczenie swoich wygranych, a może i przegranych w grze przeciw komputerowi</h3>
		<form method="post">
		<input type="text" name="name" placeholder="Wprowadż imę" >
		<br><label id="imie"><?php include'/php/badLogin.php' ?></label><br>
		<input type="password" name="password" placeholder=" Wprowadż hasło">
		<br><label id="haslo"><?php include'/php/badPassword.php' ?></label><br>
		<input type="submit" name="logo" value="Rejestracja">
		<br>
		<form>
		<br><p>Twoja ilość wygranych: <?php echo $iloscWygranych ?> raz(y)</p>
		<br><p>Twoja ilość przegranych: <?php echo $iloscPrzegranych ?> raz(y)</p>
		<br>
		<form>
		<input type="text" name="nameIsset" placeholder="Wprowadż imę" >
		<br><label id="imieIsset"></label><br>
		<input type="password" name="passwordIsset" placeholder=" Wprowadż hasło">
		<br><label id="hasloIsset"></label><br>
		<input type="submit" name="logoIsset" value="Login"></form>
		<?php echo "<p>$logowanie</p>";?>
		</div>
	<div id="container">
		<div id="main">
			<h2>Zpraszam do gry</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel sollicitudin felis. Sed lacinia ultrices efficitur. Vivamus dictum, risus ac faucibus aliquet, nunc dolor volutpat nunc, ut hendrerit orci odio eget libero. Fusce ultrices tortor odio, ut consectetur elit tempor eget. Sed rhoncus rhoncus rutrum. Etiam nulla magna, efficitur ac quam a, hendrerit faucibus orci. Mauris ut maximus felis. Etiam non volutpat velit. Quisque volutpat odio vitae ipsum posuere, quis molestie tortor congue. Phasellus ac dignissim purus, vitae consequat ipsum. Nulla mattis sapien justo, varius commodo orci rhoncus vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id tempus metus.
			</p>
			<table id="pole">
					<tr>
						<td><div id="1" ><p></p></div></td>
						<td><div id="2" ><p></p></div></td>
						<td><div id="3"><p></p></div></td>
					</tr>
					<tr>
						<td><div id="4" ><p></p></div></td>
						<td><div id="5" ><p></p></div></td>
						<td><div id="6" ><p></p></div></td>
					</tr>
					<tr>
						<td><div id="7" ><p></p></div></td>
						<td><div id="8" ><p></p></div></td>
						<td><div id="9" ><p></p></div></td>
					</tr>
				</table>
				<h3 id="inAdraw"></h3>
				<input id="reset" type="submit" name="reset" value="Reset">
		</div>
		<div id="nav">
			<h2>Załączniki</h2>
			<p><a href=""><img src="CssHtml.jpg" alt="CSSiHTML"></a></p>
			<p></p>
			<p><a href=""><img src="php.png" alt="PHP"></a></p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essen.</p>
		</div>
	</div>
	<div id="footer">
		<p>Copyring by Vitali Kaniushok</p>
	</div>
</body>
<script type="text/jscript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script><script type="text/jscript" src="js/height.js"></script>
<script type="text/jscript" src="js/jquery.js"></script>
</html>