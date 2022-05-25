<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Omnes Santé : se connecter</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">   
</head>

<body>
 
<a href="admin.php" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-arrow-right"></span> Admin</a>
<a href="medecin.php" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-arrow-right"></span> Vous êtes medecin ?</a>  

<!--Container : Connexion-->
<div class="container login-container">
  <div class="row">
      <div class="col-md-6 login-form-1">
          <h3>Se connecter</h3>
          <!--ACTION PEUT ETRE MODIFIE SELON LE NOM DES FICHIERS--> 
          <form action="clientCon.php" method="post">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email *" name="mailLogin" />
              </div>

              <div class="form-group">
                  <input type="password" class="form-control" placeholder="Mot de Passe *" name="mdpLogin" />
              </div>

              <div class="form-group">
                  <input type="submit" class="btnSubmit" value="Se connecter" name="connecter" />
              </div>

              <div class="form-group">
                  <a href="#" class="ForgetPwd">Forget Password?</a>
              </div>
          </form>

          <!--PARTIE ERREUR HEADER : SELON LES INDICATION --> 
          <?php
        if(isset($_GET['login_err']))
        {
          $err = htmlspecialchars($_GET['login_err']);

          switch($err)
          {
            case 'password'
            ?>
            <div class="alert alert-danger">
              <strong>Erreur</strong> mot de passe incorrect
            </div>
            <?php
            break;
            case 'email'
            ?>
            <div class="alert alert-danger">
              <strong>Erreur</strong> email incorrect
            </div>
            <?php
            break;
            case 'already'
            ?>
            <div class="alert alert-danger">
              <strong>Erreur</strong> Le compte n'existe pas
            </div>
            <?php
            break;
          }
          
        }
        ?>
      </div>

<!--Container : Création d'un compte-->
      <div class="col-md-6 login-form-2">
          <h3>Créer un compte</h3>
          
          <form class="login100-form validate form" method="POST" action="signup.php">
            <form>
              <!--Nom & Prenom-->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Nom *" name="nomRegister">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Prenom *" name="prenomRegister">
                </div>
              </div>
              <!--Mail & MDP-->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email *" name="emailRegister">
                </div>
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de Passe *" name="mdpRegister">
                </div>
              </div>
              <!--Adresse-->
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="Adresse *" name="adresseRegister">
              </div>
              <!--Ville & Pays-->
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputCity4" placeholder="Ville *" name="villeRegister">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputCountry4" placeholder="Pays *" name="paysRegister">
                </div>
              </div>
              <!--ZIP & Numero-->
              <div class="form-row">
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="inputZip" placeholder="Code Postal *" name="postalRegister">
                </div>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control" id="inputCity" placeholder="Numero de telephone *" name="telRegister">
                </div> 
              </div>
              <!--Carte vitale-->
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="Numéro Carte Vitale *" name="vitaleRegister">
              </div>
              <!--Check pour mot de passe -->
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Mot de passe visible <br><br>
                  </label>
              </div>

              <div class="form-group">
                <input type="submit" class="btnSubmit" name="Créer un compte" />
              </div>

            </form>
          </form>
      </div>
  </div>
</div>



    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
    
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Company name
              </h6>
              <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p>
                <a href="#!" class="text-reset">React</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Laravel</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
    
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
  </footer>   
</body>




</html>