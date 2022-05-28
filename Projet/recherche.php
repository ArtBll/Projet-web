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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="provisoire.php">
                            <font size="+1">provisoire</font>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <font size="+1">index php</font>
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST" action="recherche.php">
                    <input class="form-control" name="recherche" type="text" placeholder="Search" aria-label="Search">
                    <input type="submit" class="btn btn-link mr-2 my-sm-0" id="envoyer"><i class="bi bi-search"></i>
                    <a type="button" class="btn btn-success mr-2 my-sm-0" href="client.php"><i class="bi bi-person"></i>&nbsp;Mon compte</a>
                </form>
            </div>
    </nav>
    <br>
    <div class="container">
        <h1>Résultat de la recherche :</h1>
        <?php
        $recherche = htmlspecialchars($_POST['recherche']);
        //echo "ooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>".$recherche."UUUUUUUUUUUUUUUUUUUUU";
        $connect = mysqli_connect('localhost', 'root', '', 'projetweb');
        $sql = "SELECT * FROM medecin WHERE typeMedecin = '$recherche'";
        $result = $connect->query($sql);
        while (($row = $result->fetch_assoc())) {
            //if($row["typeMedecin"] == "generaliste"){
        ?>
            <div class="card mb-8">
                <div class="row g-0">
                    <div class="col-md-4">
                        <br><br><br><br>
                        <img src="images/medecin1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Medecin <?php echo $row["typeMedecin"] ?></h5>
                            <h5 class="card-title"><?php echo $row["prenomMedecin"] . " " . $row["nomMedecin"] ?></h5>
                            <table>
                                <tr>
                                    <td>
                                        <font size="+1">Salle :</font>
                                    </td>
                                    <td>
                                        <font size="+1">EM-204
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font size="+1">Téléphone :</font>
                                    </td>
                                    <td>
                                        <font size="+1"><?php echo $row["telMedecin"] ?></font>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font size="+1">Email :</font>
                                    </td>
                                    <td>
                                        <font size="+1"><?php echo $row["emailMedecin"] ?></font>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr class="bg-light-gray">
                                            <th class="text-uppercase">Lundi</th>
                                            <th class="text-uppercase">Mardi</th>
                                            <th class="text-uppercase">Mercredi</th>
                                            <th class="text-uppercase">Jeudi</th>
                                            <th class="text-uppercase">Vendredi</th>
                                            <th class="text-uppercase">Samedi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Dispo</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger" disabled>Dispo</button>
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Dispo</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Dispo</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Dispo</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Dispo</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Apres-midi</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Apres-midi</button>
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Apres-midi</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger" disabled>Apres-midi</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success" disabled>Apres-midi</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger" disabled>Apres-midi</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <a href="provisoireStrbd.php" class="btn btn-primary">Plus d'informations</a>
                        </div>
                    </div>
                </div>
            </div><br><br>
        <?php }

        $sql = "SELECT * FROM medecin WHERE nomMedecin = '$recherche'";
        $result = $connect->query($sql);
        while (($row = $result->fetch_assoc())) {
            echo $row["emailMedecin"];
        }

        $sql = "SELECT * FROM medecin WHERE prenomMedecin = '$recherche'";
        $result = $connect->query($sql);
        while (($row = $result->fetch_assoc())) {
            echo $row["emailMedecin"];
        }
        ?>
    </div>
</body>

<footer class="text-center text-lg-start bg-light text-muted">
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <br><br>
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company
                    </h6>
                    <p>
                        2022 Omnès Santé. Inc
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <br><br>
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="provisoire.php" class="text-reset">Médecine générale</a>
                    </p>
                    <p>
                        <a href="spe.html" class="text-reset">Médecine spécilisée</a>
                    </p>
                    <p>
                        <a href="labo.html" class="text-reset">Laboratoire d'analyse médicale</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <br><br>
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><a href="https://www.google.com/maps/place/ECE+Paris+Lyon/@48.8517668,2.2842879,17z/data=!3m1!4b1!4m5!3m4!1s0x47e6701b4f58251b:0x167f5a60fb94aa76!8m2!3d48.8517668!4d2.2864819?hl=fr">37 Quai de Grenelle, 75015 Paris</a></p>
                    <p>
                        <a href="mailto:jim@rock.com">info@omnessante.fr</a>

                    </p>
                    <a href="tel:+33135342453">+33 1 35 34 24 53</a>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="index.html">Omnès Santé</a>
    </div>
</footer>

</html>