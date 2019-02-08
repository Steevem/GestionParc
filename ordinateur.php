<a href ="nav.php"> Retour aux menus </a>
<?php

$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");

$sql ="SELECT * FROM ordinateur WHERE id_ordinateur=?";

$stmt = $connection1->prepare($sql);
$stmt -> execute([$_GET['id']]);

$ordinateur = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $ordinateur["id_ordinateur"]. " " .$ordinateur["modele_ordinateur"]?></h2>