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
function requete_page(){
  $query = new Query_bdd;
  $all_pages = $query->select_all_page();
  return $all_pages;
}

$select_all_pages = requete_page();
$all_page = array();
$i = 0;
while($select_all_page = $select_all_pages->fetch()){
    $all_page[$i] = $select_all_page;
    $i++;
}

$info_message_recevoir = requete_publication_farany($id_publication);
$tab_recevoir = array();
$i = 0;
while($message_recevoir = $info_message_recevoir->fetch()){
    $tab_recevoir[$i] = $message_recevoir;
    $i++;
}

$tab = [$tab_recevoir, $all_page];

echo json_encode($tab);
?>
