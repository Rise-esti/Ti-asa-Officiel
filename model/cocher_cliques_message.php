<?php
    require("Model.php");
    session_start();
    $id = $_SESSION["id"];
    $bdd = new PDO('mysql:host=localhost;dbname=tia_asa','sserver','sserver') or die('not connect');
    $bdd->query("UPDATE CHAT SET cliques_messages='1' WHERE id_destinataire = '$id' ");
    $_SESSION["nbr_nouveau_message"] = "";
    echo $_SESSION["nbr_nouveau_message"];


       
