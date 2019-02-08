<a href ="nav.php"> Retour aux menus </a>
<?php
//connection de la base d edonnée
$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");
//requete a effectuer
$sql ="SELECT * FROM imprimante WHERE id_imprimante=?";
//execution de la requete avec query
$stmt = $connection1->prepare($sql);//preparation de la requete
$stmt -> execute([$_GET['id']]);//execution de la requete
// $imprimante dont l'id imprimante correspond a la valeur de $_GET["id"]
$imprimante = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $imprimante["id_imprimante"]. " " .$imprimante["modele_imprimante"]. " " .$imprimante["id_local"]?></h2>