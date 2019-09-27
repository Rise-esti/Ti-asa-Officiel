<?php
require("view/header.php")
?>
<!-- topbar -->

<?php
$active_plus = "active";
require("view/couverture.php");
?>
<!-- top area -->

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
								<h5 class="f-title"><i class="ti-info-alt"></i> Vos formations</h5>
										<i OnClick="window.location='index.php?action=ajouter_nouvelle_formation&amp;id=<?= $id ?>'"  style="color: #1da1f2 !important; font-size: 50px !important; display: inline !important;margin-left:60%!important;cursor:pointer !important;" class="fa fa-plus addeo"> </i>	

										<?php
											for($i=0; $i<count($tab); $i++ ){

										?>
									
											<form method="post">
												<div class="form-group">
													<h6 class="forv" style="display: inline;color:#088dcd">Année :</h6> 
													<h6 style="display: inline">
														<?php
															$debut_mois = $tab[$i]["debut_mois_formation"];
															$debut_annee = $tab[$i]["debut_annee_formation"];
															
															echo "$debut_mois $debut_annee";

															$fin_mois = $tab[$i]["fin_mois_formation"];
															$fin_annee = $tab[$i]["fin_annee_formation"];
															if(isset($fin_mois) or isset($fin_annee)){
																echo " - $fin_mois $fin_annee";
															}
														?>
														</h6>
													<i class="mtrl-select"></i>
												</div>
												
												<div class="form-group">	
													<h6 class="forv" style="display: inline;color:#088dcd">Ecole/institut/autres :</h6> 
													<h6 style="display: inline"><?= $tab[$i]["ecole"] ?></h6>
													<i class="mtrl-select"></i>
												</div>
												
												<?php
													if(isset($tab[$i]["filiere"])){
												?>
												<div class="form-group">	
													<h6 class="forv" style="display: inline;color:#088dcd">Filière :</h6> 
													<h6 style="display: inline"><?= $tab[$i]["filiere"] ?></h6>
													<i class="mtrl-select"></i>
												</div>
												<?php
													}
													if(isset($tab[$i]["niveau"])){
												?>
												
												<div class="form-group">	
													<h6 class="forv" style="display: inline;color:#088dcd">Niveau :</h6> 
													<h6 style="display: inline"><?= $tab[$i]["niveau"] ?></h6>
													<i class="mtrl-select"></i>
												</div>
												<?php
													}
													if(isset($tab[$i]["obtention"])){
												?>
												<div class="form-group">	
													<h6 class="forv" style="display: inline;color:#088dcd">Certificats ou diplômes :</h6> 
													<h6 style="display: inline"><?= $tab[$i]["obtention"] ?></h6>
													<i class="mtrl-select"></i>
												</div>
												<?php
													}
													$id_formation = $tab[$i]["id_formation"];
												?>
												<div class="submit-btns" style="margin-bottom:5%;">
													<button class="supp" type="button" style="background-color:#ff4b5a" onclick="x = confirm('Etes-vous sûr de vouloir supprimer cette formation ?');if (x){window.location='index.php?action=supprimer_formation&id=<?= $id ?>&id_formation=<?= $id_formation ?>'};"class="mtr-btn"><span><i class="fa fa-remove"></i> Supprimer</span></button>
													<button class="mod" type="button" class="mtr-btn" Onclick="window.location='index.php?action=modifier_formation_profil&amp;id=<?= $id ?>&amp;id_formation=<?= $id_formation ?>'"><span><i class="fa fa-pencil"></i> Modifier</span></button>
												</div>
											</form>
										<?php
											}
										?>
		
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

	<!-- footer -->
	<!-- side panel -->		
	
<?php
	require("view/js.php");
?>

</body>	

</html>