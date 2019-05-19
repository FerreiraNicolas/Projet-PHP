<?php
$dsn = 'mysql:dbname=PROJET;host=localhost';
$login = $_POST['login'];
$password = $_POST['password'];
$user = 'root';
$passwd= 'azerty';

try {
	$pdo = new PDO($dsn,$user,$passwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$request ="select login,password from USER where login='".$login."'";
	$pdoreq = $pdo->query ($request);
	$pdoreq->setFetchMode(PDO::FETCH_BOTH);


	foreach ($pdoreq as $ligne) {
		
		if ($ligne['password'] == $password){
				header('Location: welcome.html');
			}

			else
				echo "rate";


			# code...
		}



}
catch(PDOexeption $event){
	echo "Erreur: ".$e->getMessage()."<br/>" ;
	die();
}

?>