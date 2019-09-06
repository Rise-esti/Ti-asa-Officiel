<?php
require("Model.php");
session_start();
$id = $_SESSION["id"];
function verifier_message_nouveau_et_non_lu($id){
    $query_bdd = new Query_bdd;
    $verifier_message_nouveau_et_non_lu = $query_bdd->verifier_message_nouveau_et_non_lu($id);    
    return $verifier_message_nouveau_et_non_lu;
}


$verifier_message_nouveau_et_non_lu = verifier_message_nouveau_et_non_lu($id);
$_SESSION["nbr_nouveau_message"] = $verifier_message_nouveau_et_non_lu[0];
$_SESSION["nbr_message_non_lu"] = $verifier_message_nouveau_et_non_lu[1];

if($_SESSION["nbr_nouveau_message"] == 0){
    $_SESSION["nbr_nouveau_message"] = "";
}
echo $_SESSION["nbr_nouveau_message"];
