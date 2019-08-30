<?php
	require("view/header.php")
?>
<!-- topbar -->

<?php
	$active_plus = "active";
	$_SESSION["id_page"] = $select_page_li["id_page"];
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
										<h5 class="f-title"><i class="ti-info-alt"></i> Editer une page </h5>
										<?php
											if(!empty($erreur_nom_mail)){
												echo " <br>$erreur_nom_mail";
											}
										?>

										<form method="post" class="formcomp" action="index.php?action=mettre_jour_page&amp;id=<?= $id ?>&amp;id_page=<?=$select_page_li["id_page"]?>">
											<div class="form-group">	
												<input type="text" name="nom_page" required="required" value="<?= $select_page_li["nom_page"] ?>">
												<label class="control-label" for="input">Nom de la page</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<input type="text" name="mail_page" required="required" value="<?= $select_page_li["mail_page"] ?>" />
												<label class="control-label" for="input"><a href="#" class="__cf_email__" data-cfemail="4b0e262a22270b">Email</a></label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
												<input type="text" name="telephone" required="required" value="<?= $select_page_li["telephone"] ?>"/>
												<label class="control-label" for="input">Téléphone</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
													  
											  <select name="province">
												<option><?= $select_page_li["province"] ?></option>
												<option>Antananarivo</option>
												<option>Fianarantsoa</option>
												<option>Toliara</option>
												<option>Toamasina</option>
												<option>Antsiranana</option>
												<option>Mahajanga</option>
											  </select>
											</div>
											<div class="form-group">
														
											  <input type="text" name="adresse" required="required" placeholder="" value="<?= $select_page_li["adresse"] ?>"/>
											  <label class="control-label" for="input">Adresse</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">
											<textarea rows="4" id="textarea" name="description" ><?= $select_page_li["description_page"] ?></textarea>
											<label class="control-label" for="textarea"> Description</label><i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												<button type="submit" name="mettre_jour_page" class="mtr-btn"><span>Mettre à jour</span></button>
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