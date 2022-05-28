<?php
//A METTRE A TOUT LES FICHIERS EN DEBUT
  session_start();
  require_once 'config.php';
//VERIFIER QUE LES VALEURS SONT BIEN PRISES
  if(isset($_POST["mailLogin"]) && isset($_POST["mdpLogin"])){
//LES ATTRIBUTS PRENNENT LES VALEURS INSCRITES DANS LA PARTIE LOGIN
    $email = htmlspecialchars($_POST["mailLogin"]);
    $mdp = htmlspecialchars($_POST["mdpLogin"]);
//PREPARATION DE LA REQUETTE SQL
    $check = $bdd->prepare('SELECT emailClient, passwordClient, prenomClient  FROM client WHERE emailClient = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
//L'ATTRIBUT ROW COMPTE LE NOMBRE DE CLIENTS POSSEDANT L'EMAIL, SACHANT QUE UN EMAIL EST UNIQUE DANS NOTRE BDD
//AINSI SI LE COMPTE CLIENT EXISTE BIEN, IL N'Y A QU'UNE SEULE LIGNE AVEC L'EMAIL RENSEIGNE
    if($row == 1)
    {
//LE FILTER_VALIDATE_EMAIL VERIFIE SI L'EMAIL EST CONFORME A SA DEFINITION : @ ET HEBERGEUR.
      if(filter_var($email, FILTER_VALIDATE_EMAIL))
      {
//SI LE PASSWORD CORRESPOND BIEN AU PASSWORD LIE A L'EMAIL RENSEIGNE
        if($data['passwordClient'] === $mdp)
        {
//CREATION DE LA SESSION AVEC LE PRENOM DU CLIENT EN TANT QUE USER
          $_SESSION["user"] = $data["prenomClient"];
          header("Location:landing.php");
//LES HEADERS CORRESPONDENT AUX ERREUR POSSIBLES, SE REFERRER A LA PAGE HTML DE CONNEXION

//A MODIFIER SI L'ON CHANGE LE NOM DU FICHIER DE CONNEXION (SUR)
        }else header('Location:client.php?login_err=password');
      }else header('Location:client.php?login_err=email');
    }else header('Location:client.php?login_err=already');
  }else header('Location:client.php');
?>