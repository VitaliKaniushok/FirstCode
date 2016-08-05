<?php
$nameIsset = 0;
$passwordIsset = 0;
$logowanie = '';
$connect = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	if (!$connect){
		echo"ERROR".$connect->connect_errno()." ".$connect->connect_error();
};
if ((!empty($_POST['nameIsset']))&&(!empty($_POST['passwordIsset']))&&(isset($_POST['logoIsset']))){
		$nameIsset = $_POST['nameIsset'];
		$passwordIsset = crypt($_POST['passwordIsset'],'qw78945gh8');
		$query = $connect->query("SELECT name,password,wins,losses FROM tablevitali");
	while ($line = $query->fetch_array(MYSQLI_BOTH)){
			$nameTable = stripcslashes($line["name"]);
			$passwordTable = $line["password"];
			if (($nameIsset == $nameTable)&&($passwordIsset == $passwordTable)){
				$man = $nameIsset;
				$iloscWygranych = $line['wins'];
				$iloscPrzegranych = $line['losses'];
				$logowanie='Logowanie powiodło się';
			}else{
					$logowanie='Nieprawidłowe dane';
				}
	};
}

$connect->close();
?>