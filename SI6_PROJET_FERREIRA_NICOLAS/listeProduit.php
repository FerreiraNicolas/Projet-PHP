			<?php
$dsn = 'mysql:dbname=PROJET;host=localhost';
$user = 'root';
$passwd= 'azerty';

try {
	$pdo = new PDO($dsn,$user,$passwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$request = "SELECT * FROM Produit";
	$pdoreq = $pdo -> query ($request);
	$pdoreq -> setFetchMode(PDO::FETCH_BOTH);
	echo "<body style='background-color:grey'>";


	echo "<center>".
			"<b> Liste des Produits:</b> <br> </br>".
			"</center>";



			echo "<center><table border= 1  bgcolor='white' >";
			echo "<tr>";
			echo "<th>"."prd_id"."</th>";
			echo "<th>"."prd_nom"."</th>";
			echo "<th>"."prd_qte"."</th>";
			echo "<th>"."prd_pu"."</th>";
			echo "<th>"."prd_cat"."</th>";
	

	foreach ($pdoreq as $key => $ligne) {
		

		echo "<tr>";
		echo "<td>".$ligne['prd_id']."</td>";
		echo "<td>".$ligne['prd_nom']."</td>";
		echo "<td>".$ligne['prd_qte']."</td>";
		echo "<td>".$ligne['prd_pu']."</td>";
		echo "<td>".$ligne['prd_cat']."</td>";
		echo "</tr>";
		
}
echo "</table></center>";
}
catch(PDOexeption $event){
	echo "Erreur: ".$e->getMessage()."<br/>" ;
	die();
}


	?>