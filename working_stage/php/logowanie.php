<?php

	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_NAME','sqlvitali');
	$man = 'Gość';
	$useName = 0;
	$usePassword = 0;
	$iloscWygranych = 0;
	$iloscPrzegranych = 0;
	$connect = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	if (!$connect){
		echo"ERROR".$connect->connect_errno()." ".$connect->connect_error();
};
	$name = $_POST['name'];
	$password = crypt($_POST['password'],'qw78945gh8');
	$date = date ('Y-m-d-H-i-s');

	$query = $connect->query("SELECT name,password FROM tablevitali");
	while ($line = $query->fetch_array(MYSQLI_BOTH)){
			$nameTable = stripcslashes($line["name"]);
			$passwordTable = $line["password"];
			if ($name == $nameTable){
				return $useName = 1;
			}
			if ($password == $passwordTable){
				return $usePassword = 1;
			}
	};

if ((!empty($_POST['name']))&&(!empty($_POST['password']))&&(isset($_POST['logo']))){
	if (($useName !== 1) && ($usePassword !== 1)){
		$connect->query (sprintf("INSERT INTO tablevitali (name,password,date) VALUE ('%s','%s','$date');",
								addslashes($name),$password))
		or die ('Nie udało się połączyć się z bazą');
		$man = $name;
	}
$query = $connect->query("SELECT wins,losses FROM tablevitali WHERE name ='$name'");
$line = $query->fetch_array(MYSQLI_ASSOC);
$iloscWygranych = $line['wins'];
$iloscPrzegranych = $line['losses'];
	
};
$query->free();



$connect->close();

?>
