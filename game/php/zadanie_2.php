<?php echo '
<html lang="pl">
	<head>
		<title>Ticket_2</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="autor" content="Vitali"/>
	</head>
	<body>
		<div class="container">
				<h2>ZADANIE:</h2>
				<p>Jest dana tablica liczb całkowitych <b>$A = array {A[i],..,A[n]}</b>.
				<br>Funkcja wybiera z tablicy ciągi  z trzech elementów <b>Q,P,R</b> takich, że <b>{A[i],..,Q,P,R,..A[n]}</b>,
				<br>gdzie <b>Q > P < R </b> ("dept" w j.ang.).Zwracany jest element <b>P</b>, który jest najmniejszy z wybranych ciągów.
				<br>Jeżeli taki nie istnieje, funkcja zwróci "<b>-1</b>".
				<br>Naprzykład mamy tablicę $A = array(3,2,3,1,2,4). Wybrane ciągi według opisanych zasad to:
				<br>(3,<b>2</b>,3) i  (3,<b>1</b>,2)<br> a najmniejszy z nich to (3,1,2), bo środkowa "1" mniejsza od  środkowej "2"
				</p>
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
	$col = $n-2;
	$dept_array = array();
	for ($i = 0; $i <$col; $i++) {
		if ( ($A[$i]>$A[$i+1]) and ($A[$i+1]<$A[$i+2]) ) {
			$dept=$A[$i+1];
			$dept_array[] = $dept;
}
}	
	if (!empty($dept_array)){
		$min_dept = min($dept_array) ;
		echo $min_dept;
}
	else echo "(-1)";
}
					</pre></p>'; echo '<a href="../index.html" target="_blank" style="font-size:3vw">Przejść do gry "kółko i krzyrzyk"</a>
	</div>
	</body>
	</html>'; function solution(&$A) { $n=s izeof($A); $col=$ n-2; $dept_array=a rray(); for ($i=0 ; $i <$col; $i++) { if ( ($A[$i]>$A[$i+1]) and ($A[$i+1]
<$A[$i+2]) ) { $dept=$A[$i+1]; $dept_array[]=$ dept; } } if (!empty($dept_array)){ $min_dept=m in($dept_array) ; echo $min_dept; } else echo '(-1)'; } ?>