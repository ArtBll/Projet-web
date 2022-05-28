<?php

 require_once 'dbconfig.php';

if(isset($_POST['submit']))
 {

   $nom = htmlspecialchars($_POST['nomMedecin']);
   $prenom = htmlspecialchars($_POST['prenomMedecin']);
   $email = htmlspecialchars($_POST['emailMedecin']);
   $tel = htmlspecialchars($_POST['telMedecin']);
   $cv = htmlspecialchars($_POST['cvMedecin']);
   $spe = htmlspecialchars($_POST["typeMedecin"]);

   $photo = $_FILES["photoMedecin"]["name"];
   $phototmp = $_FILES["photoMedecin"]["tmp_name"];
   $video = $_POST["videoMedecin"];
   //$video = $_FILES["videoMedecin"]["name1"];
  
  move_uploaded_file($phototmp,"profile_img/$photo");
  
   $sql="INSERT INTO medecin (nomMedecin,prenomMedecin,emailMedecin,telMedecin,photoMedecin,cvMedecin,typeMedecin) VALUES ('$nom','$prenom','$email','$tel','$photo','$cv','$spe')";
   $result=mysqli_query($con,$sql);
   if($result)
   {
     header('Location:profilAdmin.php?#');
   }else{
     die(mysqli_error($con));
   }
  
 }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">  
</head>

<body>
<div class="container login-container">
  <div class="row justify-content-center">
      <div class="col-md-6 login-form-1">
    <form method="post" enctype="multipart/form-data"> 
        <div class="mb-3">
          <label>Nom</label>
          <input type="text" class="form-control" placeholder="Nom *" name="nomMedecin">
        </div>

        <div class="mb-3">
          <label>Prenom</label>
          <input type="text" class="form-control" placeholder="Prenom *" name="prenomMedecin">
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Email *" name="emailMedecin">
        </div>

        <div class="mb-3">
          <label>Telephone</label>
          <input type="text" class="form-control" placeholder="Telephone *" name="telMedecin"> 
        </div>
      
      <div class="mb-3">
          <label>CV</label>
          <input type="text" class="form-control" placeholder="CV *" name="cvMedecin"> 
      </div>

       <div class="mb-3">
        <label>Photo Medecin</label>
          <input type="file" id="file" name="photoMedecin">
        </div>

        <div class="mb-3">
        <label>Spécialité</label>
        <select name="typeMedecin" id="spe-select">
            <option value="Généraliste">Généraliste</option>
            <option value="Addictologie">Addictologie</option>
            <option value="Andrologie">Andrologie</option>
            <option value="Cardiologie">Cardiologie</option>
            <option value="Dermaratologie">Dermaratologie</option>
            <option value="Gastro-Hépato-Entérologue">Gastro-Hépato-Entérologue</option>
            <option value="Gynécologue">Gynécologue</option>
            <option value="I.S.T">I.S.T</option>
            <option value="Ostéopathie">Ostéopathie</option>
            <option value="Laboratoire">Laboratoire</option>
        </select>
        </div>

      </table>
      <button type="submit" name="submit" class="btn btn-primary">Créer médecin</button>
    </form>
  </div>
</div>
</div>
</body>

</html>
