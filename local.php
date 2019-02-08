<a href ="nav.php"> Retour aux menus </a>
<?php

$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");

$sql ="SELECT * FROM local WHERE id_local=?";

$stmt = $connection1->prepare($sql);
$stmt -> execute([$_GET['id']]);

$local = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $local["id_local"]. " " .$local["nom_local"]?></h2>