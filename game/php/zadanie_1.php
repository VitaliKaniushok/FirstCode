<?php echo '
<html lang="pl">
	<head>
		<title>Ticket_1</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="autor" content="Vitali"/>
	</head>
	<body>
		<div class="container" style="background-color:grees; font-size: 14px;">
				<h2>ZADANIE:</h2>
				<p>Jest dana tablica liczb całkowitych <b>$A = array {A[i],..,A[n]}</b>.
				<br>
				Funkcja wybiera środkowy element tablicy( na zasadzie <b>(int) n/2</b>, gdzie <b>n</b>- ilość elementów tablicy).
				<br>Jeżeli liczba z tego elementu powtaża się w innych elementach tej tablicy, a liczba powtużeń jest większa niż 
				<br>index <b>A[i]</b> tego środkowego elementu, to funkcja zwraca <b>tą</b> liczbę, inaczej - "<b>-1</b>".
				<br><br>Naprzykład mamy tablicę $A = array(3,3,2,<b>3</b>,3,3,6,89) liczba <b>3</b> jest środkową i powtarza się <b>5</b> razy.
				Index tego elementu to A<b>[4]</b>.<br> Wiadomo <b>4 < 5</b>, znaczy funkcja zwróci <b>3</b>. </p>
			<form method="post">
				<label><i>Wprowadż tablicę danych przez przecinek(bez przecinku na końcu).<br>Wprowadzać można tylko całkowite liczby!<i></label>
				<br>
				<br>
				<input type="text" name="tablica" placeholder="3,22,-5,3,0"/>
				<br>
				<br>
				<br>
				<input type="submit" value="Enter">'; if(!empty($_POST[ 'tablica'])){ if (preg_match( '/^(-?[0-9],?)+\b$/',$_POST[ 'tablica'])){ $tablica=$_POST[ 'tablica']; $tablica_danych=e xplode( "," ,$tablica); echo '<h2>Wprowadzone dane:</h2>'; print_r($tablica_danych); echo '<br><br>'; echo ' <b>WYNIK:</b>'; solution($tablica_danych); } else{ echo '<h2 style="color:red;">Błąd! Wprowadzenie danych do tablicy nie może być:  '.$_POST[ 'tablica']. '</h2>'; echo '<h2> Monżna wprowadzać tylko cyfry przez przecinek bez spacji!
								<br>Dane także nie mogą kończyć się przecinkiem!</h2>'; } }; echo '</form>
			<h3>Kod PHP tej funkcji</h3>
			<p><pre>
function solution(&$A) {
    $n = sizeof($A);
    $L = array_pad(array(), $n + 1, -1);
	  for ($i = 0; $i < $n; $i++) {
        $L[$i + 1] = $A[$i];
}
	$count = 0;
    $pos = (int) (($n + 1) / 2);
    $candidate = $L[$pos];
	  for ($i = 1; $i < $n; $i++) {
        if ($L[$i] == $candidate)
            $count = $count + 1;
}
	if ($count > $pos)
        echo $candidate;
	else 
		echo "(-1)";
}
		</pre></p>'; echo '<a href="../index.html" target="_blank" style="font-size:3vw">Przejść do gry "kółko i krzyrzyk"</a>
		</div>
	</body>
	</html>'; function solution(&$A) { $n=s izeof($A); $L=a rray_pad(array(), $n + 1, -1); for ($i=0 ; $i < $n; $i++) { $L[$i + 1]=$ A[$i]; } $count=0 ; $pos=( int) (($n + 1) / 2); $candidate=$ L[$pos]; for ($i=1 ; $i < $n; $i++) { if ($L[$i]==$ candidate) $count=$ count + 1; } if ($count>$pos) echo $candidate; else echo '(-1)'; } ?>

