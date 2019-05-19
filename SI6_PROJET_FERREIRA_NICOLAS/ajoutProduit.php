<?php
$dsn = 'mysql:dbname=PROJET;host=localhost';
$user = 'root';
$passwd= 'azerty';

try {
	$idProduit = $_POST['idProduit'];
	$nomProduit = $_POST['nomProduit'];
	$quantite = $_POST['quantite'];
	$pu = $_POST['pu'];
	$categorie = $_POST['categorie'];
	$pdo = new PDO($dsn,$user,$passwd);

	$request = "INSERT into Produit(prd_id,prd_nom,prd_qte,prd_pu,prd_cat)
			VALUES('$idProduit','$nomProduit','$quantite','$pu','$categorie') 
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