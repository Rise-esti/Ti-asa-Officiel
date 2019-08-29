<?php
	$_SESSION["id_page"] = $select_page_li["id_page"];
	if(isset($select_page_li["pdc_page"])){
		$pdc = $select_page_li["pdc_page"];
		$chemin_pdc = "public/images/picture/pdc_page/$pdc";
	}
	else{
		$chemin_pdc = "public/images/resources/timeline-1.jpg";
	}
?>

	<section>
		<div class="feature-photo">
			<figure><img style="" id="pdc" src="<?= $chemin_pdc ?>"  alt=""></figure>
			<?php
				if($select_page_li["id"] != $id ){
					$id_personne = $select_profil_li["id"];
				?>
			<div class="add-btn">
				<span>0 abonnée</span>
				
				<a href="index.php?action=suivre_page&amp;id=<?=$id?>&amp;id_exp=<?= $id_personne ?>&amp;discussion" title="" data-ripple="">
					Suivre
				</a>
			</div>
			<?php
				}
				if($select_page_li["id"] == $id){
			?>
			<form class="edit-phto" action="index.php?action=modifier_photo_page&id=<?= $id ?>&amp;id_page=<?= $select_page_li["id_page"]?>&amp;type=123" enctype="multipart/form-data" method="POST" style="top:2% !important; height:8% !important; left:80% !important;">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Modifier le photo  de couverture
				<input type="file" Onchange="form.submit()" accept="image/*" name="fichier_image" id="fic"/>
				</label>
			</form>
			<?php
				}
			?>
			<div class="public/container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<?php
																	
									if(isset($select_page_li["pdp_page"])){
										$pdp = $select_page_li["pdp_page"];
										$chemin_pdp = "public/images/picture/pdp_page/$pdp";
									}
									else{
										$chemin_pdp = "public/images/av.png";
									}
								?>
								<img src="<?= $chemin_pdp ?>" alt="">
								<?php
									if($select_page_li["id"] == $id){
								?>
								<form class="edit-phto" id="form" action="index.php?action=modifier_photo_page&id=<?= $id ?>&amp;id_page=<?= $select_page_li["id_page"] ?>&amp;type=321" enctype="multipart/form-data" method="POST">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Modifier la photo de profil
										<input type="file" Onchange="form.submit()" accept="image/*" name="fichier_image" id="fic"/>
									</label>
																		
								</form>
								<?php
									}
								?>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
                                  <h5><?php
                                   $nom = $select_page_li["nom_page"];
                                   echo "$nom";
                                   ?>
                                   </h5>
								  <span><?= $select_page_li["mail_page"] ?></span>
								</li>
								<?php
								if($select_page_li["id"] == $id){
								?>
								<li>
									<a class="active" href="index.php?action=journal&amp;id=<?= $id ?>" title="" data-ripple="">Modifier la page</a>
									
								</li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>