<a href ="nav.php"> Retour aux menus </a>
<?php

$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");

$sql ="SELECT * FROM moniteur WHERE id_moniteur=?";

$stmt = $connection1->prepare($sql);
$stmt -> execute([$_GET['id']]);

$moniteur = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $moniteur["id_moniteur"]. " " .$moniteur["modele_moniteur"]?></h2>