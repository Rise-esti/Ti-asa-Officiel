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
										<h5 class="f-title"><i class="ti-info-alt"></i> Ajouter une centre d'intérêt</h5>
										<form method="post" class="formcomp" action="index.php?action=ajouter_centre_interet&amp;id=<?= $id ?>">
																				
											<div class="form-group">	
											  <input type="text" required="required" name="centre_interet"/>
											  <label class="control-label" for="input">Centre d'intérêt :</label><i class="mtrl-select"></i>
											</div>
										
											<div class="form-group">	
												<textarea rows="4" id="textarea" name="description" required="required"></textarea>
												<label class="control-label" for="textarea"> Déscription :</label><i class="mtrl-select"></i>
                                            				</div>
                                            
											<div class="submit-btns">
												<button type="submit" name="ajouter_centre_interet" class="mtr-btn"><span>Ajouter</span></button>
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