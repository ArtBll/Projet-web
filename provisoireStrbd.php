<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/edt.css">
    <script src="fonction.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light nav">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" width="60" height="60" class="" alt="">&nbsp;&nbsp;Omnès Santé
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link d-inline-block align-top" href="index.html"><font size="+1">Acceuil</font></a>
                </li>
                <li class="nav-itema active">
                    <a class="nav-link" href="parcourir.html"><font size="+1">Tout Parcourir</font></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href=".php"><font size="+1">Rendez-vous</font></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <a type="button" class="btn btn-link mr-2 my-sm-0" href="recherche.php"><i class="bi bi-search"></i></a>
            </form>
            <a type="button" class="btn btn-success mr-2 my-sm-0" href="client.php">Se connecter</a>
        </div>
    </nav>
    <br><br><br>
    <?php
        //$prenom=$_POST["prenomAdmin"];

        //connection
        $connect= mysqli_connect('localhost', 'root', '', 'projetweb');
        //$db_found = mysqli_select_db($db_handle, $db);

        if($connect) {
            echo "connected";
        }
        else{
            echo "IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII";
        }

        $sql = "SELECT heureConsult, jour FROM consultation WHERE idMed=8376591";
        //$result = mysqli_query($connect, $sql);
        $result = $connect->query($sql);
        while($row = $result->fetch_assoc()){
            echo $row["id"];
        }
    ?>
    <div class="container-fluid">
        <div class="card mb-8">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="images/medecin1.jpg" class="img-fluid rounded-start" alt="...">
                <br><br>
                <div>
                    <h4 class="card-title">&nbsp;Jean Némar</h4>
                    <table>
                        <tr>
                            <td><font size="+1">&nbsp;Salle :</font></td>
                            <td><font size="+1">&nbsp;EM-204</td>
                        </tr>
                        <tr>
                            <td><font size="+1">&nbsp;Téléphone :</font></td>
                            <td><font size="+1">&nbsp;+33 6 39 27 27 278</font></td>
                        </tr>
                        <tr>
                            <td><font size="+1">&nbsp;Email :</font></td>
                            <td><font size="+1">&nbsp;jean.némar@omnessante.fr</font></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">Formation et Expériences :</h4>
                    <br>
                    <h5>Formation :</h5>
                    <ul>
                        <li><b>1980-1988 : Docteur en médecine :</b> Université Sorbonne Paris</li>
                    </ul>
                    <h5>Expérience :</h5>
                    <ul>
                        <li><b>1990-1994 : Résident en médecine interne :</b> Clinique Mayo</li>
                        <li><b>1994-présent : Médecin Généraliste</b></li>
                    </ul>
                    <br>
                    Contacter en ligne : &nbsp;
                    <button type="button" class="btn btn-primary">Chatbox &nbsp;<i class="bi bi-chat"></i></button>
                    <button type="button" class="btn btn-primary">Voicecall &nbsp;<i class="bi bi-telephone"></i></button>
                    <button type="button" class="btn btn-primary">Videocall &nbsp;<i class="bi bi-camera-video"></i></button><br>
                    <br>Ou trouvez le rendez-vous qui vous corresspond : <br>
                <div class="container-fluid">
                    <div class="timetable-img text-center">
                        <img src="img/content/timetable.png" alt="">
                    </div>
                    <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr class="bg-light-gray">
                        <th class="text-uppercase">Monday</th>
                        <th class="text-uppercase">Tuesday</th>
                        <th class="text-uppercase">Wednesday</th>
                        <th class="text-uppercase">Thursday</th>
                        <th class="text-uppercase">Friday</th>
                        <th class="text-uppercase">Saturday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button type="button" class="btn btn-danger">9:00-10:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">9:00-10:00</button>
                        </td>

                        <td>
                            <button type="button" class="btn btn-danger">9:00-10:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">9:00-10:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">9:00-10:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">9:00-10:00</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn btn-danger">10:00-11:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">10:00-11:00</button>
                        </td>

                        <td>
                            <button type="button" class="btn btn-primary">10:00-11:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">10:00-11:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">10:00-11:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">10:00-11:00</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button" class="btn btn-primary" id="testbutton">11:00-12:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">11:00-12:00</button>
                        </td>

                        <td>
                            <button type="button" class="btn btn-primary">11:00-12:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">11:00-12:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">11:00-12:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">11:00-12:00</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button" class="btn btn-primary">12:00-13:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">12:00-13:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">12:00-13:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">12:00-13:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">12:00-13:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">12:00-13:00</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button" class="btn btn-primary">14:00-15:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">14:00-15:00</button>
                        </td>

                        <td>
                            <button type="button" class="btn btn-primary">14:00-15:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">14:00-15:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">14:00-15:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">14:00-15:00</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button" class="btn btn-primary">15:00-16:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">15:00-16:00</button>
                        </td>

                        <td>
                            <button type="button" class="btn btn-primary">15:00-16:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">15:00-16:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">15:00-16:00</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">15:00-16:00</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
            </div>
            </div>
        </div>
    </div>
</body>

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
</html>