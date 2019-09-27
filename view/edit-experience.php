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

						<?php
							require("view/recent_activity_modify_info.php");
						?><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Editer les expériences</h5> 
										<i OnClick="window.location='index.php?action=ajouter_experience&amp;id=<?=$id?>'"  style="color: #1da1f2 !important; font-size: 50px !important; display: inline !important;margin-left:80% !important; ;cursor:pointer !important;" class="fa fa-plus addeo"> </i>	

										<form method="post" class="formcomp" action="index.php?action=mettre_jour_experience&amp;id=<?= $id ?>&amp;id_experience=<?= $id_experience ?>">
											<div class="form-group">	
											  <input type="text" id="input" name="entreprise_lieu" value="<?= $experience_existe_li["entreprise_lieu"] ?>"/>
											  <label class="control-label" for="input">Entreprise/Lieu de travail</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group half">	
											  <input type="text" name="date_experience" value="<?= $experience_existe_li["date_experience"] ?>"/>
											  <label class="control-label" for="input">Année</label><i class="mtrl-select"></i>
											</div>
																						
											<div class="form-group">	
											  <input type="text" name="poste_experience" value="<?= $experience_existe_li["poste_experience"] ?>"/>
											  <label class="control-label" for="input">Poste</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<textarea rows="4" id="textarea"  name="activite" ><?= $experience_existe_li["activite"] ?></textarea>
												<label class="control-label" for="textarea"> Déscription</label><i class="mtrl-select"></i>
                                            </div>
											<div class="submit-btns">
												<button type="submit" name="mettre_jour_exp" class="mtr-btn "><span>Mettre à jour</span></button>
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