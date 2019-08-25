<?php
	require("view/header.php")
?>
<!-- topbar -->

<?php
	$active_plus = "active";
	require("view/couverture_page.php");
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
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Editer les informations </h5>

										<form method="post" class="formcomp" action="index.php?action=information_profile&amp;id="">
											<div class="form-group">	
												<input type="text" name="nom_utilisateur" required="required" value="">
												<label class="control-label" for="input">Nom de la page</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<input type="text" name="mail" required="required" value="" />
												<label class="control-label" for="input"><a href="#" class="__cf_email__" data-cfemail="4b0e262a22270b">Email</a></label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
												<input type="text" name="telephone" required="required" value=""/>
												<label class="control-label" for="input">Téléphone</label><i class="mtrl-select"></i>
											</div>
											
											
											
											<div class="form-group">
														
											  <input type="text" name="adresse" required="required" placeholder="" value=""/>
											  <label class="control-label" for="input">Adresse</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
													  
											  <select name="province">
												<option><?= $province ?></option>
												<option>Antananarivo</option>
												<option>Fianarantsoa</option>
												<option>Toliara</option>
												<option>Toamasina</option>
												<option>Antsiranana</option>
												<option>Mahajanga</option>
											  </select>
											</div>
											<div class="form-group">
											<textarea rows="4" id="textarea" name="description" ></textarea>
											<label class="control-label" for="textarea"> Description</label><i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												
												<button type="submit" name="valider_modify_profil" class="mtr-btn"><span>Créer la page</span></button>
											</div>
										</form>
									</div>
								</div>	
							</div><!-- centerl meta -->

							<!-- A droite : your page et who's following -->
							<?php
								require("view/your_page_who_s_following.php");
							?>


						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	<?php
		//require("view/footer.php")
	?>
	<!-- footer -->	
	
<?php
	require("view/js.php");
?>

</body>	

</html>