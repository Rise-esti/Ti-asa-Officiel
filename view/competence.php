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
							
						<?php								
							require("view/recent_activity_modify_info.php");
							
						?>
						<!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Compétences</h5>
										<i OnClick="window.location='index.php?action=ajouter_nouvelle_competence&amp;id=<?= $id ?>'"  style="font-size: 50px !important; display: inline !important;margin-left:50%!important;cursor:pointer !important;" class="fa fa-plus addeo"> </i>	
										
										<?php
											for($i=0; $i<$nbr_competence; $i++){
												$id_competence = $tab[$i]["id_competence"];
										?>
										<form method="post" class="formcomp">
											<div class="form-group">	
												<i class="fa fa-building forc" style="display: inline"> <h6 style="display: inline"><?= $tab[$i]["competence"] ?></h6> </i>
												<div class="form-radio"><br>
													<div class="radio" >
													        <label >
														        <input type="radio" checked="checked" name="radio"><i class="check-box"></i>Recommander
													        </label> 
													</div>
											    </div>
												<div class="form-group">
													<i class="mtrl-select"></i>
													<h6 class="forv" style="display: inline;color:#088dcd">Explication :</h6>
													<p class="para" style="display: block"><?= $tab[$i]["explication"] ?> </p>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline;color:#088dcd">Niveau :</h6> 
													<h6 style="display: inline"><?= $tab[$i]["niveau_competence"] ?></h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="submit-btns">
													<button class="supp" type="button" style="color:#ff4b5a" onclick="x = confirm('Etes-vous sûr de vouloir supprimer cette compétence ?');if (x){window.location='index.php?action=supprimer_competence&id=<?= $id ?>&id_competence=<?= $id_competence ?>'};"class="mtr-btn"><span>Supprimer</span></button>
													<button  class="mod" Onclick="window.location='index.php?action=modifier_competence_existant&amp;id=<?= $id ?>&amp;id_competence=<?= $id_competence ?>'"   type="button" class="mtr-btn" ><span>Modifier</span></button>
												</div>
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