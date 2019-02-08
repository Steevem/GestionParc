<a href ="nav.php"> Retour aux menus </a>
<?php
//connection a la base de donnée
$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");
//requete  a executer
$sql ="SELECT * FROM ordinateur WHERE id_ordinateur=?";
//exécution de la requete avec query
$stmt = $connection1->prepare($sql);//preparation de la requete
$stmt -> execute([$_GET['id']]);//execution de la requete
// $ordinateur dont l'id ordinateur correspond a la valeur de $_GET["id"]
$ordinateur = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $ordinateur["id_ordinateur"]. " " .$ordinateur["modele_ordinateur"]?></h2>