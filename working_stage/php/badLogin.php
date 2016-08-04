<?php
if ($useName == 1){
	echo('Takie imię już istnieje');
}else if ((empty($_POST['name']))&&(!empty($_POST['password']))){
	echo ('Musish wprowadzić imię');
};

?>