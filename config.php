<?php
//CONNECTION DE LA BASE DE DONNEE, PASSER PAR CE FICHIER A CHAQUE FOIS QUE C'EST NECESSAIRE
  try{
    $bdd = new PDO("mysql:host=localhost;dbname=projetweb;charset=utf8","root","");
  }catch(Exception $e)
  {
    die("Erreur".$e->getMessage());
  }
?>