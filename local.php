<a href ="nav.php"> Retour aux menus </a>
<?php
//connection a la base de donnée
$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");
//requete a effectuer
$sql ="SELECT * FROM local WHERE id_local=?";
//execution de la requete avec query
$stmt = $connection1->prepare($sql);//preparation de la requete
$stmt -> execute([$_GET['id']]);//excution de la requete
// $local dont l'id local correspond a la valeur de $_GET["id"]
$local = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $local["id_local"]. " " .$local["nom_local"]?></h2>