<?php
	require("view/header.php")
?>
<!-- topbar -->

<?php
	$active_plus = "active";
	require("view/couverture.php");
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
										<h5 class="f-title"><i class="ti-info-alt"></i> Expériences</h5>
										<i OnClick="window.location='index.php?action=ajouter_experience&amp;id=<?=$id?>'"  style="color: #088dcd !important; font-size: 50px !important; display: inline !important;margin-left:60%!important;cursor:pointer !important;" class="fa fa-plus addeo"> </i>	

										<?php
											for($i=0; $i<$nbr_experience; $i++){
												$id_experience = $tab[$i]["id_experience"];
										?>
										<form method="post">
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Année :</h6> 
												<h6 style="display: inline"><?= $tab[$i]["date_experience"] ?></h6>
												<i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Entreprise/Lieu de travail :</h6> 
												<h6 style="display: inline"><?= $tab[$i]["entreprise_lieu"] ?></h6>
												<i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Poste :</h6> 
												<h6 style="display: inline"><?= $tab[$i]["poste_experience"] ?></h6>
												<i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Déscription :</h6> 
												<h6 style="display: inline"><?= $tab[$i]["activite"] ?></h6>
												<i class="mtrl-select"></i>
											</div>
											
											<div class="submit-btns">
												<button class="supp" type="button" style="color:#ff4b5a; " onclick="x = confirm('Etes-vous sûr de vouloir supprimer cette expérience ?');if (x){window.location='index.php?action=supprimer_experience&id=<?= $id ?>&id_experience=<?= $id_experience ?>'};"class="mtr-btn"><span>Supprimer</span></button>
												<button  class="mod" Onclick="window.location='index.php?action=modifier_experience_existe&amp;id=<?= $id ?>&amp;id_experience=<?= $id_experience?>'"   type="button" class="mtr-btn" ><span>Modifier</span></button>
											</div>
										</form>	
										<?php
											}
										?>
									</div>
								</div>	
							</div><!-- centerl meta -->
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