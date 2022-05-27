<?php 
//SESSION DESTROY CONCLUE LA SESSION DE L'UTILISATEUR
 session_start();
 session_destroy();
 //REDIRIGE L'UTILISATEUR VERS LA PAGE DE CONNEXION
 header('Location:client.php')
?>