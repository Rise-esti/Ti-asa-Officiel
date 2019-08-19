<?php
	require("view/header.php")
?>
<!-- topbar -->

<?php
	$active_plus = "active";
	require("view/couverture.php");

	function enleve_le_point_virgule($texte,$vir){
		$tab = array();
		$pos = strpos($texte , $vir);
		$i = 0;
		while ($pos != ''){
			$chaine_sans_virgule = substr($texte , 0, $pos);
			$texte = substr($texte , $pos+1);
			$tab[$i] = $chaine_sans_virgule;
			$pos = strpos($texte , $vir);
			$i++;
		}
		$tab[$i] = $texte;
		return $tab;
	}
?>
<!-- top area -->
		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									
									<?php
										require("view/recent_activity.php");
										require("view/who_s_following.php");
									?>
									<!-- recent activites -->
									
									
									<!-- who's following -->
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="loadMore">
									<!-- add post new box -->
									
									<?php
										while($publication_li = $publication->fetch()){
											$nom = $publication_li["nom"];
											$prenom = $publication_li["prenom"];
											$username = $publication_li["username"];
									?>
									
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
												<figure>
													<?php
																						
														if(isset($publication_li["pdp"])){
															$pdp = $publication_li["pdp"];
															$chemin_pdp = "public/images/picture/pdp/$pdp";
														}
														else{
															$chemin_pdp = "public/images/av.png";
														}
													?>
												
													<img src="<?= $chemin_pdp ?>" alt="">
												</figure>
												<div class="friend-name">
													<ins><a href="index.php?action=affichage_profil&amp;username=<?= $username ?>" title=""><?php echo "$nom $prenom"; ?></a></ins>
													<span>Publié le <?= $publication_li["date_publication"] ?> </span>
												</div>
												<div class="post-meta">
													<div class="description">
														<?php
															if(!empty($publication_li["texte"])){
																$vir = "\n";
																$text_tab = enleve_le_point_virgule($publication_li["texte"], $vir);
																$nbr = count($text_tab);
																for($i=0; $i<$nbr; $i++){
																	$texte = $text_tab[$i];
														?>
														<div style="margin-left:50px;">
															<?= $texte ?>
														</div>
														<?php
																}
															}
															if(!empty($publication_li["mission"])){
														?>
														<h6 style="display: inline; color: #088dcd">Mission :</h6> 
														<p class="para" style="display: block">
															<?php
																$vir = ';';
																$text_tab = enleve_le_point_virgule($publication_li["mission"], $vir);
																$nbr = count($text_tab);
																for($i=0; $i<$nbr; $i++){
																	$texte = $text_tab[$i];
															?>
																<li style="margin-left:50px;"><?= $texte ?></li>
															<?php
																}
															}
															?>
														</p>
														<?php
															if(!empty($publication_li["formation"])){
														?>	
														<i class="mtrl-select"></i>
														
														<h6 style="display: inline; color: #088dcd">Formation :</h6> 
														<p class="para" style="display: block; color: #333">
															<?php
																
																$text_tab = enleve_le_point_virgule($publication_li["formation"], $vir);
																$nbr = count($text_tab);
																for($i=0; $i<$nbr; $i++){
																	$texte = $text_tab[$i];
															?>
																<li style="margin-left:50px;"><?= $texte ?></li>
														
															<?php
																}
															}
															if(!empty($publication_li["experience"])){
															?>	
														</p>
														<i class="mtrl-select"></i>

														<h6 style="display: inline; color: #088dcd">Expérience :</h6> 
														<p class="para" style="display: block; color: #333">
															<?php
																
																$text_tab = enleve_le_point_virgule($publication_li["experience"], $vir);
																$nbr = count($text_tab);
																for($i=0; $i<$nbr; $i++){
																	$texte = $text_tab[$i];
															?>
																<li style="margin-left:50px;"><?= $texte ?></li>
														
															<?php
																}
															}
															if(!empty($publication_li["competence"])){
															?>
														</p>

														<i class="mtrl-select"></i>

														<h6 style="display: inline; color: #088dcd">Competence :</h6> 
														<p class="para" style="display: block; color: #333">
															<?php
																
																$text_tab = enleve_le_point_virgule($publication_li["competence"], $vir);
																$nbr = count($text_tab);
																for($i=0; $i<$nbr; $i++){
																	$texte = $text_tab[$i];
															?>
																<li style="margin-left:50px;"><?= $texte ?></li>
														</p>
															<?php
																}
															}
															if(!empty($publication_li["langue"])){
															?>	
														
														<i class="mtrl-select"></i>
														<h6 style="display: inline; color: #088dcd">Langue :</h6> 
														<p class="para" style="display: block; color: #333">
															<?php
																
																$text_tab = enleve_le_point_virgule($publication_li["langue"], $vir);
																$nbr = count($text_tab);
																for($i=0; $i<$nbr; $i++){
																	$texte = $text_tab[$i];
															?>
																<li style="margin-left:50px;"><?= $texte ?></li>
														</p>
															<?php
																}
															}
															if(!empty($publication_li["date_limite"]) or $publication_li["date_limite"] != " " or !isset($publication_li["date_limite"])){
															?>	
														
														<i class="mtrl-select"></i>
														<h6 style="display: inline; color: #088dcd">Date limite :</h6> 
														<p class="para" style="display: block; color: #333">
															<li style="margin-left:50px;"><?= $publication_li["date_limite"] ?> </li>
														</p>
														<?php
															}
															if(!empty($publication_li["lieu"])){
														?>
														<i class="mtrl-select"></i>

														<h6 style="display: inline; color: #088dcd">Lieu :</h6> 
														<p class="para" style="display: block; color: #333">
															<li style="margin-left:50px;"><?= $publication_li["lieu"] ?> </li>
														</p>
															<?php
																}
																if(!empty($publication_li["personnalite"])){
															?>
														<i class="mtrl-select"></i>
														<h6 style="display: inline; color: #088dcd">Personnalité :</h6> 
														<p class="para" style="display: block; color: #333">
															<?php
																$text_tab = enleve_le_point_virgule($publication_li["personnalite"], $vir);
																$nbr = count($text_tab);
																for($i=0; $i<$nbr; $i++){
																	$texte = $text_tab[$i];
															?>
																<li style="margin-left:50px;"><?= $texte ?></li>
															<?php
																}
															}
															?>	
														</p>
														<i class="mtrl-select"></i>
													</div>
													<?php														
														if(!empty($publication_li["nom_image"])){
															$image_publie = $publication_li["nom_image"];
															$chemin_image_publie = "public/images/picture/post/$image_publie";
														
													?>
															<img src="<?= $chemin_image_publie ?>" alt="">
													<?php
														}
													?>
												</div>
											</div>

											<!-- Commentaire -->
										</div>
									</div>
									
									<?php
										}
									?>

								</div>
							</div><!-- centerl meta -->
							
							<?php
								require("view/your_page_acceuil_droite.php");
							?>
								<!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	<!-- footer -->
	
</div>
	<!-- side panel -->		
	
	

<?php
	require("view/js.php");
?>

</body>	

</html>