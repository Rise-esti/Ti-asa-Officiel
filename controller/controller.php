<?php
require("model/Model.php");

function page_1(){
    require("view/topnav.php");
}

function verifier_message_nouveau_et_non_lu($id){
    $query_bdd = new Query_bdd;
    $verifier_message_nouveau_et_non_lu = $query_bdd->verifier_message_nouveau_et_non_lu($id);    
    return $verifier_message_nouveau_et_non_lu;
}

function new_message($id){
    $query_bdd = new Query_bdd;
    $tab_mess_farany = $query_bdd->requete_new_message($id);
    return $tab_mess_farany;
}

function message($id, $id_exp, $new_chat){
    
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
    $_SESSION["ID"] = $id;
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    require("view/messages.php");
}

function enregistrer_nouveau_message($id, $id_dest, $nouveau_message){
    $query_bdd = new Query_bdd;
    $enregistrer_message = $query_bdd->enregistrer_message($id, $id_dest, $nouveau_message);
    if($enregistrer_message == false){
        throw new Exception("Erreur enregistrer_message");
    }
    else{
        header("location:index.php?action=message&id=$id&id_exp=$id_dest");
    }
}

function se_connecter($mail, $password){
    $query_bdd = new Query_bdd;
    $info_user = $query_bdd->se_conneter_user($mail);
    $info_user_li = $info_user->fetch();
    $mail_user = $info_user_li["mail"];
    $passwd_hash = $info_user_li["mot_de_passe"];
    if($info_user === false or $mail_user == ""){
        $erreur_login = "Mail incorrecte";
        header("location:index.php?action=erreur_login&erreur_login=$erreur_login");
    }
    else{
        $verification_password = password_verify($password, $passwd_hash);
        if($verification_password){
            session_start();
            $_SESSION["id"] = $info_user_li["id"];
            $_SESSION["nom"] = $info_user_li["nom"];
            $_SESSION["prenom"] = $info_user_li["prenom"];
            $_SESSION["mail"] = $mail_user;
            $id = $_SESSION["id"];

            header("location:index.php?action=connecter&id=$id");
        }
        else{
            $erreur_login = "Mot de passe incorrecte";
            header("location:index.php?action=erreur_login&erreur_login=$erreur_login");
        }
    }
}

function connecter($id){
    session_start();
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    
    $publication = $query_bdd->requete_publication($id);

    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    require("view/acceuil.php");
}

function afficher_journal($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $publication = $query_bdd->requete_my_publication($id);
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    require("view/afficher_journal.php");
}

function erreur_se_connecter($erreur_se_connecter){
    require("view/topnav.php");
}

function inscription($nom, $prenom, $mail, $password, $confirmation_password){
    $username = "$nom.$prenom";
    $query_bdd = new Query_bdd;
    $all_username_mail = $query_bdd->usernames_mail();
    while($user_name_mail_existe = $all_username_mail->fetch()){
        $name_existe = $user_name_mail_existe['username'];
        $mail_existe = $user_name_mail_existe['mail'];
        if($name_existe == $username){
            $name_already_utile = "true";
            break;
        }
        else{
            $name_already_utile = "false";
        }

        if($mail_existe == $mail){
            $mail_already_utile = "true";
            break;
        }
        else{
            $mail_already_utile = "false";
        }
    }

    if($name_already_utile == "false"){
        if($mail_already_utile == "false"){
            if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$mail)){
                if(strlen($password)>=8){
                    if($password == $confirmation_password){
                        $passwd_hash = password_hash($password, PASSWORD_DEFAULT);
                        $insertion_inscrire = $query_bdd->inscrire($username, $nom, $prenom, $mail, $passwd_hash);
                        if($insertion_inscrire === false){
                            throw new Exception("Probléme d'insertion dans la bdd");
                        }
                        else{
                            se_connecter($mail, $password);
                        }
                    }
                    else{
                        $erreur_inscription = "Confirmation de mot de passe incorrect";
                        require("view/topnav.php");
                    }
                }
                else{
                    $erreur_inscription = "Mot de passe trop faible";
                    require("view/topnav.php");
                }
            }
            else{
                $erreur_inscription = "Adresse mail incorrecte";
                require("view/topnav.php");
            }
        }
        else{
            $erreur_inscription = "Mail déjà utilisé";
            require("view/topnav.php");
        }
    }
    else{
        $erreur_inscription = "Vous avez un compte, veuillez connecter directement";
        require("view/topnav.php");
    }
}

