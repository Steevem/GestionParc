<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire d'ajout de donnée</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<form method="post" action="generate_datas.php">
 
 <p>
 
       <label for="nom_utilisateur">Votre nom :</label>
       <input type="text" name="nom_utilisateur"/>
       <br><br>
       <label for="prenom_utilisateur">Votre prenom :</label>
       <input type="text" name="prenom_utilisateur"/>
       <br><br>
       <label for="id_local">Dans quelle local êtes vous</label><br />
       <select name="id_local">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10">10</option>
       </select>
       <br>
       <br>
       <input type="submit" value="Valider" />

 </p>
  
 </form>   

</body>
</html>