<?php
if ($usePassword == 1){
	echo('Takie hasło już istnieje');
}
if ((!empty($_POST['name']))&&(empty($_POST['password']))){
	echo ('Musish wprowadzić hasło');
};

?>