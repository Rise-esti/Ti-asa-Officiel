<?php
require("../model/Model.php");
$id = htmlspecialchars($_POST["id"]);
$id_dest = htmlspecialchars($_POST["id_exp"]);
$new_message = htmlspecialchars($_POST["new_message"]);

function insertion_new_message($id, $id_dest, $new_message){
    $query_bdd = new Query_bdd;
    $insertion_new_message = $query_bdd->enregistrer_message($id, $id_dest, $new_message);
    if($insertion_new_message == false){
        echo "erreur";
        throw new Exception("erreur insertion_new_message");
    }
    else{
        echo "ok";
    }
}
insertion_new_message($id, $id_dest, $new_message);