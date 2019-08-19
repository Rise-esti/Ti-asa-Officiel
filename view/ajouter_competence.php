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
										<h5 class="f-title"><i class="ti-info-alt"></i> Ajouter une compétence</h5>
										<form method="post" class="formcomp" action="index.php?action=ajouter_competence&amp;id=<?= $id ?>">
																				
											<div class="form-group">	
											  <input type="text" required="required" name="competence"/>
											  <label class="control-label" for="input">Compétence</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<textarea rows="4" id="textarea" name="explication"></textarea>
												<label class="control-label" for="textarea"> Explications</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">	
											  <input type="text" name="niveau"/>
											  <label class="control-label" for="input">Niveau</label><i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												<button type="submit" name="ajouter_competence" class="mtr-btn bouh"><span>Ajouter</span></button>
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