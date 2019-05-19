<?php
$dsn = 'mysql:dbname=PROJET;host=localhost';
$user = 'root';
$passwd= 'azerty';

try {

	$prd_id = $_POST['prd_id'];
	$pdo = new PDO($dsn,$user,$passwd);

	$request = "delete from Produit
			where prd_id = '$prd_id'
			";
$pdoreq = $pdo -> query ($request);
	$pdoreq -> setFetchMode(PDO::FETCH_BOTH);
	echo "La suppression a bien été effectué";

}
catch(PDOexeption $event){
	echo "Erreur: ".$e->getMessage()."<br/>" ;
	die();
}







?>