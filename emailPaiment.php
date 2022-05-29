<?php
session_start();
if(!isset($_SESSION['user'])){
  header('Location:client.php');
}

use PHPMailer\PHPMailer\PHPMailer;



if (isset($_GET['sendmail'])) 
{

function sendmail()
    {


include "dbconfig.php";
$id =  $_SESSION["idConsultation"];
$sql="SELECT typeMedecin, nomMedecin, prenomMedecin, emailMedecin, heureConsult, jourConsult FROM medecin, consultation WHERE medecin.idMedecin = consultation.idMed AND consultation.idConsultation = $id";
$result=mysqli_query($con,$sql);

    if($result)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $type = $row["typeMedecin"];
            $nom = $row["nomMedecin"];
            $prenom = $row["prenomMedecin"];
            $email = $row["emailMedecin"];
            $heure = $row["heureConsult"];
            $jour = $row["jourConsult"];
        }

        $name = "OmnesSante";  // Name of your website or yours
        $to = "antonin.pionnier@gmail.com";  // mail of reciever
        $subject = "Tutorial or any subject";
        $body = '
        <div class="container">
        <div class="row">
            <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <address>
                            <img src="https://zupimages.net/up/22/21/k33k.png" height=200 width=280>
                        </address>
                    </div>
                    <div class="col-xs-6 col-sm-7 col-md-6 text-right">
                        
                        <p>
                        <br><br>
                            <em>Bonjour '.$_SESSION["user"].', merci d\'avoir pris rendez-vous sur Omnes santé ! </em><br>
                            <em>Reçu #: 34522677W</em>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <h1>Reçu</h1>
                    </div>
                    </span>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Recapitulatif</th>
                                <th>Heure</th>
                                <th class="text-center">Jour</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        

                            <tr>
                                <td class="col-md-9"><em>Docteur '.$type.'  '.$nom.' '.$prenom.'</em></h4></td>
                                <td class="col-md-1" style="text-align: center"> '.$heure.' </td>
                                <td class="col-md-1 text-center">'.$jour.'</td>
                                <td class="col-md-1 text-center">15.00€</td>
                            </tr>
                            
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td class="text-right"><h4><strong>Total:</strong></h4></td>
                                <td class="text-center text-danger"><h4><strong>16.50€</strong></h4></td>
                            </tr>
                        </tbody>
                    
                    </table>
                
                    <em>Une question ? Contactez le médecin via son email :</em>
                
                    </td>
                </div>
            </div>
        </div>';

        $from = "omnes.santenoreply@gmail.com";  // you mail
        $password = "@test1234";  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            echo "Email is sent!";
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
    }
    }

    sendmail();
    header('Location:index.php?payment=success');

}

  
    
        
            
?>


<html>
    <head>
        <title>Send Mail</title>
    </head>
    <body>
        <form method="get">
            <button type="submit" name="sendmail">sendmail</button>
        </form>
    </body>
</html>