function erreur_inscription($erreur_inscription){
    require("view/topnav.php");
}

function mot_de_passe_oubliee(){
    require("view/forgotpass.php");
}

function nous_contacter(){
    require("view/contact.php");
}

function deconnection(){
    session_start();
    $_SESSION = array();
    session_unset();
    session_destroy();
    header("location:index.php");
}

function modifier_profil($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    $active_plus_gauche = "active";
    require("view/edit_profile_basic.php");
}

function information_profil($id, $nom, $prenom, $username, $mail, $telephone, $jour_naissance, $mois_naissance,
$annee, $sexe, $adresse, $province, $biographie, $poste, $entreprise){
    $query_bdd =new Query_bdd;
    if($telephone == "+261" or $telephone== "" or $telephone == NULL){
        $telephone = NULL;
    }
    $annee = intval($annee);
    $jour = intval($jour_naissance);
    $mois = intval($mois_naissance);
    if($annee == 0 or $jour == 0 or $mois == 0){
        $date_naissance = NULL;
    }
    else{
        $date_naissance = "$annee-$mois-$jour";
    }

    if(!isset($poste) or $poste == ""){
        $poste = NULL;
    }
    if(!isset($entreprise) or $entreprise == ""){
        $entreprise = NULL;
    }
    
    $insertion_info_profil = $query_bdd->insertion_information_profil($id, $nom, $prenom, $username, $mail, $telephone, $date_naissance,
    $sexe, $adresse, $province, $biographie, $poste, $entreprise);
    if($insertion_info_profil === false){
        throw new Exception("Erreur insertion info_profil");
    }
    else{
        header("location:index.php?action=modifier_profil&id=$id");
    }
}

function modifier_photo($id, $pdp_name, $pdp_temporaire, $code_erreur, $destination, $action){
    $query_bdd = new Query_bdd;
    switch($code_erreur)
    {
        case UPLOAD_ERR_OK:
            if(copy($pdp_temporaire, $destination)){
                $verify_insertion = $query_bdd->insertion_fichier_pdp($id, $pdp_name, $action);
            }
            else{
                throw new Exception("Erreur copie fichier");
            }                           
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new Exception("Aucun fichier séléctionner");
            break;
        case UPLOAD_ERR_INI_SIZE:
            throw new Exception("Taille fichier > upload_max_filesize");
            break;
        case UPLOAD_ERR_PARTIAL:
            throw new Exception("Fichier partiellement transféré");
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            throw new Exception("Aucun répertoire temporaire");
            break;
        case UPLOAD_ERR_CANT_WRITE:
            throw new Exception("Erreur lors de l’écriture du fichier sur disque");
            break;
        default:
            throw new Exception("Fichier non transféré");
            break;
    }
    if($verify_insertion === false){
        throw new Exception("Erreur insertion fichier");
    }
    else{    
        header("location:index.php?action=modifier_profil&id=$id");
    }   
}

function afficher_information_generale($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $active_infogen = "active";
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    require("view/infogen.php");
}

function modifier_information($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $verifier_existance_formation = $query_bdd->verify_existance_formation($id);
    $tab = array();
    $i = 0;
    while($donne = $verifier_existance_formation->fetch()){
        $tab[$i] = $donne;
        $i++;
    }
    
    $nbr_formation = count($tab);

    if($nbr_formation == 0){
        $active_plus_gauche = "active";
        require("view/ajouter_formation.php");
    }
    else{
        $active_formations = "active";
        require("view/formation-profil.php");
    }

}

function ajouter_nouvelle_formation($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    $active_plus_gauche = "active";
    require("view/ajouter_formation.php");
}

function ajouter_formation($id, $ecole, $debut_mois_formation, $debut_annee_formation, $fin_mois_formation, $fin_annee_formation, $filiere, $niveau, $obtention){

    if(!isset($fin_mois_formation)){
        $fin_mois_formation = NULL;
    }
    if(!isset($fin_annee_formation)){
        $fin_annee_formation = NULL;
    }
    if(!isset($filiere)){
        $filiere = NULL;
    }
    if(!isset($niveau)){
        $niveau = NULL;
    }
    if(!isset($obtention)){
        $obtention= NULL;
    }
    $query_bdd = new Query_bdd;
    $insertion_formations = $query_bdd->insertion_formation($id, $ecole, $debut_mois_formation, $debut_annee_formation, $fin_mois_formation, $fin_annee_formation, $filiere, $niveau, $obtention);
    if($insertion_formations === false){
        throw new Exception("Erreur insertion formation");
    }
    else{
        header("location:index.php?action=modifier_information&id=$id");
    }

}

