<?php
//SCENARIO OU L'USER N'EST PAS CONNECTE
 session_start();
 if(!isset($_SESSION['user'])){
   header('Location:client.php');
 }
 include 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css"> 
</head>

<body>

  <br>  
  <h3>Bonjour <?php echo $_SESSION['user']?></h3>
  <a href="deconnexion.php" class="btn btn-danger btn">
    Deconnexion
  </a>

<div class="container"> 
  </button>
    <table class="table my-5">
      <thead class="thead-light">
        <tr>
          <th scope="col">Vos consultations:</th>
          <th scope="col">Nom Client</th>
          <th scope="col">Contact client</th>
          <th scope="col">Heure</th>
          <th scope="col">Jour</th>
         
        </tr>
      </thead>
      <tbody>

    <?php

$sql="SELECT idConsultation, nomClient, prenomClient, emailClient, telClient, heureConsult, jourConsult FROM client, medecin, consultation WHERE idCli = idClient";

$result=mysqli_query($con,$sql);

if($result)
{
  
  while($row=mysqli_fetch_assoc($result))
  {
    $id=$row["idConsultation"];
    $nom=$row["nomClient"];
    $prenom=$row["prenomClient"];
    $email=$row["emailClient"];
    $tel=$row["telClient"];
    $heure=$row["heureConsult"];
    $jour=$row["jourConsult"];

  
    echo'<tr>
    <td></td>
    <td>'.$nom.' '.$prenom.'</td>
    <td>email : '.$email.' ,  telephone : '.$tel.'</td>
    <td>'.$heure.'</td>
    <td>'.$jour.'</td>
    </tr>';
    
    
  }
}
?>
     
      </tbody>
    </table>
</div>
</body>
</html>