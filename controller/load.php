<?php
require("../model/Model.php");

$id = htmlspecialchars($_POST["id"]);
$id_exp = htmlspecialchars($_POST["id_exp"]);
$id_last_message = htmlspecialchars($_POST["id_last_message"]);

function requete_last_message($id, $id_exp, $id_last_message){
    $query = new Query_bdd;
    $info_recevoir = $query->requete_last_message_discussion($id, $id_exp, $id_last_message);
    if($info_recevoir === false){
        throw new Exception("Erreur info_recevoir ");
    }
    else{
        return $info_recevoir;
    }
}

$info_message_recevoir = requete_last_message($id, $id_exp, $id_last_message);
$tab_recevoir = array();
$i = 0;
while($message_recevoir = $info_message_recevoir->fetch()){
    $tab_recevoir[$i] = $message_recevoir;
    $i++;
}

echo json_encode($tab_recevoir);
?>

