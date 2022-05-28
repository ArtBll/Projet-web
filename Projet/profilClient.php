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
  <h2>bonjour <?php echo $_SESSION['user']?></h2>
  <a href="deconnexion.php" class="btn btn-danger btn">
    Deconnexion
  </a>

  <div class="container">
  </button>
    <table class="table my-5">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Vos consultations:</th>
          <th scope="col">Nom medecin</th>
          <th scope="col">Contact</th>
          <th scope="col">Heure</th>
          <th scope="col">Jour</th>
          <th scope="col">Consultation</th>
          <th scope="col">Operation</th>
         
        </tr>
      </thead>
      <tbody>

    <?php

$sql="SELECT idConsultation, nomMedecin, prenomMedecin, emailMedecin, heureConsult, jourConsult, typeMedecin FROM client, medecin, consultation WHERE idCli = idClient";

$result=mysqli_query($con,$sql);

if($result)
{
  
  while($row=mysqli_fetch_assoc($result))
  {
    $id=$row["idConsultation"];
    $nom=$row["nomMedecin"];
    $prenom=$row["prenomMedecin"];
    $email=$row["emailMedecin"];
    $heure=$row["heureConsult"];
    $type=$row["typeMedecin"];
    $jour=$row["jourConsult"];

  
    echo'<tr>
    <td></td>
    <td>'.$nom.' '.$prenom.'</td>
    <td>'.$email.'</td>
    <td>'.$heure.'</td>
    <td>'.$jour.'</td>
    <td>'.$type.'</td>
    <td> 
        <button class="btn btn-danger">
          <a href="profilClientDelete.php?deleteid='.$id.'" class="text-light">
            Annuler RDV
          </a>
        </button>
   </td>
    </tr>';
    
    
  }
}
?>
     
      </tbody>
    </table>
</div>
</body>
</html>