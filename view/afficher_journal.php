<?php
	require("view/header.php");
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
									<div class="central-meta">
										<div class="new-postbox" id='cnt'>
											<figure>
												<?php
													if(isset($profil_li["photo_de_profil"])){
														$pdp = $profil_li["photo_de_profil"];
														$chemin_pdp = "public/images/picture/pdp/$pdp";
													}
													else{
														$chemin_pdp = "public/images/av.png";
													}
												?>
												<img src="<?= $chemin_pdp ?>" alt="">
											</figure>
											<div class="newpst-input">
												<form method="post" action="index.php?action=post&amp;id=<?= $id ?>" enctype="multipart/form-data">
													<textarea id="pub" rows="2" name="texte" placeholder="Publier un Offre d'emploi ou autre"></textarea>
													
													<div class="attachments">
														<ul>
															
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																	<input type="file" name="image">
																</label>
															</li>
															
													
															<li>
																<button type="submit" name="new_post">Publier</button>
															</li>
														</ul>
													</div>

													<div id="publication" style="display:none;">
															<textarea id="pub" rows="2" name="mission" placeholder="Mission"></textarea>
															<div id="f" class="form-group">	
																<input type="text" name="formation"  />
																<label class="control-label" for="input">Formation</label><i class="mtrl-select"></i>
															</div>
															<div class="form-group">	
																<input type="text" name="experience"  placeholder=""/>
																<label class="control-label" for="input">Experience Minimum</label><i class="mtrl-select"></i>
															</div>
															<div class="form-group">	
																<input type="text" name="competence"  />
																<label class="control-label" for="input">Competence</label><i class="mtrl-select"></i>
															</div>
															<div class="form-group">	
																<input type="text" name="personnalite"   />
																<label class="control-label" for="input">Personnalité</label><i class="mtrl-select"></i>
															</div>
															<div class="form-group">	
																<input type="text" name="langue"  />
																<label class="control-label" for="input">Langue</label><i class="mtrl-select"></i>
															</div>
															<div class="form-group">
																<fieldset style="padding-top:0.01em !important;padding-bottom:1em !important;padding-left:0.25em !important;">
																	<legend style="font-size:15px !important;">  Date limite </legend>
																	<div class="form-group half" style="margin-left:1px !important;">
																		<select style="color:#088dcd" name='jour'>
																			<option value="">Jour</option>
																			<?php
																				for($i=1; $i<=31; $i++){
																					?>
																						<option><?= $i ?></option>
																					<?php
																				}
																			?>	
																			
																		</select>
																	</div>
																	<div class="form-group half" style="margin-left:5px !important;">
																		<select name='mois'>
																		<option value="">Mois</option>
																			<option>Janvier</option>
																			<option>Fevrier</option>
																			<option>Mars</option>
																			<option>Avril</option>
																			<option>Mai</option>
																			<option>Juin</option>
																			<option>Juillet</option>
																			<option>Aout</option>
																			<option>Septembre</option>
																			<option >Octobre</option>
																			<option >Novembre</option>
																			<option >Decembre</option>
																		</select>
																	</div>
																</fieldset>
															</div>
															<div class="form-group">	
																<input type="text" name="lieu"    />
																<label class="control-label" for="input">Lieu</label><i class="mtrl-select"></i>
															</div>
														</div>
													</form>
												<script>
													var x = document.getElementById('pub');
													var cont = document.getElementById('cnt');
													var i = 0;
													x.addEventListener('focus',  function show_pub(){
														if (i < 1){
															dist = document.getElementById('publication');
															dist.style.display = 'block';
															}
														i = i + 1 ;														
															}
														
													)
										
													x.addEventListener('blur', function hide_pub(event){
														dist = document.getElementById('publication');
														if (event.relatedTarget == null){
															dist.style.display = 'none';
															i = 0;
														}			
													}
													)
												
													cnt.addEventListener('click', function hides_pub(event){
														dist = document.getElementById('publication');
														console.log(event.target.localName);
														if (event.target.localName == 'div'){
															dist.style.display = 'none';
															i = 0;
														}	
													}
													) 
												</script>
											</div>
										</div>
									</div>
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