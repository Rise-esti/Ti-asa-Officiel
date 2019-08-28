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
										<h5 class="f-title"><i class="ti-info-alt"></i> Vos formations</h5>

										<form method="post">
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Année :</h6> 
												<h6 style="display: inline">2015 - 2016</h6>
												<i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Ecole/institut/autres :</h6> 
												<h6 style="display: inline">ESTI Antanimena</h6>
												<i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Filière :</h6> 
												<h6 style="display: inline">Informatique, Idev</h6>
												<i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Niveau :</h6> 
												<h6 style="display: inline"> L0</h6>
												<i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<h6 class="forv" style="display: inline">Certificats ou diplômes :</h6> 
												<h6 style="display: inline">Fucking girl time</h6>
												<i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												<button  Onclick="window.location='edit-formation.html'"   type="button" class="mtr-btn bouton" ><span>Modifier</span></button>
											</div>
										</form>
										<form method="post">
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Année :</h6> 
													<h6 style="display: inline">2015</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Lieu :</h6> 
													<h6 style="display: inline">ESTI Antanimena</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Filière :</h6> 
													<h6 style="display: inline">Informatique, Idev</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Niveau :</h6> 
													<h6 style="display: inline"> L0</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Certificats ou diplômes :</h6> 
													<h6 style="display: inline">Fucking girl time</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="submit-btns">
													<button  Onclick="window.location='edit-formation.html'"   type="button" class="mtr-btn bouton" ><span>Modifier</span></button>
												</div>
										</form>
										<form method="post">
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Année :</h6> 
													<h6 style="display: inline">2015</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Lieu :</h6> 
													<h6 style="display: inline">ESTI Antanimena</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Filière :</h6> 
													<h6 style="display: inline">Informatique, Idev</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Niveau :</h6> 
													<h6 style="display: inline"> L0</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
													<h6 class="forv" style="display: inline">Certificats ou diplômes :</h6> 
													<h6 style="display: inline">Fucking girl time</h6>
													<i class="mtrl-select"></i>
												</div>
												<div class="submit-btns">
													<button  Onclick="window.location='edit-formation.html'"   type="button" class="mtr-btn bouton" ><span>Modifier</span></button>
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
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="public/js/main.min.js"></script>
	<script src="public/js/script.js"></script>
	<script src="public/js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	

</html>