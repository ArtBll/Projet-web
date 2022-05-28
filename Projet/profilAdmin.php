<?php
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
<div class="container">
  <br>  
  <h2>bonjour <?php echo $_SESSION['user']?></h2>
  <a href="deconnexion.php" class="btn btn-danger btn">
    Deconnexion
  </a>

  <button class="btn btn-primary my-5">
  <a href="profilAdminAdd.php" class="text-light">
      Add user
  </a>


  </button>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Email</th>
          <th scope="col">Telephone</th>
          <th scope="col">Photo</th>
          <th scope="col">Type</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>

    <?php

$sql="SELECT idMedecin, nomMedecin, prenomMedecin, emailMedecin, telMedecin, photoMedecin, typeMedecin FROM medecin";

$result=mysqli_query($con,$sql);

if($result)
{
  
  while($row=mysqli_fetch_assoc($result))
  {
    $id = $row['idMedecin'];
    $nom=$row["nomMedecin"];
    $prenom=$row["prenomMedecin"];
    $email=$row["emailMedecin"];
    $tel=$row["telMedecin"];
    $photo=$row["photoMedecin"];
    $type=$row["typeMedecin"];
    echo'<tr>
    <td>'.$id.'</td>
    <td>'.$nom.'</td>
    <td>'.$prenom.'</td>
    <td>'.$email.'</td>
    <td>'.$tel.'</td>
    <td>'?> <img src="profile_img/<?php echo $photo; ?>" height=50 width=50> <?php echo'</td>
    <td>'.$type.'</td>
    <td> 
        <button class="btn btn-danger">
          <a href="profilAdminDelete.php?deleteid='.$id.'" class="text-light">
            Delete
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