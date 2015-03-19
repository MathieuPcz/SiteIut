<?php 

$age=$_POST['age'];
$ville=ucfirst($_POST['ville']);
$prix=$_POST['prix'];

if(!empty($age)&& !empty($ville) && !empty($prix)){
	if(!is_numeric($age)){
		echo 'Votre âge doit etre un nombre entier';
		exit();
	}
	if(!is_numeric($prix)){
		echo 'Votre prix doit etre un nombre entier';
		exit();
	}
	if($age<18 && $ville=="Troyes"){
		$prixReduit = $prix*0.90;
		echo 'Vous bénificiez de 10% votre artcile coute maintenant : '.$prixReduit.' €';;
	}elseif($age>=18 && $ville=="Romily"){
		$prixReduit = $prix*0.88;
		echo 'Vous bénificiez de 12% votre artcile coute maintenant : '.$prixReduit.' €';;
	}elseif($age<18 && $ville !="Troyes"){
		$prixReduit = $prix*0.92;
		echo 'Vous bénificiez de 8% votre artcile coute maintenant : '.$prixReduit.' €';;
	}elseif($age>=18 && $ville !="Troyes" && $ville !="Romily"){
		$prixReduit = $prix*0.85;
		echo 'Vous bénificiez de 15% votre artcile coute maintenant : '.$prixReduit.' €';
	}elseif ($age>18 && $ville=="Troyes") {
		echo 'Aucune réduction votre article coute toujours : '.$prix.' €';
	}

}else{

	echo'veuillez remplir tout les champs';
}

 ?>