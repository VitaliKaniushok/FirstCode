<?php
session_start();

$_SESSION['lang'] = isset($_GET['lang']) ? $_GET['lang'] : 'pl';

switch($_SESSION['lang']) :
	case 'pl' : include('language/language.pl.php'); break;
	case 'be' : include('language/language.be.php'); break;
	case 'ru' : include('language/language.ru.php'); break;
	case 'en' : include('language/language.en.php'); break;
endswitch;

?>