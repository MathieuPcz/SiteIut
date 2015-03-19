<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Bon de commande</title>
	<style>
	body {
		font-family : sans-serif ;
	}
	.jaune {
		background-color: #fff9b6;
	}
	.vert {
		background-color: #96ff96;
	}
	.trTable{
		height: 30px;
	}
	</style>
</head>
<body>
	<h1>Bon de commande</h1>
	<table border="1">
		<tr>
			<td>Désignation</td>
			<td>Quantité</td>
			<td>Prix unitaire</td>
			<td>Prix total</td>
		</tr>

	<?php
	$lignes=12;
		for ($i=0; $i < $lignes ; $i++) { 
			if($i%2 == 1){
				echo'<tr class="trTable vert">
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>';
			}else{
				echo'<tr class="trTable jaune">
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>';
			}
			
		}
	?>
		<tr class="trTable">
			<td></td>
			<td></td>
			<td>Total H.T</td>
			<td></td>
		</tr>
		<tr class="trTable">
			<td></td>
			<td></td>
			<td>T.V.A</td>
			<td></td>
		</tr>
		<tr class="trTable">
			<td></td>
			<td></td>
			<td>Total T.T.C</td>
			<td></td>
		</tr>
	</table>
</body>
</html>