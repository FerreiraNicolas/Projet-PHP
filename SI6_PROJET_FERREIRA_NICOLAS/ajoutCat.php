<?php
$dsn = 'mysql:dbname=PROJET;host=localhost';
$user = 'root';
$passwd= '';

try {

	$categorie = $_POST['categorie'];
	$pdo = new PDO($dsn,$user,$passwd);

	$request = "INSERT into categorie(categorie)
			VALUES('$categorie') 
			";
$pdoreq = $pdo -> query ($request);
	$pdoreq -> setFetchMode(PDO::FETCH_BOTH);
	echo "Le transfert a bien été effectué";

}
catch(PDOexeption $event){
	echo "Erreur: ".$e->getMessage()."<br/>" ;
	die();
}







?>