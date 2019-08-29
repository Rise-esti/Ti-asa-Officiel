<?php
require_once("Connect_bdd.php");

class Query_bdd extends Connect_bdd{
    public function usernames_mail(){
        $bdd = $this->dbconnect();
        $all_usernames_mail = $bdd->query("SELECT username, mail FROM PERSONNE");
        return $all_usernames_mail;
    }

    public function verifier_message_nouveau_et_non_lu($id){
        $bdd = $this->dbconnect();
        $verifier_nouveau_message = $bdd->prepare("SELECT COUNT(mes) nbr_mess FROM CHAT WHERE vu='0' and cliques_messages='0' and id_destinataire = ? ");
        $verifier_nouveau_message->execute(array($id));
        $verifier_message = $verifier_nouveau_message->fetch();
        $nbr_nouveau_message = $verifier_message["nbr_mess"];
        $verifier_message_non_lu = $bdd->prepare("SELECT COUNT(mes) nbr_mess_non_lu FROM CHAT WHERE vu='0' and id_destinataire = ?") ;
        $verifier_message_non_lu->execute(array($id));
        $message_non_lu = $verifier_message_non_lu->fetch();
        $nbr_message_non_lu = $message_non_lu["nbr_mess_non_lu"];

        $verifier_message_nouveau_et_non_lu = array();
        $verifier_message_nouveau_et_non_lu = [$nbr_nouveau_message, $nbr_message_non_lu];
        return $verifier_message_nouveau_et_non_lu;
    }

    public function requete_new_message($id){
        $bdd = $this->dbconnect();
        $id_dernier_mesage = $bdd->query("SELECT id_expediteur, p.nom nom, p.prenom prenom, p.photo_de_profil pdp, max(id_message) id_mess_farany FROM CHAT INNER JOIN PERSONNE p ON p.id= CHAT.id_expediteur WHERE id_destinataire = '$id' GROUP BY id_expediteur ORDER BY id_mess_farany DESC ");
        $i = 0;
        $tab_mess_farany = array();
        while($info_message = $id_dernier_mesage->fetch()){
            $id_exped = $info_message["id_expediteur"];
            $new_message = $bdd->query("SELECT id_message, mes FROM CHAT WHERE (id_destinataire='$id' and id_expediteur='$id_exped') or (id_destinataire='$id_exped' and id_expediteur='$id') ORDER BY id_message DESC LIMIT 1");
            $message = $new_message->fetch();
            $tab_mess_farany[$i]['mes'] = $message['mes'];
            $tab_mess_farany[$i]['id_message'] = $message['id_message'];
            $tab_mess_farany[$i]['expediteur'] = $id_exped;
            $tab_mess_farany[$i]['nom'] = $info_message['nom'];
            $tab_mess_farany[$i]['prenom'] = $info_message['prenom'];
            $tab_mess_farany[$i]['pdp'] = $info_message['pdp'];
            
            $i++;
        }
        
        return $tab_mess_farany;
    }

    public function all_messages($id){
        $bdd = $this->dbconnect();
        $all_messages = $bdd->query("SELECT C.id_expediteur expediteur, C.mes mes, P.nom nom, P.prenom prenom, P.photo_de_profil pdp FROM CHAT C INNER JOIN PERSONNE P ON P.id=C.id_expediteur WHERE C.id_destinataire='$id'");
        return $all_messages;
    }

    public function requete_discussion($id, $id_exp){
        $bdd = $this->dbconnect();
        $requete_discussion = $bdd->prepare("SELECT C.id_message id_message, C.id_expediteur expediteur, C.mes mes, P.nom nom, P.prenom prenom, P.photo_de_profil pdp FROM CHAT C INNER JOIN PERSONNE P ON P.id=C.id_destinataire WHERE (C.id_destinataire=? and C.id_expediteur=?) or (C.id_expediteur=? and C.id_destinataire=?) ORDER BY C.id_message");
        $requete_discussion->execute(array($id, $id_exp, $id, $id_exp));
        $marquer_vu_message = $bdd->prepare("UPDATE CHAT SET vu='1' WHERE id_expediteur=? and id_destinataire=?");
        $marquer_vu_message->execute(array($id_exp, $id));
        return $requete_discussion;
    }

