<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Punition</title>
</head>
<body>
	<h1>Punition</h1>
	<!-- version sans boucle -->
	<p>1) Je dois apprendre mon cours de PHP !</p><br>
	<p>2) Je dois apprendre mon cours de PHP !</p><br>
	<p>3) Je dois apprendre mon cours de PHP !</p><br>
	<p>4) Je dois apprendre mon cours de PHP !</p><br>
	<p>5) Je dois apprendre mon cours de PHP !</p><br>
	<p>6) Je dois apprendre mon cours de PHP !</p><br>
	<p>7) Je dois apprendre mon cours de PHP !</p><br>
	<p>8) Je dois apprendre mon cours de PHP !</p><br>
	<p>9) Je dois apprendre mon cours de PHP !</p><br>
	<p>10) Je dois apprendre mon cours de PHP !</p><br>

	<h1>Punition</h1>
	<?php 

	//version boucle for
	for ($i=1; $i <= 10 ; $i++) { 
		echo  '<p>'.$i.') Je dois apprendre mon cours de PHP !</p><br>';
	}

	echo'<h1>Punition</h1>';
	//version boucle while
	$a = 1;
	while ( $a <= 10) {
		
		echo '<p>'.$a.') Je dois apprendre mon cours de PHP !</p><br>';
		$a++;
	}
	 ?>

</body>
</html>