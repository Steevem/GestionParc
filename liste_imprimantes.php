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
         <h2>LOCAL</h2>
      <?php
//pour ce conncecter a la base de donnée
    $dsn = 'mysql:dbname=gestionparc;host=localhost;port=3307;charset=utf8';
    $connection = new \PDO($dsn,"root","");
//requete a exécuter
    $sql ="SELECT * FROM imprimante";
//requete a executer avec l'aide de query
    $stmt = $connection -> query($sql);
//Récuperation des données dans un tableau associatif
    $liste_imprimante = $stmt -> fetchAll (PDO::FETCH_ASSOC);
foreach ($liste_imprimante as $imprimante ) {
?> 
        <a href = "imprimante.php?id=<?= $imprimante["id_imprimante"] ?>" >
            <?= $imprimante["id_imprimante"]. " " .$imprimante["modele_imprimante"]. " " .$imprimante["id_local"]?>
        </a>
        <br>   
    <?php 
}
        $connection = null ;
    ?>   
</body>
</html>