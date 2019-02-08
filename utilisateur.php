<a href ="nav.php"> Retour aux menus </a>
<?php

$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");

$sql ="SELECT * FROM utilisateur WHERE id_utlisateur=?";

$stmt = $connection1->prepare($sql);
$stmt -> execute([$_GET['id']]);

$utilisateur = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $utilisateur["id_utlisateur"]. " " .$utilisateur["prenom_utilisateur"]. " ".$utilisateur["nom_utilisateur"] ?></h2>