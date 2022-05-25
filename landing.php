<?php
//SCENARIO OU L'USER N'EST PAS CONNECTE
 session_start();
 if(!isset($_SESSION['user'])){
   header('Location:client.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <h1>bonjour <?php echo $_SESSION['user']?></h1>
  <!--HREF PEUT ETRE MODIFIE SELON LE NOM DES FICHIERS--> 
  <a href="deconnexion.php" class="btn btn-danger btn-lg">Deconnexion</a>
  <!--DECONNEXION SI LUTILISATEUR DECIDE D'INTERAGIR AVEC LE BOUTON--> 
</body>
</html>