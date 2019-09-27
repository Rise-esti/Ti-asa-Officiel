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
										<h5 class="f-title"><i class="ti-info-alt"></i> Vos centres d'intérêts</h5>
										<i OnClick="window.location='index.php?action=ajouter_nouvelle_centre_interet&amp;id=<?=$id?>'"  style="font-size: 50px !important; display: inline !important;margin-left:40%!important;cursor:pointer !important;" class="fa fa-plus addeo"> </i>
										<?php
											for($i=0; $i<$nbr_centre_interet; $i++){
												$id_centre_interet = $tab[$i]["id_centre_interet"];
											
										?>
										<form method="post" class="formcomp">
											<div class="form-group">	
												<i class="fa fa-heart forc" style="display: inline; color:#1da1f2 !important;"> <h6 style="display: inline; color:#1da1f2;"><?= $tab[$i]["centre_d_interet"] ?></h6> </i>
												<i class="mtrl-select"></i>
												<?php
													$description = $tab[$i]["description_interet"];
													if(isset($description)){
												?>
												<p class="para" style="display: block"><?= $tab[$i]["description_interet"] ?></p>
												<?php
													}
												?>
												<div class="submit-btns">
													<button class="supp" type="button" style="background-color:#ff4b5a;  " onclick="x = confirm('Etes-vous sûr de vouloir supprimer cette expérience ?');if (x){window.location='index.php?action=supprimer_centre_interet&id=<?= $id ?>&id_centre_interet=<?= $id_centre_interet ?>'};"class="mtr-btn"><span><i class="fa fa-remove"></i> Supprimer</span></button>
													<button  class="mod" Onclick="window.location='index.php?action=modifier_centre_interet_existe&amp;id=<?= $id ?>&amp;id_centre_interet=<?= $id_centre_interet ?>'"   type="button" class="mtr-btn" style="background-color:#2ebc4f;"><span><i class="fa fa-pencil"></i> Modifier</span></button>
												</div>
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

<!-- side panel -->		
	
<?php
	require("view/js.php");
?>
</body>	

</html>