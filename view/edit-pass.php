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
										<h5 class="f-title"><i class="ti-info-alt"></i> Editer le mot de passe</h5><br>
										<?php
											if(isset($ok)){
												echo $ok;
											}
										?>
										<form method="post" class="formcomp" action="index.php?action=nouveau_mot_de_passe&amp;id=<?= $id ?>">
											<div class="form-group">	
											  <input type="password" required="required" name="ancien_mdp"/>
											  <label class="control-label" for="input">Ancien mot de passe</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
											  <input type="password" id="input" required="required" name="nouveau_mdp"/>
											  <label class="control-label" for="input">Nouveau mot de passe</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
											  <input type="password" required="required" name="confirmation_nouveau_mdp"/>
											  <label class="control-label" for="input">Confirmer votre mot de passe</label><i class="mtrl-select"></i>
											</div>
											
											<a class="forgot-pwd underline" title="" href="#">Mot de passe oublié?</a>
											<div class="submit-btns">
												<button type="button" class="mtr-btn"><span>Annuler</span></button>
												<button type="submit" class="mtr-btn" name="mettre_a_jour_mdp"><span>Mettre à jour</span></button>
											</div>
										</form>
										<?php
											if(isset($error)){
												echo $error;
											}
										?>
										
									</div>
								</div>	
							</div><!-- centerl meta -->
							<!-- A droite : your page et who's following -->
							<?php
								require("view/your_page_who_s_following.php");
							?>
							<!-- side panel -->		
	
<?php
	require("view/js.php");
?>

</body>	

</html>