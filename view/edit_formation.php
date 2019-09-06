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
										<h5 class="f-title"><i class="ti-info-alt"></i> Editer les formations</h5>  <i OnClick="window.location='index.php?action=ajouter_nouvelle_formation&amp;id=<?= $id ?>'"  style="color: #610f91 !important; font-size: 50px !important; display: inline !important;margin-left:25%!important;cursor:pointer !important;" class="fa fa-plus addeo"> </i>

										<form method="post" class="formcomp" id="cacher" action="index.php?action=mettre_jour_formation&amp;id=<?= $id ?>&amp;id_formation=<?= $id_formation ?>">
											<div class="form-group">	
											  <input type="text" id="input" required="required" value=<?= $information_a_modifier_li['ecole'] ?> name="ecole"/>
											  <label class="control-label" for="input" >Ecole/institut/autres</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Depuis</h6> 
											</div>
											<div class="form-group half" >
													<select name="debut_mois_formation" >
														<option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>
													
																<option value="Janvier">Janvier</option>
																<option value="Fevrier">Février</option>
																<option value="Mars">Mars</option>
																<option value="Avril">Avril</option>
																<option value="Mai">Mai</option>
																<option value="Juin">Juin</option>
																<option value="Juillet">Juillet</option>
																<option value="Aôut">Aôut</option>
																<option value="Septembre">Septembre</option>
																<option value="Octobre">Octobre</option>
																<option value="Novembre">Novembre</option>
																<option value="Décembre">Décembre</option>
															
													</select>
												</div>
												<div class="form-group half" >
													<select name="debut_annee_formation" >
														<option><?= $information_a_modifier_li['debut_annee_formation'] ?></option>
														<?php
														for($i=1970; $i<=2019; $i++){
															?>
																<option><?= $i ?></option>
															<?php
														}
														?>		
													</select>
												</div>

												<div class="form-group">	
												<h6 class="forv" style="display: inline">Jusqu'en</h6> 
												
											</div>

											<div class="form-group half" >
													<select name="fin_mois_formation" >
													<option value=""><?= $information_a_modifier_li['fin_mois_formation'] ?></option>
													
													<option value="Janvier">Janvier</option>
													<option value="Fevrier">Février</option>
													<option value="Mars">Mars</option>
													<option value="Avril">Avril</option>
													<option value="Mai">Mai</option>
													<option value="Juin">Juin</option>
													<option value="Juillet">Juillet</option>
													<option value="Aôut">Aôut</option>
													<option value="Septembre">Septembre</option>
													<option value="Octobre">Octobre</option>
													<option value="Novembre">Novembre</option>
													<option value="Décembre">Décembre</option>
												
										</select>
												</div>
												<div class="form-group half" >
													<select name="fin_annee_formation" >
														<option><?= $information_a_modifier_li['fin_annee_formation'] ?></option>
														<?php
														for($i=1970; $i<=2019; $i++){
															?>
																<option><?= $i ?></option>
															<?php
														}
														?>		
													</select>
												</div>											
											<div class="form-group">	
											  <input type="text" required="required" name="filiere"  value="<?= $information_a_modifier_li['filiere'] ?>">
											  <label class="control-label" for="input" >Filière</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<input type="text" required="required" name="niveau"  value="<?= $information_a_modifier_li['niveau'] ?>">
												<label class="control-label" for="input" >Niveau</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<input type="text" required="required" name="obtention"  value="<?= $information_a_modifier_li['obtention'] ?>">
												<label class="control-label" for="input" >Certificats/diplômes</label><i class="mtrl-select"></i>
											</div>
											
											<div class="submit-btns">
												<button type="submit" class="mtr-btn bouh"><span>Mettre à jour</span></button>
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

<!-- footer -->
<!-- side panel -->		
	
<?php
	require("view/js.php");
?>

	<script>
		function affmas() {
			x = document.getElementById("cacher");
			if (x.style.display=='none'){
				x.style.display='block';
			}
			else{
				x.style.display='none'
			}
		}

	</script>

</body>	

</html>