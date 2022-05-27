<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/edt.css">
    <script src="fonction.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script>
        $(document).ready(function() {
            check();
        });
    </script>
    <?php
    //$prenom=$_POST["prenomAdmin"];
    //Variables
    $heure = isset($_POST['heureConsult']) ? $_POST['heureConsult'] : NULL;
    $jour = isset($_POST['jour']) ? $_POST['jour'] : NULL;
    $ok = 0;



    //connection
    $connect = mysqli_connect('localhost', 'root', '', 'projetweb');
    //$db_found = mysqli_select_db($db_handle, $db);

    if ($connect) {
        echo "connected";
    } else {
        echo "IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII";
    }

    $sql = "SELECT heureConsult, jour FROM consultation WHERE idMed=8376591";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()) {
        if ($row["jour"] == "Lundi" && $row["heureConsult"] == "09:00:00") {
            echo "TROUV2";
        } else {
            //echo "PAS BON";;
        }
    }
    ?>

    <?php
    function rdv($j, $h)
    {
        $ok = 0;
        $connect = mysqli_connect('localhost', 'root', '', 'projetweb');
        $sql = "SELECT heureConsult, jour FROM consultation WHERE idMed=8376591";
        $result = $connect->query($sql);
        if($h == "09:00:00"){
            $chaine1 = "09:00";
            $chaine2 = "10:00";
        }
        if($h == "10:00:00"){
            $chaine1 = "10:00";
            $chaine2 = "11:00";
        }
        if($h == "11:00:00"){
            $chaine1 = "11:00";
            $chaine2 = "12:00";
        }
        if($h == "12:00:00"){
            $chaine1 = "12:00";
            $chaine2 = "13:00";
        }
        if($h == "14:00:00"){
            $chaine1 = "14:00";
            $chaine2 = "15:00";
        }
        if($h == "15:00:00"){
            $chaine1 = "15:00";
            $chaine2 = "16:00";
        }
        if($h == "16:00:00"){
            $chaine1 = "16:00";
            $chaine2 = "17:00";
        }
        while (($row = $result->fetch_assoc()) && $ok != 1) {
            if (($row["heureConsult"] == "$h") && ($row["jour"] == "$j")) {
                $ok = 1;
            } else {
                $ok = 0;
            }
        }
        if ($ok == 1) {
            echo '<button type="button" class="btn btn-danger" disabled>'.$chaine1.'-'.$chaine2.'</button>';
        } else {
            echo '<button type="button" class="btn btn-primary" id="'.$chaine1.'-'.$j.'" onclick="confirm()">'.$chaine1.'-'.$chaine2.'</button>';
        }
    }
    ?>

</head>
<nav class="navbar navbar-expand-lg navbar-light nav">
    <a class="navbar-brand" href="#">Omnes Santé</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="parcourir.html">Tout Parcourir</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<br><br><br>

<body>
    <form method="post">
        <table>
            <tr>
                <td>ID consultation :</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>idMedecin :</td>
                <td>
                    <select name="idMedecin">
                        <option value="8376591">8376591</option>
                        <option value="87632">87632</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Heure consultation :</td>
                <td>
                    <select name="heure">
                        <option value="10:00:00">10:00:00</option>
                        <option value="11:00:00">11:00:00</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date :</td>
                <td><input type="text" name="date" value="2022-05-24"></td>
            </tr>
            <tr>
                <td>Jour consultation :</td>
                <td>
                    <select name="jour">
                        <option value="Lundi">Lundi</option>
                        <option value="Mardi">Mardi</option>
                        <option value="Mercredi">Mercredi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="S" value="Soumettre"></td>
            </tr>
        </table>
    </form>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'projetweb');

    $idC = isset($_POST["id"]) ? $_POST["id"] : "";
    $idM = isset($_POST["idMedecin"]) ? $_POST["idMedecin"] : "";
    $heure = isset($_POST["heure"]) ? $_POST["heure"] : "";
    $date = isset($_POST["date"]) ? $_POST["date"] : "";
    $jour = isset($_POST["jour"]) ? $_POST["jour"] : "";

    $sql = "INSERT INTO consultation(idConsultation, idCli, idMed, heureConsult, dateConsult, jour) VALUES('$idC', '6529865', '$idM','$heure', '$date', '$jour')";
    //$result = $connect->query($sql);
    if ($connect->query($sql) === TRUE) {
        echo "Données ajoutées <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    ?>


    <div class="container-fluid">
        <div class="card mb-8">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/generaliste.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur, id. Ad natus eligendi necessitatibus cupiditate consequuntur quia harum, maxime fuga facilis illo sunt error culpa nihil non inventore. Quaerat, ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quaerat cumque aspernatur esse, possimus tempore reiciendis reprehenderit neque voluptates excepturi consequuntur ratione repudiandae, vitae quas minus repellat! Expedita, quisquam labore.</p>
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
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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