<?php
require("controller/controller.php");

session_start();
try{
    if(isset($_GET["action"])){
        $action = htmlspecialchars($_GET["action"]);
        if($action == "se_connecter"){
            if(isset($_POST["valider_se_connecter"])){
                $mail = htmlspecialchars($_POST["mail"]);
                $password = htmlspecialchars($_POST["password"]);
                se_connecter($mail, $password);
            }
        }

        elseif(($action == "connecter" and isset($_GET["id"]))){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                connecter($id);
            }
        }

        elseif($action == "erreur_login" and isset($_GET["erreur_login"])){
            $erreur_se_connecter = htmlspecialchars($_GET["erreur_login"]);
            erreur_se_connecter($erreur_se_connecter);
        }

        elseif($action == "inscription"){
            if(isset($_POST["valider_inscription"])){
                $nom = htmlspecialchars($_POST["nom"]);
                $prenom = htmlspecialchars($_POST["prenom"]);
                $mail = htmlspecialchars($_POST["mail"]);
                $password = htmlspecialchars($_POST["password"]);
                $confirmation_password = htmlspecialchars($_POST["confirmation_password"]);
                 echo  "inscription($nom, $prenom, $mail, $password, $confirmation_password)";
            }
        }

        elseif($action == "erreur_inscription" and isset($_GET["erreur"])){
            $erreur_inscription = htmlspecialchars($_GET["erreur"]);
            erreur_inscription($erreur_inscription);
        }

        elseif($action == "mot_de_passe_oubliee"){
            mot_de_passe_oubliee();
        }

        elseif($action == "nous_contacter"){
            nous_contacter();
        }

        elseif($action == "deconnecter" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                deconnection();
            }
        }

        elseif($action == "modifier_profil" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                modifier_profil($id);
            }
        }

        elseif($action == "information_profile" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"] and isset($_POST["valider_modify_profil"])){
                $nom = htmlspecialchars($_POST["nom"]);
                $prenom = htmlspecialchars($_POST["prenom"]);
                $username = htmlspecialchars($_POST["nom_utilisateur"]);
                $mail = htmlspecialchars($_POST["mail"]);
                $telephone = htmlspecialchars($_POST["telephone"]);
                $jour_naissance = htmlspecialchars($_POST["jour"]);
                $mois_naissance = htmlspecialchars($_POST["mois"]);
                $annee = htmlspecialchars($_POST["annee"]);
                $sexe = htmlspecialchars($_POST["radio"]);
                $adresse = htmlspecialchars($_POST["adresse"]);
                $province = htmlspecialchars($_POST["province"]);
                $biographie = htmlspecialchars($_POST["biographie"]);
                $poste = htmlspecialchars($_POST["poste"]);
                $entreprise = htmlspecialchars($_POST["entreprise"]);
                information_profil($id, $nom, $prenom, $username, $mail, $telephone, $jour_naissance, $mois_naissance,
                $annee, $sexe, $adresse, $province, $biographie, $poste, $entreprise);
            }
        }

        elseif(($action == "modifier_pdp" or $action == "modifier_pdc") and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                $oFileInfos = $_FILES["fichier_image"]; 
                $pdp_name= $oFileInfos["name"]; 
                $pdp_name = str_replace(' ', '_', $pdp_name);
                $pdp_temporaire = $oFileInfos["tmp_name"]; 
                $code_erreur = $oFileInfos["error"];
                if($action == "modifier_pdp"){
                    $destination = "public/images/picture/pdp/$pdp_name";
                }
                else{
                    $destination = "public/images/picture/pdc/$pdp_name";
                }
                modifier_photo($id, $pdp_name, $pdp_temporaire, $code_erreur, $destination, $action);
            }
        }

        elseif($action == "information_generale" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                afficher_information_generale($id);
            }
        }

        elseif(($action == "modifier_information" or $action == "afficher_formation") and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                modifier_information($id);
            }
        }

        elseif($action == "ajouter_nouvelle_formation" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                ajouter_nouvelle_formation($id);
            }
        }
        

        elseif($action == "ajouter_formation" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            
            if($id == $_SESSION["id"] and isset($_POST["ajouter_information"])){
                $ecole = htmlspecialchars($_POST["ecole"]);
                $debut_mois_formation = htmlspecialchars($_POST["debut_mois_formation"]);
                $debut_annee_formation = htmlspecialchars($_POST["debut_annee_formation"]);
                $fin_mois_formation = htmlspecialchars($_POST["fin_mois_formation"]);
                $fin_annee_formation = htmlspecialchars($_POST["fin_annee_formation"]);
                $filiere = htmlspecialchars($_POST["filiere"]);
                $niveau = htmlspecialchars($_POST["niveau"]);
                $obtention = htmlspecialchars($_POST["obtention"]);
                ajouter_formation($id, $ecole, $debut_mois_formation, $debut_annee_formation, $fin_mois_formation, $fin_annee_formation, $filiere, $niveau, $obtention);
            }
        }

        elseif($action == "modifier_formation_profil" and isset($_GET["id"]) and isset($_GET["id_formation"])){
            $id = htmlspecialchars($_GET["id"]);

            if($id == $_SESSION["id"]){
                $id_formation = htmlspecialchars($_GET["id_formation"]);               
                modifier_formation_profil($id, $id_formation);
            }
        }

        elseif($action == "mettre_jour_formation" and isset($_GET["id"]) and isset($_GET["id_formation"])){
            $id = htmlspecialchars($_GET["id"]);

            if($id == $_SESSION["id"]){
                $id_formation = htmlspecialchars($_GET["id_formation"]);               
                $ecole = htmlspecialchars($_POST["ecole"]);
                $debut_mois_formation = htmlspecialchars($_POST["debut_mois_formation"]);
                $debut_annee_formation = htmlspecialchars($_POST["debut_annee_formation"]);
                $fin_mois_formation = htmlspecialchars($_POST["fin_mois_formation"]);
                $fin_annee_formation = htmlspecialchars($_POST["fin_annee_formation"]);
                $filiere = htmlspecialchars($_POST["filiere"]);
                $niveau = htmlspecialchars($_POST["niveau"]);
                $obtention = htmlspecialchars($_POST["obtention"]);
                mettre_jour_formation($id, $id_formation, $ecole, $debut_mois_formation, $debut_annee_formation, $fin_mois_formation, $fin_annee_formation, $filiere, $niveau, $obtention);
            }
        }

        elseif($action == "supprimer_formation" and isset($_GET["id"]) and isset($_GET["id_formation"])){
            $id = htmlspecialchars($_GET["id"]);

            if($id == $_SESSION["id"]){
                $id_formation = htmlspecialchars($_GET["id_formation"]);               
                supprimer_formation_profil($id, $id_formation);
            }
        }

        elseif(($action == "modifier_competence" or $action == "afficher_competence" )and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                modifier_competence($id);
            }
        }

        elseif($action == "ajouter_competence" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"] and isset($_POST["ajouter_competence"])){
                $competence = htmlspecialchars($_POST["competence"]);
                $explication = htmlspecialchars($_POST["explication"]);
                $niveau = htmlspecialchars($_POST["niveau"]);
                ajouter_competence($id, $competence, $explication, $niveau);
            }
        }

        elseif($action == "modifier_competence_existant" and isset($_GET["id"]) and isset($_GET["id_competence"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                $id_competence = htmlspecialchars($_GET["id_competence"]);
                modifier_competence_existant($id, $id_competence);
            }
        }

        elseif($action == "mettre_jour_competence" and isset($_GET["id"]) and isset($_GET["id_competence"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"] and isset($_POST["mettre_jours_competence"])){
                $id_competence = htmlspecialchars($_GET["id_competence"]);
                $competence = htmlspecialchars($_POST["competence"]);
                $explication = htmlspecialchars($_POST["explication"]);
                $niveau = htmlspecialchars($_POST["niveau"]);
                mettre_jour_competence($id, $id_competence, $competence, $explication, $niveau);
            }
        }

        elseif($action == "ajouter_nouvelle_competence" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                ajouter_nouvelle_competence($id);
            }
        }

        elseif($action == "supprimer_competence" and isset($_GET["id"]) and isset($_GET["id_competence"])){
            $id = htmlspecialchars($_GET["id"]);

            if($id == $_SESSION["id"] and isset($_GET["id_competence"])){
                $id_competence = htmlspecialchars($_GET["id_competence"]);               
                supprimer_competence_profil($id, $id_competence);
            }
        }

        elseif(($action == "modifier_experience" or $action == "afficher_experience" )and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                modifier_afficher_experience($id);
            }
        }

        elseif($action == "ajouter_experience" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                ajouter_experience($id);
            }
        }

        elseif($action == "ajouter_nouvelle_experience" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"] and isset($_POST["ajouter_nouvelle_experience"])){
                $entreprise_lieu = htmlspecialchars($_POST["entreprise_lieu"]);
                $activite_experience = htmlspecialchars($_POST["activite_experience"]);

                $annee = htmlspecialchars($_POST["annee"]);
                $poste = htmlspecialchars($_POST["poste"]);
                ajouter_nouvelle_experience($id, $entreprise_lieu, $activite_experience, $annee, $poste);
            }
        }

        elseif($action == "modifier_experience_existe" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"] and isset($_GET["id_experience"])){
                $id_experience = htmlspecialchars($_GET["id_experience"]);
                modifier_experience_existe($id, $id_experience);
            }
        }

        elseif($action == "mettre_jour_experience" and isset($_GET["id"]) and isset($_GET["id_experience"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"] and isset($_POST["mettre_jour_exp"])){
                $id_experience = htmlspecialchars($_GET["id_experience"]);
                $entreprise_lieu = htmlspecialchars($_POST["entreprise_lieu"]);
                $date_experience = htmlspecialchars($_POST["date_experience"]);
                $poste_experience = htmlspecialchars($_POST["poste_experience"]);
                $activite = htmlspecialchars($_POST["activite"]);
                mettre_jour_experience($id, $id_experience, $entreprise_lieu, $date_experience, $poste_experience, $activite);
            }
        }

        elseif($action == "supprimer_experience" and isset($_GET["id"]) and isset($_GET["id_experience"])){
            $id = htmlspecialchars($_GET["id"]);

            if($id == $_SESSION["id"] and isset($_GET["id_experience"])){
                $id_experience = htmlspecialchars($_GET["id_experience"]);               
                supprimer_experience($id, $id_experience);
            }
        }

        elseif(($action == "afficher_centre_interet" or $action == "modifier_centre_interet") and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);

            if($id == $_SESSION["id"]){
                afficher_centre_interet($id);
            }
        }

        elseif($action == "ajouter_centre_interet" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"] and isset($_POST["ajouter_centre_interet"])){
                $centre_interet = htmlspecialchars($_POST["centre_interet"]);
                $description = htmlspecialchars($_POST["description"]);
                ajouter_centre_interet($id, $centre_interet, $description);
            }
        }

        elseif($action == "modifier_centre_interet_existe" and isset($_GET["id"]) and isset($_GET["id_centre_interet"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                $id_centre_interet = htmlspecialchars($_GET["id_centre_interet"]);
                modifier_centre_interet_existe($id, $id_centre_interet);
            }
        }

        elseif($action == "mettre_jours_centre_interet" and isset($_GET["id"]) and isset($_GET["id_centre_interet"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                $id_centre_interet = htmlspecialchars($_GET["id_centre_interet"]);
                $centre_interet = htmlspecialchars($_POST["centre_d_interet"]);
                $description_interet = htmlspecialchars($_POST["description_interet"]);
                mettre_jours_centre_interet($id, $id_centre_interet, $centre_interet, $description_interet);
            }
        }

        elseif($action == "ajouter_nouvelle_centre_interet" and isset($_GET["id"])){

            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                ajouter_nouvelle_centre_interet($id);
            }
        }

        elseif($action == "supprimer_centre_interet" and isset($_GET["id"]) and isset($_GET["id_centre_interet"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                $id_centre_interet = htmlspecialchars($_GET["id_centre_interet"]);
                supprimer_centre_interet($id, $id_centre_interet);
            }
        }

        elseif($action == "affichage_profil" and isset($_GET["username"])){           
                $username = htmlspecialchars($_GET["username"]);
                afficher_profil_utilisateur($username);

        }


        elseif($action == "post" and isset($_GET["id"]) and isset($_POST["new_post"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                $texte = htmlspecialchars($_POST["texte"]);
                $experience = htmlspecialchars($_POST["experience"]);
                $competence = htmlspecialchars($_POST["competence"]);
                $formation = htmlspecialchars($_POST["formation"]);
                $jour = htmlspecialchars($_POST["jour"]);
                $mois = htmlspecialchars($_POST["mois"]);
                $date_limite = "$jour $mois";
                $personnalite = htmlspecialchars($_POST["personnalite"]);
                $langue = htmlspecialchars($_POST["langue"]);
                $lieu = htmlspecialchars($_POST["lieu"]);                
                $oFileInfos = $_FILES["image"]; 
                $mission = htmlspecialchars($_POST["mission"]);

                new_post($id, $texte, $experience, $competence, $formation, $date_limite, $personnalite, $langue, $lieu, $oFileInfos, $mission );
            }
        }

        elseif($action == "modifier_mot_de_passe" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                modifier_mot_de_passe($id);
            }
        }

        elseif($action == "nouveau_mot_de_passe" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"] and isset($_POST["mettre_a_jour_mdp"])){
                $ancien_mdp = htmlspecialchars($_POST["ancien_mdp"]);
                $nouveau_mdp = htmlspecialchars($_POST["nouveau_mdp"]);
                $confirmation_mdp = htmlspecialchars($_POST["confirmation_nouveau_mdp"]);
                nouveau_mot_de_passe($id, $ancien_mdp, $nouveau_mdp, $confirmation_mdp);
            }
        }

        elseif($action == "journal" and isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            if($id == $_SESSION["id"]){
                afficher_journal($id);
            }
        }
        

    }

    elseif(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        connecter($id);
    }

    else{
        
        page_1();
    }

}
catch(Exception $e){
    echo "Erreur :".$e->getMessage();
}