function mettre_jour_formation($id, $id_formation, $ecole, $debut_mois_formation, $debut_annee_formation, 
$fin_mois_formation, $fin_annee_formation, $filiere, $niveau, $obtention){
    if(!isset($fin_mois_formation)){
        $fin_mois_formation = NULL;
    }
    if(!isset($fin_annee_formation)){
        $fin_annee_formation = NULL;
    }
    if(!isset($filiere)){
        $filiere = NULL;
    }
    if(!isset($niveau)){
        $niveau = NULL;
    }
    if(!isset($obtention)){
        $obtention= NULL;
    }
    $query_bdd = new Query_bdd;
    $mettre_jour_formation = $query_bdd->mis_a_jours_formation($id, $id_formation, $ecole, $debut_mois_formation, $debut_annee_formation, 
                            $fin_mois_formation, $fin_annee_formation, $filiere, $niveau, $obtention);
    if($mettre_jour_formation === false){
        throw new Exception("Erreur mettre_jour_formation");
    }
    else{
        header("location:index.php?action=modifier_information&id=$id");
    }
}

function modifier_formation_profil($id, $id_formation){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $information_a_modifier = $query_bdd->information_modifier($id, $id_formation);
    $information_a_modifier_li = $information_a_modifier->fetch();
    $active_plus_gauche = "active";
    require("view/edit_formation.php");
}

function supprimer_formation_profil($id, $id_formation){
    $query_bdd = new Query_bdd;
    $supprimer_formation = $query_bdd->supprimer_formation($id, $id_formation);
    if($supprimer_formation === false){
        throw new Exception("Erreur supprimer_formation");
    }
    else{
        header("location:index.php?action=modifier_information&id=$id");
    }
}

function modifier_competence($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $requete_competence = $query_bdd->requete_competence_existant($id);
    $tab = array();
    $i = 0;
    while($donne = $requete_competence->fetch()){
        $tab[$i] = $donne;
        $i++;
    }
    
    $nbr_competence = count($tab);

    if($nbr_competence == 0){
        $active_plus_gauche = "active";
        require("view/ajouter_competence.php");
    }
    else{
        $active_competences = "active";
        require("view/competence.php");
    }

}

function ajouter_competence($id, $competence, $explication, $niveau){
    if(!isset($explication)){
        $explication = NULL;
    }
    if(!isset($niveau)){
        $niveau = NULL;
    }

    $query_bdd = new Query_bdd;
    $insert_competence = $query_bdd->insertion_competence($id, $competence, $explication, $niveau);
    if($insert_competence === false){
        throw new Exception("Erreur insert_competence");
    }
    else{
        header("location:index.php?action=modifier_competence&id=$id");
    }
}

function modifier_competence_existant($id, $id_competence){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $select_competence = $query_bdd->select_competence($id, $id_competence);
    $select_competence_li = $select_competence->fetch();
    $active_plus_gauche = "active";
    require("view/edit-competence.php");
}

function mettre_jour_competence($id, $id_competence, $competence, $explication, $niveau){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

 
    $mettre_jour_competence = $query_bdd->mettre_jour_competence_existant($id, $id_competence, $competence, $explication, $niveau);
    if($mettre_jour_competence === false){
        throw new Exception("Erreur mettre_jour_competence");
    }
    else{
        header("location:index.php?action=modifier_competence&id=$id");
    }

}

function ajouter_nouvelle_competence($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    $active_plus_gauche = "active";
    require("view/ajouter_competence.php");
}

function supprimer_competence_profil($id, $id_competence){
    $query_bdd = new Query_bdd;
    $suppression_competence = $query_bdd->suppression_competence($id, $id_competence);
    if($suppression_competence === false){
        throw new Exception("erreur suppression_competence");
    }
    else{
        header("location:index.php?action=modifier_competence&id=$id");
    }
}

function modifier_afficher_experience($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $requete_experience = $query_bdd->experience_existant($id);
    $tab = array();
    $i = 0;
    while($donne = $requete_experience->fetch()){
        $tab[$i] = $donne;
        $i++;
    }
    
    $nbr_experience = count($tab);

    if($nbr_experience  == 0){
        require("view/ajouter_experience.php");
    }
    else{
        $active_experiences = "active";
        require("view/experience.php");
    }
}

