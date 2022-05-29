<?php
//SCENARIO OU L'USER N'EST PAS CONNECTE
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:client.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

    <?php
    function rdv($j, $h)
    {
        $id = 11;
        $ok = 0;
        $chaine1 = "morch po";
        $connect = mysqli_connect('localhost', 'root', '', 'projetweb');
        $sql = "SELECT heureConsult, jourConsult FROM consultation WHERE idMed= $id";
        $result = $connect->query($sql);
        if ($h == "09:00:00") {
            $chaine1 = "09:00";
            $chaine2 = "10:00";
        }
        if ($h == "10:00:00") {
            $chaine1 = "10:00";
            $chaine2 = "11:00";
        }
        if ($h == "11:00:00") {
            $chaine1 = "11:00";
            $chaine2 = "12:00";
        }
        if ($h == "12:00:00") {
            $chaine1 = "12:00";
            $chaine2 = "13:00";
        }
        if ($h == "14:00:00") {
            $chaine1 = "14:00";
            $chaine2 = "15:00";
        }
        if ($h == "15:00:00") {
            $chaine1 = "15:00";
            $chaine2 = "16:00";
        }
        if ($h == "16:00:00") {
            $chaine1 = "16:00";
            $chaine2 = "17:00";
        }

        while (($row = $result->fetch_assoc()) && ($ok != 1)) {
            if (($row["heureConsult"] == "$h") && ($row["jourConsult"] == "$j")) {
                $ok = 1;
            } else {
                $ok = 0;
            }
        }
        if ($ok == 1) {
            echo '<button type="button" class="btn btn-danger" disabled>' . $chaine1 . '-' . $chaine2 . '</button>';
        } else { ?>
            <form method="post">
                <input type="submit" class="btn btn-primary" name="<?php echo "$j$h" ?>" value="<?php echo "$chaine1-$chaine2" ?>" />
            </form>
    <?php
            if (isset($_POST["$j" . "$h"])) {
                addRdv($j, $h, $id);
                echo("<script>location.href = 'paiement.php'</script>");
            }
        }
    }

    function addRdv($day, $hour, $id)
    {
        //$idC  = isset($_POST["idC"])? $_POST["idC"] : "";
        $idC = rand(1, 99999999);
        $idClient = $_SESSION["id"];
        $connect = mysqli_connect('localhost', 'root', '', 'projetweb');
        $sql = "INSERT INTO consultation(idConsultation, idCli, idMed, heureConsult, jourConsult, dateConsult) VALUES($idC, $idClient, $id, '$hour', '$day', '2022-05-15')";
        if ($connect->query($sql) == TRUE) {
            echo "";
            //header('Location:emailPaiment.php');
        } else {
            echo "";
        }
        //$sql = "INSERT INTO consultation(idConsultation, idCli, idMed, heureConsult, dateConsult, jour) VALUES('$idC', '6529865', '$idM','$heure', '$date', '$jour')";
    }


    ?>

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
    <br><br>

    <?php

    $idMed = 11;

    $connect = mysqli_connect('localhost', 'root', '', 'projetweb');
    $sql = "SELECT * FROM medecin WHERE idMedecin = $idMed";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()) {
        $prenom = $row["prenomMedecin"];
        $nom = $row["nomMedecin"];
        $email = $row["emailMedecin"];
        $tel = $row["telMedecin"];
        $photo = $row["photoMedecin"];
        $cv = $row["cvMedecin"];
        $type = $row["typeMedecin"];
    }
    ?>

    <div class="container-fluid">
        <div class="card mb-8">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $photo ?>" class="img-fluid rounded-start" alt="...">
                    <br><br>
                    <div>
                        <h4 class="card-title"><?php echo $prenom . " " . $nom ?></h4>
                        <table>
                            <tr>
                                <td>
                                    <font size="+1">&nbsp;Salle :</font>
                                </td>
                                <td>
                                    <font size="+1">&nbsp;SC-218
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font size="+1">&nbsp;Téléphone :</font>
                                </td>
                                <td>
                                    <font size="+1">&nbsp;<?php echo $tel ?></font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font size="+1">&nbsp;Email :</font>
                                </td>
                                <td>
                                    <font size="+1">&nbsp;<?php echo $email ?></font>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">Imagerie médicale :</h4>
                        <br>
                        <p>Il n'est pas nécessaire d'être à jeun pour effectuer une IRM ou scanner. Vous pouvez donc manger, boire de l'eau et prendre vos médicaments comme d'habitude. Optez pour une tenue confortable, sans boutons pressions ni fermeture métallique. Si vous êtes enceinte ou pensez l’être, ou si vous allaitez, signalez-le aussi à votre interlocuteur. En effet, le scanner et/ou l'IRM ne sont pas indiqué en cas de grossesse.</p>
                        Contacter en ligne : &nbsp;
                        <button type="button" class="btn btn-primary">Chatbox &nbsp;<i class="bi bi-chat"></i></button>
                        <button type="button" class="btn btn-primary">Voicecall &nbsp;<i class="bi bi-telephone"></i></button>
                        <button type="button" class="btn btn-primary">Videocall &nbsp;<i class="bi bi-camera-video"></i></button><br><br>
                        Trouvez le rendez-vous qui vous correspond : <br>
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
                                                <?php
                                                rdv("Lundi", "09:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Mardi", "09:00:00");
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                rdv("Mercredi", "09:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Jeudi", "09:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Vendredi", "09:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Samedi", "09:00:00");
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                rdv("Lundi", "10:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Mardi", "10:00:00");
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                rdv("Mercredi", "10:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Jeudi", "10:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Vendredi", "10:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Samedi", "10:00:00");
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                rdv("Lundi", "11:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Mardi", "11:00:00");
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                rdv("Mercredi", "11:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Jeudi", "11:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Vendredi", "11:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Samedi", "11:00:00");
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                rdv("Lundi", "12:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Mardi", "12:00:00");
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                rdv("Mercredi", "12:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Jeudi", "12:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Vendredi", "12:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Samedi", "12:00:00");
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                rdv("Lundi", "14:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Mardi", "14:00:00");
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                rdv("Mercredi", "14:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Jeudi", "14:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Vendredi", "14:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Samedi", "14:00:00");
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                rdv("Lundi", "15:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Mardi", "15:00:00");
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                rdv("Mercredi", "15:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Jeudi", "15:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Vendredi", "15:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Samedi", "15:00:00");
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                rdv("Lundi", "16:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Mardi", "16:00:00");
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                rdv("Mercredi", "16:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Jeudi", "16:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Vendredi", "16:00:00");
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                rdv("Samedi", "16:00:00");
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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