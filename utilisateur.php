<a href ="nav.php"> Retour aux menus </a>
<?php
//connection a la base de donnée
$dsn1 = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection1 = new \PDO($dsn1,"root","");
//requete a executer
$sql ="SELECT * FROM utilisateur WHERE id_utlisateur=?";
//exécution de la requete avec query
$stmt = $connection1->prepare($sql);//préparation de la requete
$stmt -> execute([$_GET['id']]);//exécution de la requete 
// $utilisateur dont l'id utilisateur correspond a la valeur de $_GET["id"]
$utilisateur = $stmt -> fetch(PDO::FETCH_ASSOC);

?>

<h2><?= $utilisateur["id_utlisateur"]. " " .$utilisateur["prenom_utilisateur"]. " ".$utilisateur["nom_utilisateur"] ?></h2>