function ajouter_experience($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    require("view/ajouter_experience.php");
}

function ajouter_nouvelle_experience($id, $entreprise_lieu, $activite_experience,  $annee, $poste){
    if(!isset($activite_experience)){
        $activite_experience = NULL;
    }

    if(!isset($annee)){
        $annee = NULL;
    }
    if(!isset($poste)){
        $poste = NULL;
    }
    $query_bdd = new Query_bdd;
    $insertion_nouvelle_experience = $query_bdd->insert_nouvelle_experience($id, $entreprise_lieu, $activite_experience,  $annee, $poste);
    if($insertion_nouvelle_experience === false){
        throw new Exception("Erreur insertion_nouvelle_experience");
    }
    else{
        header("location:index.php?action=afficher_experience&id=$id");
    }
}

function modifier_experience_existe($id, $id_experience){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $experience_existe = $query_bdd->requete_experience_existe($id, $id_experience);
    $experience_existe_li = $experience_existe->fetch();
    require("view/edit-experience.php");
}

function mettre_jour_experience($id, $id_experience, $entreprise_lieu, $date_experience, $poste_experience, $activite){
    $query_bdd = new Query_bdd;
    if(!isset($activite)){
        $activite = NULL;
    }

    if(!isset($date_experience)){
        $date_experience = NULL;
    }
    if(!isset($poste_experience)){
        $poste_experience = NULL;
    }
    $mettre_jour_experience = $query_bdd->mettre_jour_experience($id, $id_experience, $entreprise_lieu, $date_experience, $poste_experience, $activite);
    if($mettre_jour_experience === false){
        throw new Exception("Erreur mettre_jour_experience");
    }
    else{
        header("location:index.php?action=afficher_experience&id=$id");
    }
}

function supprimer_experience($id, $id_experience){
    $query_bdd = new Query_bdd;
    $suppression_experience = $query_bdd->supprimer_experience_existe($id, $id_experience);
    if($suppression_experience === false){
        throw new Exception("Erreur suppression_experience");
    }
    else{
        header("location:index.php?action=afficher_experience&id=$id");
    }
}

function afficher_centre_interet($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $requete_centre_interet = $query_bdd->centre_interet_existant($id);
    $tab = array();
    $i = 0;
    while($donne = $requete_centre_interet->fetch()){
        $tab[$i] = $donne;
        $i++;
    }
    
    $nbr_centre_interet = count($tab);

    if($nbr_centre_interet  == 0){
        $active_plus_gauche = "active";
        require("view/ajouter_centre_interet.php");
    }
    else{
        $active_centre_interet = "active";
        require("view/centre_interet.php");
    }
}

function ajouter_centre_interet($id, $centre_interet, $description){
    if(!isset($description)){
        $description = NULL;
    }
    $query_bdd = new Query_bdd;
    $insertion_centre_interet = $query_bdd->insertion_centre_interet($id, $centre_interet, $description);
    if($insertion_centre_interet === false){
        throw new Exception("Erreur insertion_centre_interet");
    }
    else{
        header("location:index.php?action=afficher_centre_interet&id=$id");
    }

}

function modifier_centre_interet_existe($id, $id_centre_interet){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $centre_interet_existe = $query_bdd->centre_interet_existe($id, $id_centre_interet);
    if($centre_interet_existe === false){
        throw new Exception("Erreur centre_interet_existe");
    }
    else{
        $centre_interet_existe_li = $centre_interet_existe->fetch();
        require("view/edit_centre_interet.php");
    }
}

function mettre_jours_centre_interet($id, $id_centre_interet, $centre_interet, $description_interet){
    if(!isset($description_interet)){
        $description_interet = NULL;
    }
    $query_bdd = new Query_bdd;
    $mettre_jours_centre_interet = $query_bdd->mettre_jours_centre_interet($id, $id_centre_interet, $centre_interet, $description_interet);
    if($mettre_jours_centre_interet === false){
        throw new Exception("Erreur mettre_jours_centre_interet");
    }
    else{
        
        header("location:index.php?action=afficher_centre_interet&id=$id");
    }
}

function ajouter_nouvelle_centre_interet($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $active_plus_gauche = "active";
    require("view/ajouter_centre_interet.php");
}

