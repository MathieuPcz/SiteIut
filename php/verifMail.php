<?php 

extract($_POST);
$email = htmlspecialchars(trim($email));
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "it's not an address email<br />";
		exit();
	}else{
		echo 'success';
	}
 ?>