<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
   
</head>
<body>
<a href ="nav.php"> Retour aux menus </a>
         <h2>utilisateur</h2>
      <?php
//pour ce conncecter a la base de donnée
    $dsn = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
    $connection = new \PDO($dsn,"root","");
//requete a exécuter
    $sql ="SELECT * FROM utilisateur";
//requete a executer avec l'aide de query
    $stmt = $connection -> query($sql);
//Récuperation des données dans un tableau associatif
    $liste_utilisateur = $stmt -> fetchAll (PDO::FETCH_ASSOC);
foreach ($liste_utilisateur as $utilisateur ) {
?> 
        <a href = "utilisateur.php?id=<?= $utilisateur["id_utlisateur"] ?>" >
            <?= $utilisateur["id_utlisateur"]. " " .$utilisateur["prenom_utilisateur"]. " ".$utilisateur["nom_utilisateur"]?>
        </a>
        <br>   
    <?php 
}
        $connection = null ;
    ?>   
</body>
</html>