function supprimer_centre_interet($id, $id_centre_interet){
    $query_bdd = new Query_bdd;
    $supprimer_centre_interet = $query_bdd->supprimer_centre_interet($id, $id_centre_interet);
    if($supprimer_centre_interet === false){
        throw new Exception("erreur supprimer_centre_interet");
    }
    else{
        
        header("location:index.php?action=afficher_centre_interet&id=$id");
    }
}

function afficher_profil_utilisateur($username){
    session_start();
    $id = $_SESSION["id"];
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $select_mes_page = $query_bdd->select_mes_page($id);

    $select_profil = $query_bdd->select_profil($username);
    $select_profil_li = $select_profil->fetch();
    require("view/infogen.php");
}

function new_post($id, $texte, $experience, $competence, $formation, 
$date_limite, $personnalite, $langue, $lieu, $oFileInfos, $mission ){
    $query_bdd = new Query_bdd;
    if(!isset($texte)){
        $texte = NULL;

    }
    if(!isset($experience)){
        $experience = NULL;

    }
    if(!isset($competence)){
        $competence = NULL;

    }
    if(!isset($formation)){
        $formation = NULL;

    }
    if(!isset($date_limite)){
        $date_limite = NULL;

    }
    if(!isset($personnalite)){
        $personnalite = NULL;

    }
    if(!isset($langue)){
        $langue = NULL;

    }
    if(!isset($lieu)){
        $lieu = NULL;

    }
    if(!isset($mission)){
        $mission = NULL;
    }
    $image_name = $oFileInfos["name"]; 
    if(isset($image_name) and $image_name != ""){
        
        $image_name = str_replace(' ', '_', $image_name);
        $image_temporaire = $oFileInfos["tmp_name"]; 
        $code_erreur = $oFileInfos["error"];
        $destination = "public/images/picture/post/$image_name";

        switch($code_erreur)
        {
            case UPLOAD_ERR_OK:
                if(copy($image_temporaire, $destination)){
                    $mess = "ok";
                }
                else{
                    throw new Exception("Erreur copie fichier");
                }                           
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new Exception("Aucun fichier séléctionner");
                break;
            case UPLOAD_ERR_INI_SIZE:
                throw new Exception("Taille fichier > upload_max_filesize");
                break;
            case UPLOAD_ERR_PARTIAL:
                throw new Exception("Fichier partiellement transféré");
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                throw new Exception("Aucun répertoire temporaire");
                break;
            case UPLOAD_ERR_CANT_WRITE:
                throw new Exception("Erreur lors de l’écriture du fichier sur disque");
                break;
            default:
                throw new Exception("Fichier non transféré");
                break;
        }
    }
    
    if(!isset($image_name)){
        $image_name = NULL;
    }
    
    $verify_insertion_post = $query_bdd->insertion_fichier_post($id, $texte, $experience, $competence, $formation, 
    $date_limite, $personnalite, $langue, $lieu, $image_name, $mission );


    if($verify_insertion_post === false){
        throw new Exception("Erreur insertion new post");
    }
    else{
        header("location:index.php?action=connecter&id=$id");
    }

}

function modifier_mot_de_passe($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    require("view/edit-pass.php");
}

function nouveau_mot_de_passe($id, $ancien_mdp, $nouveau_mdp, $confirmation_mdp){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);

    $mdp_actuelle = $query_bdd->mdp_actuelle($id);
    $mdp_actuelle_li = $mdp_actuelle->fetch();
    $mon_mdp_actuelle_= $mdp_actuelle_li["mot_de_passe"];

    $verify_mdp = password_verify($ancien_mdp, $mon_mdp_actuelle_);
    if($verify_mdp){
        if($nouveau_mdp == $confirmation_mdp){
            $passwd_hash = password_hash($nouveau_mdp, PASSWORD_DEFAULT);
            $mettre_jour_mdp = $query_bdd->mettre_jour_mdp($passwd_hash, $id);
            if($mettre_jour_mdp === false){
                throw new Exception("Erreur mettre_jour_mdp");
            }
            else{
                $ok = "Mot de passe mis à jours";
                require("view/edit-pass.php");
            }
        }
        else{
            $error = "Confirmation mot de passe incorrecte";
            require("view/edit-pass.php");
        }
    }
    else{
        $error = "Ancien mot de passe incorrecte";
        require("view/edit-pass.php");
    }
}

function creer_page($id){
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();   
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    require("view/edit_page_(modifier).php");
}

