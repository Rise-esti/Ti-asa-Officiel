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
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Editer les informations générales</h5>

										<form method="post" class="formcomp" action="index.php?action=information_profile&amp;id=<?= $id ?>">
											<div class="form-group">	
												<input type="text" name="nom_utilisateur" required="required" value="<?= $profil_li["username"] ?>"/>
												<label class="control-label" for="input">Nom d'utilisateur</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group half">	
											  <input type="text" id="input" name="nom" required="required" value="<?= $profil_li["nom"] ?>"/>
											  <label class="control-label" for="input">Nom</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group half">	
											  <input type="text" name="prenom" required="required" value="<?= $profil_li["prenom"] ?>" />
											  <label class="control-label" for="input">Prénom</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
											  <input type="text" name="mail" required="required" value="<?= $profil_li["mail"] ?>" />
											  <label class="control-label" for="input"><a href="#" class="__cf_email__" data-cfemail="4b0e262a22270b">Email</a></label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
												<?php
													if(isset($profil_li["numero"])){
														$telephone = $profil_li["numero"];
													}
													else{
														$telephone = "+261";
													}
												?>	
											  <input type="text" name="telephone" value="<?= $telephone ?>"/>
											  <label class="control-label" for="input">Téléphone</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
												<?php
													if(isset($profil_li["poste"])){
														$poste = $profil_li["poste"];
													}
													else{
														$poste = "";
													}
												?>	
												<input type="text" required="required" value="<?= $poste ?>" name="poste"/>
												<label class="control-label" for="input">Poste/Niveau actuel</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
												<?php
													if(isset($profil_li["entreprise"])){
														$entreprise = $profil_li["entreprise"];
													}
													else{
														$entreprise = "";
													}
												?>
												<input type="text" required="required" value="<?= $entreprise ?>" name="entreprise"/>
												<label class="control-label" for="input">Entreprise/Ecole actuel</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
											<label class="control-label" for="input">Date de naissance</label><i class="mtrl-select"></i>
											<?php
												
												if(isset($profil_li["jour"])){
													$annee = $profil_li["annee"];
													$mois = $profil_li["mois"];
													$jour = $profil_li["jour"];
													$mois_chiffre = $profil_li["mois_chiffre"];
													
												}
												else{
													$annee = "Années";
													$mois = "Mois";
													$jour = "Jour";
												}
											?>
											<div class="dob">
												<div class="form-group">
													<select name="jour" >
														<option><?= $jour ?></option>
														<?php
														for($i=1; $i<=31; $i++){
															?>
																<option><?= $i ?></option>
															<?php
														}
														?>		
													</select>
												</div>
												<div class="form-group">
													<select name="mois">
														<option value="<?= $mois_chiffre ?>"><?= $mois ?></option>
														  <option value=1>Jan</option>
														  <option value=2>Fév</option>
														  <option value=3>Mar</option>
														  <option value=4>Avr</option>
														  <option value=5>Mai</option>
														  <option value=6>Juin</option>
														  <option value=7>Juil</option>
														  <option value=8>Aou</option>
														  <option value=9>Sep</option>
														  <option value=10>Oct</option>
														  <option value=11>Nov</option>
														  <option value=12>Déc</option>
													</select>
												</div>
												<div class="form-group">
													<select name="annee">
													  <option><?= $annee ?></option>
													  <?php
													  for($i=1970; $i<=2005; $i++){
														?>
															<option><?= $i ?></option>
														<?php
													  }
													  ?>
													</select>
												</div>
											</div>
											</div>
											<div class="form-radio">
											  <div class="radio">
												<label>
												  <input type="radio" checked="checked" name="radio" value="h"><i class="check-box"></i>Homme 
												</label>
											  </div>
											  <div class="radio">
												<label>
												  <input type="radio" name="radio" value="f"><i class="check-box"></i>Femme
												</label>
											  </div>
											</div>
											<br>
											<div class="form-group">
														<?php
															if(isset($profil_li["adresse"])){
																$adresse = $profil_li["adresse"];
															}
															else{
																$adresse = "";
															}
													    ?>
											  <input type="text" name="adresse" placeholder="ex: Ambatoroaka" value="<?= $adresse ?>"/>
											  <label class="control-label" for="input">Adresse</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
													  <?php
													  	if(isset($profil_li["ville"])){
															$province = $profil_li["ville"];
														}
														else{
															$province = "Province";
														}
													  ?>
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
											   <?php
											   		if(isset($profil_li["biographie"])){
														$biographie = $profil_li["biographie"];
													}
													else{
														$biographie = "";
													}
											   ?>
											<textarea rows="4" id="textarea" name="biographie" ><?= $biographie ?></textarea>
											<label class="control-label" for="textarea"> Biographie</label><i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												<button type="submit" name="valider_modify_profil" class="mtr-btn"><span>Mettre à jour</span></button>
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