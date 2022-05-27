<?php
        $connect= mysqli_connect('localhost', 'root', '', 'projetweb');

        $idC= isset($_POST["id"])? $_POST["id"] : "";
        $idM= isset($_POST["idMedecin"])? $_POST["idMedecin"] : "";
        $heure= isset($_POST["heure"])? $_POST["heure"] : "";
        $date= isset($_POST["date"])? $_POST["date"] : "";
        $jour= isset($_POST["jour"])? $_POST["jour"] : "";

        $sql = "INSERT INTO consultation(idConsultation, idCli, idMed, heureConsult, dateConsult, jour) VALUES('$idC', '6529865', '$idM','$heure', '$date', '$jour')";
        //$result = $connect->query($sql);
        if ($connect->query($sql) === TRUE) {
            echo "Données ajoutées <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
?>