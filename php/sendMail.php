<?php 
extract($_POST);
$name = htmlspecialchars(trim($name));
$firstName = htmlspecialchars(trim($firstName));
$objet = htmlspecialchars(trim($objet));
$email = htmlspecialchars(trim($email));
$text = htmlspecialchars($text);
$newtext = str_replace('\r\n','<br>',$text);

if(!empty($name) && !empty($firstName)  && !empty($objet) && !empty($email) && !empty($text)){

	if(strlen($name) < 3 || strlen($name) > 16) {
		echo "your name should be between 3 and 16 characters.";
		exit();
	}else if(strlen($firstName) < 3 || strlen($firstName) > 16) {
		echo "your first name should be between 3 and 16 characters.";
		exit();
	}else if(strlen($objet) < 3){
		echo "your topic should be 3 characters minimum.";
		exit();
	}else if(is_numeric($name)) {
		echo "your name can't hold numbers.";
		exit();
	}else if(is_numeric($firstName)) {
		echo "your first name can't hold numbers.";
		exit();
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "it's not a valid email<br />";
		exit();
	}else{

		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email)) // On filtre les serveurs qui rencontrent des bogues.
			{
				$passage_ligne = "\r\n";
			}
			else
			{
				$passage_ligne = "\n";
			}
			
			
			//========= notre text sous différents formats
			$message_txt = nl2br($newtext)."
				Cordialement : ".$name." ".$firstName."<br><br>
				Envoyé par : ".$email;
				
			$message_html = "<!DOCTYPE html><head>
				<meta charset='utf-8' />
				<style>
				body
				{
				font-family:calibri;
				text-align:center;
				}
				h3
				{
				color: rgb(0,89,179);
				}
				strong
				{
				color: rgb(11,234,16);
				}
				</style>
				</head>
				<body>
				".nl2br($newtext)."<br><br>
				Cordialement : ".$name." ".$firstName."<br><br>
				Envoyé par : ".$email."
				</body>	</html>";
			
			//=====Création de la boundary
			$boundary = "-----=".md5(rand());
			$boundary_alt = "-----=".md5(rand());
			//==========
			 
			//=====Définition du sujet.
			$sujet = $objet;
			//=========
			 
			//=====Création du header de l'e-mail.
			$header = "From: \"".$name." ".$firstName."\"<".$email.">".$passage_ligne;
			$header.= "Reply-to: \"".$name." ".$firstName."\"<".$email.">".$passage_ligne;
			$header.= "MIME-Version: 1.0".$passage_ligne;
			$header .= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
			//==========
			 
			//=====Création du message.
			$message = $passage_ligne."--".$boundary.$passage_ligne;
			$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
			$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
			//=====Ajout du message au format texte.
			$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
			$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
			$message.= $passage_ligne.$message_txt.$passage_ligne;
			//==========
			 
			$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
			 
			//=====Ajout du message au format HTML.
			$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
			$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
			$message.= $passage_ligne.$message_html.$passage_ligne;
			//==========
			 
			//=====On ferme la boundary alternative.
			$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
			//==========
			 
			 
			 
			$message.= $passage_ligne."--".$boundary.$passage_ligne;
			
			
		$monEmail = 'mathieu.paczesny@gmail.com';

		if(mail($monEmail,$sujet,$message,$header)){
			echo 'success';
		}
		
	}
}else{
	echo 'Please fill in all fields !';
}
 ?>