    public function enregistrer_message($id, $id_dest, $nouveau_message){
        $bdd = $this->dbconnect();
        $enregistrer_message = $bdd->prepare("INSERT INTO CHAT(id_expediteur, id_destinataire, mes) VALUES(?,?,?)");
        $enregistrer_message->execute(array($id, $id_dest, $nouveau_message));
        return $enregistrer_message;
    }

    public function inscrire($username, $nom, $prenom, $mail, $passwd_hash){
        $bdd = $this->dbconnect();
        $insertion_inscrire = $bdd->prepare("INSERT INTO PERSONNE(username, prenom, nom, mail, mot_de_passe) VALUES(?, ?, ?, ?, ?)");
        $insertion_inscrire->execute(array($username, $prenom, $nom, $mail, $passwd_hash));
        return $insertion_inscrire;
    }

    public function se_conneter_user($mail){
        $bdd = $this->dbconnect();
        $info_user = $bdd->prepare("SELECT * FROM PERSONNE WHERE mail = ?");
        $info_user->execute(array($mail));
        return $info_user;
    }

    public function information_profil($id){
        $bdd = $this->dbconnect();
        $profil = $bdd->prepare("SELECT id, username, nom, prenom, mail, numero,
        adresse, ville, DAY(date_de_naissance) jour,YEAR(date_de_naissance) annee, DATE_FORMAT(date_de_naissance, '%b') mois, MONTH(date_de_naissance) mois_chiffre, sexe, biographie, photo_de_profil, photo_de_couverture, poste, entreprise FROM PERSONNE WHERE id = ? ");
        $profil->execute(array($id));
        return $profil;
    }

    public function verify_existance_discussion($id, $id_exp){
        $bdd = $this->dbconnect();
        $verify_existance_discussion = $bdd->prepare("SELECT id_message FROM CHAT WHERE id_destinataire=? and id_expediteur=? or id_expediteur=? and id_destinataire=? ");
        $verify_existance_discussion->execute(array($id, $id_exp, $id, $id_exp));
        return $verify_existance_discussion;
    }

    public function insertion_information_profil($id, $nom, $prenom, $username, $mail, $telephone, $date_naissance,
    $sexe, $adresse, $province, $biographie, $poste, $entreprise){
        $bdd = $this->dbconnect();
        $insertion_info_profil = $bdd->prepare("UPDATE PERSONNE SET username=?, nom=?, prenom=?, mail=?, numero=?,
        adresse=?, ville=?, date_de_naissance=?, sexe=?, biographie=?, poste=?, entreprise=? WHERE id=?");
        $insertion_info_profil->execute(array($username, $nom, $prenom, $mail, $telephone, $adresse, $province, $date_naissance, $sexe, $biographie, $poste, $entreprise, $id));
        return $insertion_info_profil;
    }

    public function insertion_fichier_pdp($id, $pdp_name, $action){
        $bdd = $this->dbconnect();
        if($action == "modifier_pdp"){
            $insertion_fichier_pdp = $bdd->prepare("UPDATE PERSONNE SET photo_de_profil = ? WHERE id = ?");
        }
        else{
            $insertion_fichier_pdp = $bdd->prepare("UPDATE PERSONNE SET photo_de_couverture = ? WHERE id = ?");
        }
        
        $insertion_fichier_pdp->execute(array($pdp_name, $id));
        return $insertion_fichier_pdp;
    }

    public function verify_existance_formation($id){
        $bdd = $this->dbconnect();
        $verifier_existance_formation = $bdd->prepare("SELECT * FROM FORMATION WHERE id = ?");
        $verifier_existance_formation->execute(array($id));
        return $verifier_existance_formation;
    }

    public function insertion_formation($id, $ecole, $debut_mois_formation, $debut_annee_formation, 
    $fin_mois_formation, $fin_annee_formation, $filiere, $niveau, $obtention){
        $bdd = $this->dbconnect();
        $insertion_formations = $bdd->prepare("INSERT INTO FORMATION(debut_mois_formation, debut_annee_formation,
        filiere, obtention, id, ecole, fin_mois_formation, fin_annee_formation, niveau) VALUES(?,?,?,?,?,?,?,?,?)");
        $insertion_formations->execute(array($debut_mois_formation, $debut_annee_formation, $filiere, $obtention,
        $id, $ecole, $fin_mois_formation, $fin_annee_formation, $niveau));
        return $insertion_formations;
    }

    public function mis_a_jours_formation($id, $id_formation, $ecole, $debut_mois_formation, $debut_annee_formation, 
    $fin_mois_formation, $fin_annee_formation, $filiere, $niveau, $obtention){
        $bdd = $this->dbconnect();
        $mettre_jour_formation = $bdd->prepare("UPDATE FORMATION SET debut_mois_formation=?, debut_annee_formation=?, 
                                filiere=?, obtention=?, ecole=?, fin_mois_formation=?, fin_annee_formation=?, niveau=? 
                                WHERE id_formation=? and id=? ");
        $mettre_jour_formation->execute(array($debut_mois_formation, $debut_annee_formation, $filiere,
                                $obtention, $ecole, $fin_mois_formation, $fin_annee_formation, $niveau, $id_formation, $id));
        return $mettre_jour_formation;
    }

    public function information_modifier($id, $id_formation){
        $bdd = $this->dbconnect();
        $information_a_modifier = $bdd->prepare("SELECT * FROM FORMATION WHERE id_formation = ? and id = ?");
        $information_a_modifier->execute(array($id_formation, $id));
        return $information_a_modifier;
    }

    public function supprimer_formation($id, $id_formation){
        $bdd = $this->dbconnect();
        $supprimer_formation = $bdd->prepare("DELETE FROM FORMATION WHERE id_formation = ? and id = ? ");
        $supprimer_formation->execute(array($id_formation, $id));
        return $supprimer_formation;
    }

    public function requete_competence_existant($id){
        $bdd = $this->dbconnect();
        $requete_competence = $bdd->prepare("SELECT * FROM COMPETENCE WHERE id = ?");
        $requete_competence->execute(array($id));
        return $requete_competence;
    }

    public function insertion_competence($id, $competence, $explication, $niveau){
        $bdd = $this->dbconnect();
        $insert_competence = $bdd->prepare("INSERT INTO COMPETENCE(competence, explication, niveau_competence, id)
                                            VALUE(?,?,?,?)");
        $insert_competence->execute(array($competence, $explication, $niveau, $id));
        return $insert_competence;
    }

    public function select_competence($id, $id_competence){
        $bdd = $this->dbconnect();
        $select_competence = $bdd->prepare("SELECT * FROM COMPETENCE WHERE id_competence = ? and id = ?");
        $select_competence->execute(array($id_competence, $id));
        return $select_competence;
    }

    public function mettre_jour_competence_existant($id, $id_competence, $competence, $explication, $niveau){
        $bdd = $this->dbconnect();
        if(!isset($explication)){
            $explication = NULL;
        }
        if(!isset($niveau)){
            $niveau = NULL;
        }
        $mettre_jour_competence = $bdd->prepare("UPDATE COMPETENCE SET competence=?, explication=?, 
        niveau_competence=? WHERE id_competence=? and id=?");
        $mettre_jour_competence->execute(array($competence, $explication, $niveau, $id_competence, $id));
        return $mettre_jour_competence;
    }

    public function suppression_competence($id, $id_competence){
        $bdd = $this->dbconnect();
        $suppression_competence = $bdd->prepare("DELETE FROM COMPETENCE WHERE id_competence=? and id=?");
        $suppression_competence->execute(array($id_competence, $id));
        return $suppression_competence;
    }

    public function experience_existant($id){
        $bdd = $this->dbconnect();
        $requete_experience = $bdd->prepare("SELECT * FROM EXPERIENCE WHERE id = ? ");
        $requete_experience->execute(array($id));
        return $requete_experience;
    }

    public function insert_nouvelle_experience($id, $entreprise_lieu, $activite_experience,  $annee, $poste){
        $bdd = $this->dbconnect();
        $insertion_nouvelle_experience = $bdd->prepare("INSERT INTO EXPERIENCE(date_experience,  activite, 
        entreprise_lieu, poste_experience, id) VALUES(?,?,?,?,?)");
        $insertion_nouvelle_experience->execute(array($annee,  $activite_experience, 
        $entreprise_lieu, $poste, $id));
        return $insertion_nouvelle_experience;
    }

    public function requete_experience_existe($id, $id_experience){
        $bdd = $this->dbconnect();
        $experience_existe = $bdd->prepare("SELECT * FROM EXPERIENCE WHERE id_experience = ? and id = ?");
        $experience_existe->execute(array($id_experience, $id));
        return $experience_existe;
    }

    public function mettre_jour_experience($id, $id_experience, $entreprise_lieu, $date_experience, $poste_experience, $activite){
        $bdd = $this->dbconnect();
        $mettre_jour_experience = $bdd->prepare("UPDATE EXPERIENCE SET entreprise_lieu=?, date_experience=?, poste_experience=?, activite=? 
        WHERE id_experience=? and id=?");
        $mettre_jour_experience->execute(array($entreprise_lieu, $date_experience, $poste_experience, $activite, $id_experience, $id));
        return $mettre_jour_experience;
    }

    public function supprimer_experience_existe($id, $id_experience){
        $bdd = $this->dbconnect();
        $suppression_experience = $bdd->prepare("DELETE FROM EXPERIENCE WHERE id=? and id_experience=?");
        $suppression_experience->execute(array($id, $id_experience));
        return $suppression_experience;
    }

    public function centre_interet_existant($id){
        $bdd = $this->dbconnect();
        $requete_centre_interet = $bdd->prepare("SELECT * FROM CENTRE_D_INTERET WHERE id=?");
        $requete_centre_interet->execute(array($id));
        return $requete_centre_interet;
    }

    public function insertion_centre_interet($id, $centre_interet, $description){
        $bdd = $this->dbconnect();
        $insertion_centre_interet = $bdd->prepare("INSERT INTO CENTRE_D_INTERET(description_interet, centre_d_interet, id) VALUES(?,?,?)");
        $insertion_centre_interet->execute(array($description, $centre_interet, $id));
        return $insertion_centre_interet;
    }

    public function centre_interet_existe($id, $id_centre_interet){
        $bdd = $this->dbconnect();
        $centre_interet_existe = $bdd->prepare("SELECT * FROM CENTRE_D_INTERET WHERE id=? and id_centre_interet=?");
        $centre_interet_existe->execute(array($id, $id_centre_interet ));
        return $centre_interet_existe;
    }

    public function mettre_jours_centre_interet($id, $id_centre_interet, $centre_interet, $description_interet){
        $bdd = $this->dbconnect();
        $mettre_jours = $bdd->prepare("UPDATE CENTRE_D_INTERET SET centre_d_interet=? , description_interet=? WHERE id_centre_interet=? and id=?");
        $mettre_jours->execute(array($centre_interet, $description_interet, $id_centre_interet, $id));
        return $mettre_jours;
    }

    public function supprimer_centre_interet($id, $id_centre_interet){
        $bdd = $this->dbconnect();
        $supprimer_centre_interet = $bdd->prepare("DELETE FROM CENTRE_D_INTERET WHERE id=? and id_centre_interet=?");
        $supprimer_centre_interet->execute(array($id, $id_centre_interet));
        return $supprimer_centre_interet;
    }

    public function afficher_autre_profil($id){
        $bdd = $this->dbconnect();
        $afficher_autre_profil = $bdd->prepare("SELECT * FROM PERSONNE WHERE id <> ?");
        $afficher_autre_profil->execute(array($id));
        return $afficher_autre_profil;
    }

    public function select_profil($username){
        $bdd = $this->dbconnect();
        $select_profil = $bdd->prepare("SELECT id, username, nom, prenom, mail, numero,
        adresse, ville, DAY(date_de_naissance) jour,YEAR(date_de_naissance) annee, DATE_FORMAT(date_de_naissance, '%b') mois, MONTH(date_de_naissance) mois_chiffre, sexe, biographie, photo_de_profil, photo_de_couverture, poste, entreprise FROM PERSONNE WHERE username= ?");
        $select_profil->execute(array($username));
        return $select_profil;
    }

    public function insertion_fichier_post($id, $texte, $experience, $competence, $formation, 
    $date_limite, $personnalite, $langue, $lieu, $image_name, $mission ){
        $bdd = $this->dbconnect();
        $verify_insertion_post = $bdd->prepare("INSERT INTO PUBLICATION(id, date_publication, texte, experience, formation,competence, personnalite, langue, lieu, date_limite, nom_image, mission) VALUES(?,NOW(), ?,?,?,?,?,?,?,?,?,?)");
        $verify_insertion_post->execute(array($id,$texte, $experience, $formation, $competence, $personnalite, $langue, $lieu, $date_limite, $image_name, $mission));
        return $verify_insertion_post;
    }

    public function requete_publication($id){
        $bdd = $this->dbconnect();        
        $publication = $bdd->prepare("SELECT p.*, per.nom nom, per.prenom prenom, per.photo_de_profil pdp, per.username username, DAY(p.date_publication) as jour, MONTH(p.date_publication) as mois , DATE_FORMAT(p.date_publication, '%Y à %Hh%imin') as date_publication from PUBLICATION p NATURAL JOIN PERSONNE per where p.valable = '1' ORDER BY id_publication DESC ");
        $publication->execute(array($id));
        return $publication;
    }

    public function requete_my_publication($id){
        $bdd = $this->dbconnect();        
        $publication = $bdd->prepare("SELECT p.*, per.nom nom, per.prenom prenom, per.photo_de_profil pdp, per.username username, DAY(p.date_publication) as jour, MONTH(p.date_publication) as mois , DATE_FORMAT(p.date_publication, '%Y à %Hh%imin') as date_publication from PUBLICATION p NATURAL JOIN PERSONNE per where p.valable = '1' and per.id = ? ORDER BY id_publication DESC ");
        $publication->execute(array($id));
        return $publication;
    }

    public function mdp_actuelle($id){
        $bdd = $this->dbconnect();
        $mdp_actuelle = $bdd->prepare("SELECT mot_de_passe FROM PERSONNE WHERE id = ?");
        $mdp_actuelle->execute(array($id));
        return $mdp_actuelle;
    }

    public function mettre_jour_mdp($passwd_hash, $id){
        $bdd = $this->dbconnect();
        $mettre_jour_mdp = $bdd->prepare("UPDATE PERSONNE SET mot_de_passe = ? WHERE id = ?");
        $mettre_jour_mdp->execute(array($passwd_hash, $id));
        return $mettre_jour_mdp;
    }

    public function requete_last_message_discussion($id, $id_exp, $id_last_message){
        $bdd = $this->dbconnect();
        $info_recevoir = $bdd->prepare("SELECT id_message, mes FROM CHAT WHERE id_message > ? and id_expediteur = ? and id_destinataire = ?");
        $info_recevoir->execute(array($id_last_message, $id_exp, $id));
        return $info_recevoir;
    }

    public function creation_page($nom_page, $mail_page, $telephone_page, $province_page, $adresse_page, $description_page, $id){
        $bdd = $this->dbconnect();
        $creation_page = $bdd->prepare("INSERT INTO PAGE_PAGE(nom_page, description_page, telephone, mail_page, adresse, province, id) VALUES(?,?,?,?,?,?,?)");
        $creation_page->execute(array($nom_page, $description_page, $telephone_page, $mail_page, $adresse_page, $province_page, $id));
        return $creation_page;
    }

    public function select_page($id, $nom_page){
        $bdd = $this->dbconnect();
        $select_page = $bdd->prepare("SELECT * FROM PAGE_PAGE WHERE id=? and nom_page=?");
        $select_page->execute(array($id, $nom_page));
        return $select_page;
    }
    
    public function select_page_visite($nom_page){
        $bdd = $this->dbconnect();
        $select_page = $bdd->prepare("SELECT * FROM PAGE_PAGE WHERE nom_page=?");
        $select_page->execute(array($nom_page));
        return $select_page;
    }

    public function select_mes_page($id){
        $bdd = $this->dbconnect();
        $select_mes_pages = $bdd->prepare("SELECT * FROM PAGE_PAGE WHERE id=?");
        $select_mes_pages->execute(array($id));
        return $select_mes_pages;
    }

    public function mettre_jour_page($id, $id_page, $nom_page, $mail_page, $telephone_page, $province_page, $adresse, $description){
        $bdd = $this->dbconnect();
        $mettre_jour_page = $bdd->prepare("UPDATE PAGE_PAGE SET nom_page=?, mail_page=?, telephone=?, description_page=?, adresse=?, province=? WHERE id=? and id_page=?");
        $mettre_jour_page->execute(array($nom_page, $mail_page, $telephone_page, $description, $adresse, $province_page, $id, $id_page));
        return $mettre_jour_page;
    }

    public function select_nom_page_existant(){
        $bdd = $this->dbconnect();
        $select_nom_page_existant = $bdd->query("SELECT nom_page, mail_page FROM PAGE_PAGE");
        return $select_nom_page_existant;
    }

    public function select_nom_page_existe_apart_mapage($id_page){
        $bdd = $this->dbconnect();
        $select_nom_page_existant = $bdd->query("SELECT nom_page, mail_page FROM PAGE_PAGE WHERE id_page<>'$id_page'");
        return $select_nom_page_existant;
    }

    public function select_page_id_id_page($id, $id_page){
        $bdd = $this->dbconnect();
        $select_page = $bdd->prepare("SELECT * FROM PAGE_PAGE WHERE id=? and id_page=?");
        $select_page->execute(array($id, $id_page));
        return $select_page;
    }

    public function insertion_photo_page($id, $id_page, $column, $photo_name){
        $bdd = $this->dbconnect();
        $insertion_photo_page = $bdd->prepare("UPDATE PAGE_PAGE SET $column= ? WHERE id=? and id_page=? ");
        $insertion_photo_page->execute(array($photo_name, $id, $id_page));
        return $insertion_photo_page;
    }

    public function rechercher_profil($id, $recherche){
        $bdd = $this->dbconnect();
        $recherche = $bdd->query("SELECT * FROM PERSONNE WHERE nom LIKE '%$recherche%' or prenom LIKE '%$recherche%' or username LIKE '%$recherche%' or mail LIKE '%$recherche%' or entreprise LIKE '%$recherche%'");
        return $recherche;
    }

    public function rechercher_publication($id, $recherche){
        $bdd = $this->dbconnect();
        $recherche = $bdd->query("SELECT * FROM PUBLICATION WHERE texte LIKE '%$recherche%' or mission LIKE '%$recherche%' ");
        return $recherche;
    }

    public function rechercher_page($id, $recherche){
        $bdd = $this->dbconnect();
        $recherche = $bdd->query("SELECT * FROM PAGE_PAGE WHERE nom_page LIKE '%$recherche%' or description_page LIKE '%$recherche%' or mail_page LIKE '%$recherche%' ");
        return $recherche;
    }
    
        public function insertion_fichier_post_page($id_page, $id, $texte, $experience, $competence, $formation, 
    $date_limite, $personnalite, $langue, $lieu, $image_name, $mission ){
        $bdd = $this->dbconnect();
        $page = 1;
        $verify_insertion_post = $bdd->prepare("INSERT INTO PUBLICATION(id, date_publication, texte, experience, formation,competence, personnalite, langue, lieu, date_limite, nom_image, mission, page, id_page) VALUES(?,NOW(), ?,?,?,?,?,?,?,?,?,?,?,?)");
        $verify_insertion_post->execute(array($id,$texte, $experience, $formation, $competence, $personnalite, $langue, $lieu, $date_limite, $image_name, $mission, $page, $id_page));
        return $verify_insertion_post;
    }
    
    public function requete_my_publication_page($id, $id_page){
        $bdd = $this->dbconnect();        
        $publication = $bdd->prepare("SELECT p.*, per.nom_page nom, per.pdp_page pdp, DAY(p.date_publication) as jour, MONTH(p.date_publication) as mois , DATE_FORMAT(p.date_publication, '%Y à %Hh%imin') as date_publication from PUBLICATION p NATURAL JOIN PAGE_PAGE per where p.valable = '1' and per.id = ? and p.id_page = ? ORDER BY id_publication DESC ");
        $publication->execute(array($id, $id_page));
        return $publication;
    }
    
    public function select_all_page(){
        $bdd = $this->dbconnect();
        $select_all_page = $bdd->query("SELECT * FROM PAGE_PAGE");
        return $select_all_page;
    }
    
    public function requete_publication_dans_page($id_page){
        $bdd = $this->dbconnect();        
        $publication = $bdd->prepare("SELECT p.*, per.nom_page nom, per.pdp_page pdp, DAY(p.date_publication) as jour, MONTH(p.date_publication) as mois , DATE_FORMAT(p.date_publication, '%Y à %Hh%imin') as date_publication from PUBLICATION p NATURAL JOIN PAGE_PAGE per where p.valable = '1' and p.id_page = ? ORDER BY id_publication DESC ");
        $publication->execute(array($id_page));
        return $publication;
    }

}