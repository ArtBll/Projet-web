<?php
  include 'dbconfig.php';
    if(isset($_GET['deleteid']))
    {
      $id=$_GET['deleteid'];

      $sql="DELETE FROM medecin WHERE idMedecin=$id";
      $result=mysqli_query($con,$sql);
      if($result)
      {
        echo "Deleted successfull";
        header('Location:profilAdmin');
      }else
      {
        die(mysqli_error($con));
      }
      
    }
?>
