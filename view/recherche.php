<?php

if(isset($_SESSION["id"]) and isset($_SESSION["nom"]) and isset($_SESSION["prenom"]) and isset($_SESSION["mail"])){
$username = $_SESSION["username"];
$nom = $_SESSION["nom"];
$prenom = $_SESSION["prenom"];
$mail = $_SESSION["mail"];
$id = $_SESSION["id"];

function enleve_le_point_virgule($texte,$vir){
	$tab = array();
	$pos = strpos($texte , $vir);
	$i = 0;
	while ($pos != ''){
		$chaine_sans_virgule = substr($texte , 0, $pos);
		$texte = substr($texte , $pos+1);
		$tab[$i] = $chaine_sans_virgule;
		$pos = strpos($texte , $vir);
		$i++;
	}
	$tab[$i] = $texte;
	return $tab;
}

function french_it($mois){
	$months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
	return $months[$mois-1];
}

?>
<!--<div class="se-pre-con"></div>-->
<?php
	require("view/header.php")
?>	
<!-- topbar -->
		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
								
                                    <?php
                                        require("view/shortcuts_gauche_acceuil.php");
                                    ?>
                                    
                                    <!-- Shortcuts -->
                                    <?php
                                        require("view/recent_activity.php");
                                    ?>	
                                    <!-- recent activites -->
                                        
                                    <?php
                                        require("view/who_s_following.php");
                                    ?>
                                    <!-- who's following -->
								</aside>
                            </div><!-- sidebar -->
                            <div class="col-lg-6">
                                
                            
                            <div class="central-meta timeline-info">
                                <ul>
                                    <li>
                                        <a class="active" href="#" title="" data-ripple=""> <i class="mtrl-select"></i> Personnes</a>
                                        <a class="" href="#" title="" data-ripple=""></a>
                                        
                                        <a class="" href="#" title="" data-ripple=""> <i class="mtrl-select"></i> Pages</a>
                                        <a class="" href="#" title="" data-ripple=""></a>
                                    
                                        <a class="" href="#" title="" data-ripple=""><i class="mtrl-select"></i>Publications</a>
                                        <a class="" href="#" title="" data-ripple=""></a>
                                        
                                        <a class="" href="#" title="" data-ripple=""><i class="mtrl-select"></i>Avancées</a>
                                    
                                    </li>
                                </ul>
                            </div>

                                
                                
                            <!--Résultats personnes ici-->
                            <div class="central-meta timeline-info" style="display:block">
                                <ul id="people-list" class="friendz-list">
                                    <?php
                                    while($resultat_profil = $rechercher_profil->fetch()){
                                        if(!empty($resultat_profil["id"])){
                                                if(isset($resultat_profil["photo_de_profil"])){
                                                $pdp = $resultat_profil["photo_de_profil"];
                                                $src_pdp = "public/images/picture/pdp/$pdp";
                                                }
                                                else{
                                                $src_pdp = "public/images/av.png";
                                                }
                                    ?>
                                    <li>
                                        <figure >
                                                <img style="height:50px !important; width:50px !important;" src="<?= $src_pdp ?>" alt="">
                                        </figure>
                                        <span class="friendz-meta" style="margin-left:9%; margin-top:-12%;" >
                                                <a href="#" Onclick = "window.location='index.php?action=affichage_profil&amp;username=<?= $username ?>'" ><?= $resultat_profil["nom"].' '.$resultat_profil["prenom"] ?></a>
                                                <i><a href="#" class="__cf_email__" ><?= $resultat_profil["poste"] ?></a></i>
                                        </span>
                                        
                                    </li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                            <!--Résultats pages ici-->
                            <div class="central-meta timeline-info" style="display:none">
                            </div>

                            <!--Résultats publications  ici-->
                            <div class="central-meta timeline-info" style="display:none">
                            </div>

                            <!--Résultats avancées ici-->
                            <div class="central-meta timeline-info" style="display:none">
                            </div>
                                 
                                
                            <!-- Publication acceuil iciiiiiiiiiiiiiiii -->
                            
                            <!-- Publication acceuil iciiiiiiiiiiiiiiii -->

                        </div><!-- centerl meta -->
                    
                    
                        <!-- Your page et freinds à droite acceuil-->
                        <?php
                            require("view/your_page_acceuil_droite.php");
                        ?>
                                
                                <!-- sidebar -->
                        </div>	
                    </div>
                </div>
            </div>
        </div>	
	</section>


	<!-- footer -->
<!-- side panel -->		
	
	
<script src="public/js/main.min.js"></script>
<?php
	require("view/js.php");
?>

	

</body>	


</html>

<?php
}
?>