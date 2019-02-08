<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
 <?php
try
{
	$dsn = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
    $connection = new \PDO($dsn,"root","");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// on teste si les variables du formulaire sont déclarées
if (isset($_POST['nom_utilisateur']) && isset($_POST['prenom_utilisateur']) && isset($_POST['id_local'])) {
	// lancement de la requête
$sql = 'INSERT INTO utilisateur (id_utlisateur, nom_utilisateur,prenom_utilisateur,id_local) 
        VALUES(null,"'.$_POST['nom_utilisateur'].'", "'.$_POST['prenom_utilisateur'].'", "'.$_POST['id_local'].'")';
    $stmt = $connection->prepare($sql);
    $stmt->execute(array($_POST['nom_utilisateur'],$_POST['prenom_utilisateur'],$_POST['id_local'])) ;
	// un petit message permettant de se rendre compte de la modification effectuée
	echo 'l utilisateur '.$_POST['nom_utilisateur'].' '.$_POST['prenom_utilisateur'].'a bien été ajouter';
}
else {
echo 'Les variables du formulaire ne sont pas déclarées';
}
?>
</body>
</html>


