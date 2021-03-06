<?php
	require("view/header.php")
?>
<!-- topbar -->

<?php
	$active_infogen = "active";
	require("view/couverture.php");

	if(isset($select_profil_li["username"])){
		$profil_li["username"] = $select_profil_li["username"];
		$profil_li["biographie"] = $select_profil_li["biographie"];
		$profil_li["nom"] = $select_profil_li["nom"];
		$profil_li["prenom"] = $select_profil_li["prenom"];
		$profil_li["poste"] = $select_profil_li["poste"];
		$profil_li["jour"] = $select_profil_li["jour"];
		$profil_li["mois"] = $select_profil_li["mois"];
		$profil_li["annee"] = $select_profil_li["annee"];
		$profil_li["adresse"] = $select_profil_li["adresse"];
		$profil_li["ville"] = $select_profil_li["ville"];
		$profil_li["mail"] = $select_profil_li["mail"];
		$profil_li["numero"] = $select_profil_li["numero"];
		$profil_li["entreprise"] = $select_profil_li["entreprise"];
	}
?><!-- top area -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">

							<!-- A gauche recent activity et modifier info -->
							<?php
								require("view/recent_activity_modify_info.php");
							?>
						<!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Informations générales</h5>

										<form method="post" class="formcomp">
											<div class="form-group">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important;font-size:15px !important" > <i class="fa fa-smile-o inf"></i> <u>Biographie:</u></h6>
												<p class="para" style="display: inline"><?= $profil_li["biographie"] ?> </p>
											
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important; font-size:15px !important;"> <i class="fa fa-user inf"></i> <u>Nom d'utilisateur:</u></h6>
												<h6 style="display: inline"><?= $profil_li["username"] ?></h6>
											
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important; font-size:15px !important"> <i class="fa fa-user inf"></i> <u>Nom:</u></h6> 
												<h6 style="display: inline"><?= $profil_li["nom"] ?></h6>
									
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important; font-size:15px !important"> <i class="fa fa-user inf"></i> <u>Prénoms:</u></h6> 
												<h6 style="display: inline"><?= $profil_li["prenom"] ?></h6>
										
											</div>
											<div class="form-group"  style="margin-top: 2% !important; font-size:15px !important">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important;font-size:15px !important"> <i class="fa fa-calendar inf"></i> <u>Date de naissance:</u></h6> 
												<h6 style="display: inline">
												<?php
													$jour = $profil_li["jour"];
													$mois = $profil_li["mois"];
													$annee = $profil_li["annee"];
                                                    if(!empty($jour) and !empty($mois) and !empty($annee) ){
												 	echo "$jour-$mois-$annee"; 
                                                    }
                                                ?>
												 </h6>
										
											</div>
											<div class="form-group" style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important; font-size:15px !important"> <i class="fa fa-globe inf"></i> <u>Adresse:</u></h6> 
												<h6 style="display: inline"><?= $profil_li["adresse"] ?></h6>
										
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important; font-size:15px !important"> <i class="fa fa-map-marker inf"></i> <u>Ville:</u></h6> 
												<h6 style="display: inline"><?= $profil_li["ville"] ?></h6>
										
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important;font-size:15px !important"> <i class="fa fa-envelope-o inf"></i> <u>Email:</u></h6> 
												<h6 style="display: inline"><?= $profil_li["mail"] ?></h6>
								
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important;font-size:15px !important"> <i class="fa fa-phone inf"></i> <u>Téléphone:</u></h6> 
												<h6 style="display: inline"><?= $profil_li["numero"] ?></h6>
									
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important;font-size:15px !important"> <i class="fa fa-briefcase inf"></i> <u>Poste:</u></h6> 
												<h6 style="display: inline"><?= $profil_li["poste"] ?></h6>
											
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#1da1f2 !important;font-size:15px !important"> <i class="fa fa-building inf"></i> <u>Entreprise/Ecole:</u></h6> 
												<h6 style="display: inline"><?= $profil_li["entreprise"] ?></h6>
										
											</div>
											<div class="submit-btns">
											<?php
												if(!isset($select_profil_li["username"])){
											?>
												<button  Onclick="window.location='index.php?action=modifier_profil&amp;id=<?= $id ?>'"  type="button" class="mtr-btn" style="background-color:#2ebc4f !important;"><span> <i class="fa fa-pencil"></i> Modifier</span></button>
											<?php
												}
											?>
											</div>
										</form>
									</div>
								</div>	
							</div><!-- centerl meta -->

							<!-- A droite : your page et who's following -->
							<?php
								require("view/your_page_who_s_following.php");
							?>
							<!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	

<!-- side panel -->		
	
<?php
	require("view/js.php");
?>

</body>	

</html>