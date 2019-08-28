
<?php
require("Model.php");
session_start();
$id_exp = $_SESSION["id_expediteur_mess"];
$id = $_SESSION["ID"];
echo "$id, $id_exp";

function verifier_message_nouveau_et_non_lu($id){
    $query_bdd = new Query_bdd;
    $verifier_message_nouveau_et_non_lu = $query_bdd->verifier_message_nouveau_et_non_lu($id);    
    return $verifier_message_nouveau_et_non_lu;
}

$query_bdd = new Query_bdd;
$verify_existance_discussion = $query_bdd->verify_existance_discussion($id, $id_exp);
$verify_existance_discussion_li = $verify_existance_discussion->fetch();
$existance_discussion = $verify_existance_discussion_li["id_message"];

if(empty($existance_discussion)){
    $new_chat = 1;
}
else{
    $new_chat = 0;
}
if($new_chat != 1){
    $requete_discussion = $query_bdd->requete_discussion($id, $id_exp);
    $tab = array();
    $i = 0;
    while($discussion = $requete_discussion->fetch()){
        $tab[$i] = $discussion;
        $i++;
    }
    $nbr_discussion = count($tab);
    
}

$profil = $query_bdd->information_profil($id);
$profil_li = $profil->fetch();

$info_destinataire = $query_bdd->information_profil($id_exp);
$info_destinataire_li = $info_destinataire->fetch();

$verifier_message_nouveau_et_non_lu = verifier_message_nouveau_et_non_lu($id);
$_SESSION["nbr_nouveau_message"] = $verifier_message_nouveau_et_non_lu[0];
$_SESSION["nbr_message_non_lu"] = $verifier_message_nouveau_et_non_lu[1];
$all_messages = $query_bdd->all_messages($id);
$_SESSION["id_expediteur_mess"] = $id_exp;

?>

	<?php
	for($i=0; $i<$nbr_discussion; $i++){
		$id_exp = $tab[$i]["expediteur"];
		
		if($id_exp != $id){
			
	?>
		<li class="you">
			<figure><img src=<?= $chemin_pdp_dest?> alt=""></figure>
			<p><?= $tab[$i]["mes"] ?></p>
		</li>
		<?php
		}
		else{
			
		?>
		<li class="me">
			<figure><img src="<?= $chemin ?>" alt=""></figure>
			<p><?= $tab[$i]["mes"] ?></p>
		</li>
	<?php
		}
	}
	$id_dest = $_SESSION["id_expediteur_mess"];
	?>