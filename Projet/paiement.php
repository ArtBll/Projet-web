<?php

session_start();
if(!isset($_SESSION['user'])){
  header('Location:client.php');
}

require 'dbconfig.php';

if(isset($_POST['submit']))
 {
$id = $_SESSION["id"];
$type=$_POST["type"];
$numero=$_POST["numero"];
$detenteur=$_POST["detenteur"];
$mois=$_POST["mois"];
$annee=$_POST["année"];
$ccv=$_POST["ccv"];

$sql="INSERT INTO paiementclient(idClient,typeCarte,numCarte,nomCarte,moisCarte,anneeCarte,secuCarte) VALUES ('$id','$type','$numero','$detenteur','$mois','$annee','$ccv')";

$result=mysqli_query($con,$sql);


   if($result)
   {
     header('Location:index.php?success');
     header('Location:emailPaiment.php');

   }else{
     die(mysqli_error($con));
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/paiement.css">

</head>
<body>

<div class="container">

    <div class="card-container">

        <div class="front">

            <div class="image">
                <img src="paiementphoto/chip.png" alt="">
                <img id="imagep" src="paiementphoto/visa.png"/>
            </div>

            <div class="card-number-box">
              ################
            </div>

            <div class="flexbox">

                <div class="box">
                    <span>Nom détenteur</span>
                    <div class="card-holder-name">
                      Nom
                    </div>
                </div>

                <div class="box">
                    <span>Expire a fin</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <form method="post">
        <div class="inputBox">
          <span>Moyen de paiement :</span>
            <select id="paiementlist" class="img-holder-input" name="type">
              <option value="paiementphoto/Visa">Visa</option>
              <option value="paiementphoto/MasterCard">MasterCard</option>
              <option value="paiementphoto/AmericanExpress">AmericanExpress</option>
              <option value="paiementphoto/PayPal">Paypal</option>
            </select>

            <script>
              var changeImage = function () { 
                  document.getElementById('imagep').src = this.options[this.selectedIndex].value + "_Image.png"
              }

              var imageList = document.getElementById('paiementlist');
              imageList.addEventListener('change', changeImage, false);
            </script>

        </div>

        <div class="inputBox">
            <span>Numero</span>
            <input type="text" maxlength="16" class="card-number-input" name="numero">
        </div>

        <div class="inputBox">
            <span>Nom détenteur</span>
            <input type="text" class="card-holder-input"  name="detenteur">
        </div>

        <div class="flexbox">
            <div class="inputBox">
                <span>Mois d'expiration :</span>
                <select name="mois" class="month-input">
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>

            <div class="inputBox">
                <span>Année expiration :</span>
                <select name="année"  class="year-input">
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value=2022>2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>

            <div class="inputBox">
                <span>CCV</span>
                <input name="ccv" type="text" maxlength="4" class="cvv-input">
            </div>

        </div>
        <input type="submit" value="submit" name="submit" class="submit-btn">
    </form>

</div>    
    





<script>


document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}

document.querySelector('.month-input').oninput = () =>{
    document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}

document.querySelector('.year-input').oninput = () =>{
    document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}
</script>

</body>
</html>