<?php
	require("view/header.php")
?>
<!-- topbar -->

<?php
	$active_infogen = "active";
	require("view/couverture_page.php");

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
												<h6 class="forv" style="display: inline; color:#610f91 !important;" > <i class="fa fa-smile-o inf"></i> Description:</h6> 
												<p class="para" style="display: inline"> </p>
											
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#610f91 !important;"> <i class="fa fa-user inf"></i> Nom de la page</h6> 
												<h6 style="display: inline"></h6>
											
											</div>
											<div class="form-group" style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#610f91 !important;"> <i class="fa fa-globe inf"></i> Adresse:</h6> 
												<h6 style="display: inline"></h6>
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#222 !important;"> <i class="fa fa-envelope-o inf"></i> Email:</h6> 
												<h6 style="display: inline"></h6>
								
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#610f91 !important;"> <i class="fa fa-phone inf"></i> Téléphone:</h6> 
												<h6 style="display: inline"></h6>
									
											</div>
											<div class="submit-btns">
											
												<button  Onclick="window.location='index.php?action=modifier_profil&amp;id=<?= $id ?>'" style="color:#610f91 !important; border-radius:20px !important;" type="button" class="mtr-btn bouton" ><span>Modifier</span></button>
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