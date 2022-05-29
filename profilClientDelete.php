<?php
  include 'dbconfig.php';
    if(isset($_GET['deleteid']))
    {
      $id=$_GET['deleteid'];

      $sql="DELETE FROM consultation WHERE idConsultation=$id";
      $result=mysqli_query($con,$sql);
      if($result)
      {
        echo "Deleted successfull";
        header('Location:profilClient');
      }else
      {
        die(mysqli_error($con));
      }
      
    }
?>