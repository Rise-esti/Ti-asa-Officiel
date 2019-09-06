<?php
$bdd = new PDO('mysql:host=localhost;dbname=tia_asa','sserver','sserver') or die('not connect');

$id = htmlspecialchars($_POST["id"]);
$id_exp = htmlspecialchars($_POST["id_exp"]);

$mess_id = $bdd->query("SELECT id_destinataire, p.nom nom, p.prenom prenom , p.photo_de_profil pdp, id_expediteur, id_message, mes FROM CHAT INNER JOIN PERSONNE p ON p.id=CHAT.id_expediteur WHERE vu='0' and cliques_messages='0' and id_destinataire='$id'");



$tab1 = array();
$i = 0;
while($info_mess = $mess_id->fetch()){
    $tab1[$i] = $info_mess;
    $i++;
}


echo json_encode($tab1);