function info_creation_page($nom_page, $mail_page, $telephone_page, $province_page, $adresse_page, $description_page, $id){
    $query_bdd = new Query_bdd;
    $select_nom_page_existant = $query_bdd->select_nom_page_existant();

    while($nom_mail_page = $select_nom_page_existant->fetch()){
        if($nom_page == $nom_mail_page["nom_page"] or $mail_page == $nom_mail_page["mail_page"]){
            $nom_mail = false;
            break;
        }
        else{
            $nom_mail = true;
        }
    }

    if($nom_mail == true){
        $creation_page = $query_bdd->creation_page($nom_page, $mail_page, $telephone_page, $province_page, $adresse_page, $description_page, $id);
        if($creation_page == false){
            throw new Exception("Erreur creation_page");
        }
        else{
            $profil = $query_bdd->information_profil($id);
            $profil_li = $profil->fetch();  
            $select_page = $query_bdd->select_page($id, $nom_page);
            $select_page_li = $select_page->fetch();
            $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
            $select_mes_page = $query_bdd->select_mes_page($id);
            require("view/edit_page_(modifier).php");
        }
    }
    else{
        $erreur_nom_mail = "Adresse mail ou nom de la page déjà utilisée";
        $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
        $select_mes_page = $query_bdd->select_mes_page($id);
        $profil = $query_bdd->information_profil($id);
        $select_page = $query_bdd->select_page($id, $nom_page);
        $select_page_li = $select_page->fetch();
        require("view/edit_page_(modifier).php");

    }
}

function afficher_ma_page($id, $nom_page){
    
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();  
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    $select_page = $query_bdd->select_page($id, $nom_page);
    $select_page_li = $select_page->fetch();
    require("view/infogen_page.php");
}

function modifier_page($id, $nom_page){
    $query_bdd = new Query_bdd;
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    $profil = $query_bdd->information_profil($id);
    $select_page = $query_bdd->select_page($id, $nom_page);
    $select_page_li = $select_page->fetch();
    require("view/edit_page.php");

}

function mettre_jour_page($id, $id_page, $nom_page, $mail_page, $telephone_page, $province_page, $adresse, $description){
    $query_bdd = new Query_bdd;

    $select_nom_page_existant = $query_bdd->select_nom_page_existe_apart_mapage($id_page);

    while($nom_mail_page = $select_nom_page_existant->fetch()){
        if($nom_page == $nom_mail_page["nom_page"] or $mail_page == $nom_mail_page["mail_page"]){
            $nom_mail = false;
            break;
        }
        else{
            $nom_mail = true;
        }
    }

    if($nom_mail == true){
        $mettre_jour_page = $query_bdd->mettre_jour_page($id, $id_page, $nom_page, $mail_page, $telephone_page, $province_page, $adresse, $description);
        if($mettre_jour_page === false){
            throw new Exception("Erreur mettre_jour_page");
        }
        else{
            $profil = $query_bdd->information_profil($id);
            $profil_li = $profil->fetch(); 
            $select_page = $query_bdd->select_page($id, $nom_page);
            $select_page_li = $select_page->fetch();
            $select_mes_page = $query_bdd->select_mes_page($id);
            require("view/infogen_page.php");
            
        }
    }
    else{
        $erreur_nom_mail = "Adresse mail ou nom de la page déjà utilisée";
        $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
        $select_mes_page = $query_bdd->select_mes_page($id);
        $profil = $query_bdd->information_profil($id);
        $select_page = $query_bdd->select_page_id_id_page($id, $id_page);
        $select_page_li = $select_page->fetch();
        require("view/edit_page.php");

    }

}

