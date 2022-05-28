<?php
//A METTRE A TOUT LES FICHIERS EN DEBUT
  require_once "config.php";

  if(isset($_POST["nomRegister"]) && isset($_POST["prenomRegister"]) && isset($_POST["emailRegister"]) && isset($_POST["mdpRegister"]) && isset($_POST["adresseRegister"]) && isset($_POST["villeRegister"]) && isset($_POST["paysRegister"]) && isset($_POST["postalRegister"]) && isset($_POST["telRegister"]) && isset($_POST["vitaleRegister"]))
  {
    $nom = htmlspecialchars($_POST["nomRegister"]);
    $prenom = htmlspecialchars($_POST["prenomRegister"]);
    $email = htmlspecialchars($_POST["emailRegister"]);
    $mdp = htmlspecialchars($_POST["mdpRegister"]);
    $adresse = htmlspecialchars($_POST["adresseRegister"]);
    $ville = htmlspecialchars($_POST["villeRegister"]);
    $pays = htmlspecialchars($_POST["paysRegister"]);
    $postal = htmlspecialchars($_POST["postalRegister"]);
    $tel = htmlspecialchars($_POST["telRegister"]);
    $vitale = htmlspecialchars($_POST["vitaleRegister"]);

    $check = $bdd->prepare('SELECT prenomClient, emailClient, passwordClient FROM client WHERE emailClient = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row==0)
    {
      if(filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        
        $password = hash('sha256',$password);

        $insert = $bdd->prepare('INSERT INTO client(emailClient, passwordClient, nomClient, prenomClient, adresseClient, villeClient, postClient, paysClient, telClient, vitaleClient) VALUES(:emailClient, :passwordClient, :nomClient, :prenomClient, :adresseClient, :villeClient, :postClient, :paysClient, :telClient, :vitaleClient)');
        $insert->execute(array(
          'emailClient' => $email,
          'passwordClient' => $mdp,
          'nomClient' => $nom,
          'prenomClient' => $prenom,
          'adresseClient' => $adresse,
          'villeClient' => $ville,
          'postClient' => $postal,
          'paysClient' => $pays,
          'telClient' => $tel,
          'vitaleClient' => $vitale,
        ));
//FAIRE CHAQUE CAS OU LISTE VIDE
//MODIFIER LE LIEN SI NECESSAIRE
        header('Location:client.php?reg_err=success');
      
      }else header('Location:client.php?reg_err=email');
    }else header('Location:client.php?reg_err=already');
  }

?>