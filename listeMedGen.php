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
    <br>
    <div class="container">
        <br><br>
        <h1>Medecine Générale :</h1>
        <br><br>
        <div class="card mb-8">
            <div class="row g-0">
                <div class="col-md-4">
                    <br><br><br><br>
                    <img src="images/medecin1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Medecin généraliste</h5>
                        <h5 class="card-title">Jean Némar</h5>
                        <table>
                            <tr>
                                <td><font size="+1">Salle :</font></td>
                                <td><font size="+1">EM-204</td>
                            </tr>
                            <tr>
                                <td><font size="+1">Téléphone :</font></td>
                                <td><font size="+1">+33 6 39 27 27 278</font></td>
                            </tr>
                            <tr>
                                <td><font size="+1">Email :</font></td>
                                <td><font size="+1">jean.némar@omnessante.fr</font></td>
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
                        <p class="card-text">Trouvez rapidement un spécialiste en dépistage covid-19 test pcr près de chez vous ou un professionnel de santé pratiquant des actes de dépistage covid-19 
                          <br>Lors de la prise de rendez-vous, des informations d’identification (nom, prénom…) peuvent être demandées pour pré-compléter le dossier administratif du patient et limiter son temps de présence dans le laboratoire et les risques de contamination associés.</p>
                        <a href=".html" class="btn btn-primary">Trouver mon rendez-vous</a>
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
                          de la bonne tolérance de la grossesse ainsiq que de vérifier l’absence d’infections en cours de grossesse.</p>
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
                        <p class="card-text">Abstenez vous de manger au moins 12 h avant la prise de sang. L’eau est la seule chose qu’il est possible de consommer. Il est également recommandé d’éviter le tabac et les activités physiques intenses.
                          Mangez et buvez un peu dans les plus brefs délais après la prise de sang afin de recouvrer des forces et de limiter les risques de malaise.
                          <br>Une vérification de l’ordonnance et de l’identité du patient est effectuée avant d’effectuer la prise de sang.</p>
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
                        <p class="card-text">Il n'est pas nécessaire d'être à jeun pour effectuer une IRM ou scanner. Vous pouvez donc manger, boire de l'eau et prendre vos médicaments comme d'habitude. Optez pour une tenue confortable, sans boutons pressions ni fermeture métallique.
                          Si vous êtes enceinte ou pensez l’être, ou si vous allaitez, signalez-le aussi à votre interlocuteur. En effet, le scanner et/ou l'IRM ne sont pas indiqué en cas de grossesse.</p>
                        <a href=".html" class="btn btn-primary">Trouver mon rendez-vous</a>
                    </div>
                </div>
            </div>
        </div>
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