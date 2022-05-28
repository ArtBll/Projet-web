<?php

session_start();
if(!isset($_SESSION['user'])){
  header('Location:client.php');
}
require 'dbconfig.php';


$sql="SELECT typeMedecin, nomMedecin, prenomMedecin, emailMedecin, heureConsult, jourConsult, typeCarte, nomCarte, secuCarte FROM medecin, consultation, paiementclient WHERE ";

$result=mysqli_query($con,$sql);

if($result)
{
 
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
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <img src="profile_img\unknown.png" height=200 width=280>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-7 col-md-6 text-right">
                    
                    <p>
                      <br><br>
                        <em>Merci d'avoir pris rendez-vous sur Omnes santé ! </em><br>
                        <em>Reçu #: 34522677W</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Reçu</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Recapitulatif</th>
                            <th>Heure</th>
                            <th class="text-center">Jour</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    

                        <tr>
                            <td class="col-md-9"><em>Type-NomPrenomMedecin</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> HEURE </td>
                            <td class="col-md-1 text-center">JOUR</td>
                            <td class="col-md-1 text-center">15.00€</td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>TypePaiement</em></h4></td>
                            <td class="col-md-1" style="text-align: center">nomCarte</td>
                            <td class="col-md-1 text-center">secu</td>
                            <td class="col-md-1 text-center"></td>
                        </tr>
                        
                        <tr>
                            <td>  </td>
                            <td>  </td>
                            <td class="text-right"><h4><strong>Total:</strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>16.50€</strong></h4></td>
                        </tr>
                    </tbody>
                   
                </table>
             
                <em>Une question ? Contactez le médecin via son email :</em>
             
                </td>
            </div>
        </div>
    </div>
</body>
</html>