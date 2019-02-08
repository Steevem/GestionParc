<a href ="nav.php"> Retour aux menus </a>
<?php

$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");

$sql ="SELECT * FROM imprimante WHERE id_imprimante=?";

$stmt = $connection1->prepare($sql);
$stmt -> execute([$_GET['id']]);

$imprimante = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $imprimante["id_imprimante"]. " " .$imprimante["modele_imprimante"]. " " .$imprimante["id_local"]?></h2>