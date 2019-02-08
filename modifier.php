<?php
// on se connecte à notre base
$dsn = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
$connection = new \PDO($dsn,"root","");
?>
<html>
<head>
<title>Modification de l'adresse d'un propriétaire</title>
</head>
<body>
<?php
// on teste si les variables du formulaire sont déclarées
//if (isset($_POST['nom_utilisateur']) && isset($_POST['prenom_utilisateur'])) {

	// lancement de la requête
	$sql = 'UPDATE utilisateur SET nom="'.$_POST['nom_utilisateur'].'" WHERE prenom="'.$_POST['prenom_utilisateur'].'"';
    $sql = 'INSERT INTO utilisateur(id_utlisateur, nom_utilisateur,prenom_utilisateur,id_local) VALUES(Null,$_POST['nom_utilisateur'],$_POST['prenom_utilisateur'],$_POST['id_local'])';
	// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
	mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

	// on ferme la connexion à la base
	mysql_close();

	// un petit message permettant de se rendre compte de la modification effectuée
	echo 'l utilisateur '.$_POST['nom_utilisateur'].''.$_POST['prenom_utilisateur'].'a bien été ajouter';
//}
//else {
//echo 'Les variables du formulaire ne sont pas déclarées';
//}
?>
</body>
</html>