<?php
//SCENARIO OU L'USER N'EST PAS CONNECTE
session_start();
if (!isset($_SESSION['user'])) {
  header('Location:client.php');
}
include 'dbconfig.php';
$id = $_SESSION['id'];
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light nav">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" width="60" height="60" class="" alt="">&nbsp;&nbsp;Omnès Santé
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link d-inline-block align-top" href="index.php">
              <font size="+1">Acceuil</font>
            </a>
          </li>
          <li class="nav-itema active">
            <a class="nav-link" href="parcourir.php">
              <font size="+1">Tout Parcourir</font>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profilClient.php">
              <font size="+1">Rendez-vous</font>
            </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="POST" action="recherche.php">
          <input class="form-control" name="recherche" type="text" placeholder="Search" aria-label="Search">&nbsp;&nbsp;
          <input type="submit" class="btn btn-primary mr-2 my-sm-0" name="envoyer" value='Rechercher'>
    </a>
    <a type="button" class="btn btn-danger mr-2 my-sm-0" href="client.php"><i class="bi bi-person"></i>&nbsp;&nbsp;Déconnexion</a>
    </form>
    </div>
  </nav>

  <br>
  

  <div class="container">
    <h2>Bonjour <?php echo $_SESSION['user'] ?></h2>
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

        $sql = "SELECT idConsultation, nomMedecin, prenomMedecin, emailMedecin, heureConsult, jourConsult, typeMedecin FROM client, medecin, consultation WHERE idClient = $id AND idCli = idClient AND idMedecin = idMed";

        $result = mysqli_query($con, $sql);

        if ($result) {

          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["idConsultation"];
            $nom = $row["nomMedecin"];
            $prenom = $row["prenomMedecin"];
            $email = $row["emailMedecin"];
            $heure = $row["heureConsult"];
            $type = $row["typeMedecin"];
            $jour = $row["jourConsult"];


            echo '<tr>
    <td></td>
    <td>' . $nom . ' ' . $prenom . '</td>
    <td>' . $email . '</td>
    <td>' . $heure . '</td>
    <td>' . $jour . '</td>
    <td>' . $type . '</td>
    <td> 
        <button class="btn btn-danger">
          <a href="profilClientDelete.php?deleteid=' . $id . '" class="text-light">
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