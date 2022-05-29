<?php
//SCENARIO OU L'USER N'EST PAS CONNECTE
 session_start();
 if(!isset($_SESSION['user'])){
   header('Location:client.php');
 }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light nav">
    <a class="navbar-brand" href="index.html">
      <img src="images/logo.png" width="60" height="60" class="" alt="">&nbsp;&nbsp;Omnès Santé
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link d-inline-block align-top" href="index.html">
              <font size="+1">Acceuil</font>
            </a>
          </li>
          <li class="nav-itema active">
            <a class="nav-link" href="parcourir.html">
              <font size="+1">Tout Parcourir</font>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href=".php">
              <font size="+1">Rendez-vous</font>
            </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <a type="button" class="btn btn-link mr-2 my-sm-0" href="recherche.php"><i class="bi bi-search"></i></a>
        </form>
        <a type="button" class="btn btn-success mr-2 my-sm-0" href="client.php"><i class="bi bi-person"></i>&nbsp;Mon
          compte</a>
      </div>
  </nav>
  <div class="container">
    <br><br>
    <h1>Laboratoire de biologie médicale</h1>
    <br>
    <div class="card border-0 mb-8">
      <div class="row g-0">
        <div class="col-md-5">
          <br>
          <img src="images/labo.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h3 class="card-title">Informations pratiques</h3>
            <table>
              <tr>
                <td>
                  <font size="+2">Salle :</font>
                </td>
                <td>
                  <font size="+2">SC-101</font>
                </td>
              </tr>
              <tr>
                <td>
                  <font size="+2">Téléphone :</font>
                </td>
                <td>
                  <font size="+2">+33 1 45 23 55 23</font>
                </td>
              </tr>
              <tr>
                <td>
                  <font size="+2">Email :</font>
                </td>
                <td>
                  <font size="+2">labo.biologie@omnessante.fr</font>
                </td>
              </tr>
            </table>
            <br>
            <p class="card-text">Vous pouvez consulter les différents service proposés par le laboratoire de biologie
              médicale Omnes Santé ci-dessous.
              Ainsi que des détails et recommendations faites par les médecins pour chaque service.</p>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
    <div class="card mb-8">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="images/covid.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Dépistage Covid-19</h5>
            <p class="card-text">Trouvez rapidement un spécialiste en dépistage covid-19 test pcr près de chez vous ou
              un professionnel de santé pratiquant des actes de dépistage covid-19
              <br>Lors de la prise de rendez-vous, des informations d’identification (nom, prénom…) peuvent être
              demandées pour pré-compléter le dossier administratif du patient et limiter son temps de présence dans le
              laboratoire et les risques de contamination associés.</p>
            <a href="rdvlabo.php" class="btn btn-primary">Trouver mon rendez-vous</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="card mb-8">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="images/enceinte.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Biologie de la femme enceinte</h5>
            <p class="card-text">Examens et dépistage permettant de s’assurer du bon déroulement et
              de la bonne tolérance de la grossesse ainsiq que de vérifier l’absence d’infections en cours de grossesse.
            </p>
            <a href=".html" class="btn btn-primary">Trouver mon rendez-vous</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="card mb-8">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="images/sang.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Analyse sanguine</h5>
            <p class="card-text">Abstenez vous de manger au moins 12 h avant la prise de sang. L’eau est la seule chose
              qu’il est possible de consommer. Il est également recommandé d’éviter le tabac et les activités physiques
              intenses.
              Mangez et buvez un peu dans les plus brefs délais après la prise de sang afin de recouvrer des forces et
              de limiter les risques de malaise.
              <br>Une vérification de l’ordonnance et de l’identité du patient est effectuée avant d’effectuer la prise
              de sang.</p>
            <a href=".html" class="btn btn-primary">Trouver mon rendez-vous</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="card mb-8">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="images/cancer.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Imagerie médicale</h5>
            <p class="card-text">Il n'est pas nécessaire d'être à jeun pour effectuer une IRM ou scanner. Vous pouvez
              donc manger, boire de l'eau et prendre vos médicaments comme d'habitude. Optez pour une tenue confortable,
              sans boutons pressions ni fermeture métallique.
              Si vous êtes enceinte ou pensez l’être, ou si vous allaitez, signalez-le aussi à votre interlocuteur. En
              effet, le scanner et/ou l'IRM ne sont pas indiqué en cas de grossesse.</p>
            <a href=".html" class="btn btn-primary">Trouver mon rendez-vous</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
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

</html>