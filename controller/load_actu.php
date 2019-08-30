<?php
require("../model/Model.php");

$id_publication = htmlspecialchars($_POST["id_pub"]);


function requete_publication_farany($id_publication){
    $query = new Query_bdd;
    $info_recevoir = $query->requete_last_publication($id_publication);
    if($info_recevoir === false){
        throw new Exception("Erreur info_recevoir ");
    }
    else{
        return $info_recevoir;
    }
}

$info_message_recevoir = requete_publication_farany($id_publication);
$tab_recevoir = array();
$i = 0;
while($message_recevoir = $info_message_recevoir->fetch()){
    $tab_recevoir[$i] = $message_recevoir;
    $i++;
}

echo json_encode($tab_recevoir);
?>