function modifier_photo_page($id, $id_page, $type, $photo_name, $photo_temporaire, $code_erreur){
    
    if($type == '123'){
        $destination = "public/images/picture/pdc_page/$photo_name";
        $column = "pdc_page";
    }
    elseif($type == '321'){
        $destination = "public/images/picture/pdp_page/$photo_name";
        $column = "pdp_page";
    }
    
    switch($code_erreur)
        {
            case UPLOAD_ERR_OK:
                if(copy($photo_temporaire, $destination)){
                    $query_bdd = new Query_bdd;
                    $insertion_photo_page = $query_bdd->insertion_photo_page($id, $id_page, $column, $photo_name);
                    if($insertion_photo_page === false){
                        throw new Exception("Erreur insertion_photo_page");
                    }
                    else{
                        $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
                        $select_mes_page = $query_bdd->select_mes_page($id);
                        $profil = $query_bdd->information_profil($id);
                        $select_page = $query_bdd->select_page_id_id_page($id, $id_page);
                        $select_page_li = $select_page->fetch();
                        require("view/edit_page.php");
                    }
                }
                else{
                    throw new Exception("Erreur copie fichier");
                }                           
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new Exception("Aucun fichier séléctionner");
                break;
            case UPLOAD_ERR_INI_SIZE:
                throw new Exception("Taille fichier > upload_max_filesize");
                break;
            case UPLOAD_ERR_PARTIAL:
                throw new Exception("Fichier partiellement transféré");
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                throw new Exception("Aucun répertoire temporaire");
                break;
            case UPLOAD_ERR_CANT_WRITE:
                throw new Exception("Erreur lors de l’écriture du fichier sur disque");
                break;
            default:
                throw new Exception("Fichier non transféré");
                break;
        }
}

function rechercher($id, $recherche){
    $query_bdd = new Query_bdd;
    $rechercher_profil = $query_bdd->rechercher_profil($id, $recherche);
    $rechercher_publication = $query_bdd->rechercher_publication($id, $recherche);
    $rechercher_page = $query_bdd->rechercher_page($id, $recherche);

    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    require("view/recherche.php");
}

function page($id, $nom_page){
    
    $query_bdd = new Query_bdd;
    $profil = $query_bdd->information_profil($id);
    $profil_li = $profil->fetch();  
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    $select_mes_page = $query_bdd->select_mes_page($id);
    $select_page = $query_bdd->select_page($id, $nom_page);
    $select_page_li = $select_page->fetch();
    $id_page = $select_page_li["id_page"];
    $publication = $query_bdd->requete_my_publication_page($id, $id_page);
        
    $afficher_autre_profil = $query_bdd->afficher_autre_profil($id);
    require("view/page.php");
}

function new_post_page($nom_page, $id_page, $id, $texte, $experience, $competence, $formation, $date_limite, $personnalite, $langue, $lieu, $oFileInfos, $mission ){
    $query_bdd = new Query_bdd;
    if(!isset($texte)){
        $texte = NULL;

    }
    if(!isset($experience)){
        $experience = NULL;

    }
    if(!isset($competence)){
        $competence = NULL;

    }
    if(!isset($formation)){
        $formation = NULL;

    }
    if(!isset($date_limite)){
        $date_limite = NULL;

    }
    if(!isset($personnalite)){
        $personnalite = NULL;

    }
    if(!isset($langue)){
        $langue = NULL;

    }
    if(!isset($lieu)){
        $lieu = NULL;

    }
    if(!isset($mission)){
        $mission = NULL;
    }
    $image_name = $oFileInfos["name"]; 
    if(isset($image_name) and $image_name != ""){
        
        $image_name = str_replace(' ', '_', $image_name);
        $image_temporaire = $oFileInfos["tmp_name"]; 
        $code_erreur = $oFileInfos["error"];
        $destination = "public/images/picture/post_page/$image_name";

        switch($code_erreur)
        {
            case UPLOAD_ERR_OK:
                if(copy($image_temporaire, $destination)){
                    $mess = "ok";
                }
                else{
                    throw new Exception("Erreur copie fichier");
                }                           
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new Exception("Aucun fichier séléctionner");
                break;
            case UPLOAD_ERR_INI_SIZE:
                throw new Exception("Taille fichier > upload_max_filesize");
                break;
            case UPLOAD_ERR_PARTIAL:
                throw new Exception("Fichier partiellement transféré");
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                throw new Exception("Aucun répertoire temporaire");
                break;
            case UPLOAD_ERR_CANT_WRITE:
                throw new Exception("Erreur lors de l’écriture du fichier sur disque");
                break;
            default:
                throw new Exception("Fichier non transféré");
                break;
        }
    }
    
    if(!isset($image_name)){
        $image_name = NULL;
    }
    
    $verify_insertion_post = $query_bdd->insertion_fichier_post_page($id_page, $id, $texte, $experience, $competence, $formation, 
    $date_limite, $personnalite, $langue, $lieu, $image_name, $mission );


    if($verify_insertion_post === false){
        throw new Exception("Erreur insertion new post_page");
    }
    else{
        header("location:index.php?action=page&id=$id&nom_page=$nom_page");
    }

}
