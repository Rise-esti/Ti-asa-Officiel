<?php
	require("view/header.php")
?>
<!-- topbar -->

<?php
	$active_infogen = "active";
	require("view/couverture_page.php");
	$nom_page = $select_page_li["nom_page"];
	$id_page = $select_page_li["id_page"];
	$_SESSION["nom_page"] = $nom_page;
	$_SESSION["id_page"] = $id_page;
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
										<h5 class="f-title"><i class="ti-info-alt"></i> Page :  <?= $select_page_li["nom_page"] ?></h5>

										<form method="post" class="formcomp">
											<div class="form-group">	
												<h6 class="forv" style="display: inline; color:#610f91 !important;" > <i class="fa fa-smile-o inf"></i> Description:</h6> 
												<p class="para" style="display: inline"><?= $select_page_li["description_page"] ?> </p>
											
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#610f91 !important;"> <i class="fa fa-user inf"></i> Nom de la page:</h6> 
												<h6 style="display: inline"> <?= $select_page_li["nom_page"] ?></h6>
											
											</div>
											<div class="form-group" style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#610f91 !important;"> <i class="fa fa-globe inf"></i>Ville:</h6> 
												<h6 style="display: inline"> <?= $select_page_li["province"] ?></h6>
											</div>
											<div class="form-group" style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#610f91 !important;"> <i class="fa fa-globe inf"></i> Adresse:</h6> 
												<h6 style="display: inline"> <?= $select_page_li["adresse"] ?></h6>
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#222 !important;"> <i class="fa fa-envelope-o inf"></i> Email:</h6> 
												<h6 style="display: inline"> <?= $select_page_li["mail_page"] ?></h6>
								
											</div>
											<div class="form-group"  style="margin-top: 2% !important;">	
												<h6 class="forv" style="display: inline; color:#610f91 !important;"> <i class="fa fa-phone inf"></i> Téléphone:</h6> 
												<h6 style="display: inline"> <?= $select_page_li["telephone"] ?></h6>
									
											</div>
											<div class="submit-btns" style="margin-left:45% !important;">
												<button  onclick="x = confirm('Etes-vous sûr de vouloir supprimer cette page ?');if (x){window.location='index.php?action=supprimer_page&id=<?= $id ?>&id_page=<?= $id_page ?>'};" style="color:#ff4b5a !important; border-radius:20px !important; margin-left:100% !importan" type="button" class="mtr-btn " ><span>Supprimer</span></button>
												<button  Onclick="window.location='index.php?action=modifier_page&amp;id=<?= $id ?>&amp;nom_page=<?= $nom_page ?>'" style="color:#610f91 !important; border-radius:20px !important;" type="button" class="mtr-btn" ><span>Modifier</span></button>
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