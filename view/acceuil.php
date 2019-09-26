<?php

if(isset($_SESSION["id"]) and isset($_SESSION["nom"]) and isset($_SESSION["prenom"]) and isset($_SESSION["mail"])){
$username = $_SESSION["username"];
$nom = $_SESSION["nom"];
$prenom = $_SESSION["prenom"];
$mail = $_SESSION["mail"];
$id = $_SESSION["id"];

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

function french_it($mois){
	$months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
	return $months[$mois-1];
}

?>
<!--<div class="se-pre-con"></div>-->
<?php
	require("view/header.php")
?>
<!-- topbar -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">

								<?php
									require("view/shortcuts_gauche_acceuil.php");
								?>

								<!-- Shortcuts -->
								<?php
									require("view/recent_activity.php");
								?>
								<!-- recent activites -->

								<?php
									require("view/who_s_following.php");
								?>
								<!-- who's following -->
								</aside>
								</div><!-- sidebar -->
									<div class="col-lg-6">
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
													<img style="width:50px; height:50px; " src="<?= $chemin_pdp ?>" alt="">
												</figure>
												<div class="newpst-input">
													<form method="post" action="index.php?action=post&amp;id=<?= $id ?>" enctype="multipart/form-data">
														<textarea id="pub" rows="2" name="texte" placeholder="Publier un Offre d'emploi ou autres"></textarea>

														<div class="attachments">
															<ul>

																<li>
																	<i class="fa fa-image" style="color:#2ebc4f;"></i>
																	<label class="fileContainer">
																		<input type="file" name="image">
																	</label>
																</li>


																<li>
																	<button type="submit" name="new_post" style="padding:10px; border-radius:20px; background-image:linear-gradient(to right , #2ebc4f, #2ebc4f) !important;">Publier</button>
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
																<label class="control-label" for="input">Expérience</label><i class="mtrl-select"></i>
															</div>
															<div class="form-group">
																<input type="text" name="competence"  />
																<label class="control-label" for="input">Compétence</label><i class="mtrl-select"></i>
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

										</div><!-- add post new box -->



										<!-- Publication acceuil iciiiiiiiiiiiiiiii -->
										<?php
											while($publication_li = $publication->fetch()){
                                                if(!empty($publication_li["id_page"]) ){
                                                    for($i=0; $i<$nbr_all_page; $i++){
                                                        if($publication_li["id_page"] == $all_page[$i]["id_page"]){
                                                            $nom = $all_page[$i]["nom_page"];
                                                            $prenom = "";
                                                            if(!empty($all_page[$i]["pdp_page"])){
                                                                $pdp = $all_page[$i]["pdp_page"];
																$chemin_pdp = "public/images/picture/pdp_page/$pdp";
                                                            }
                                                            else{
                                                                $chemin_pdp = "public/images/av.png";
                                                            }
                                                        }
                                                    }
                                                }
                                                else{
                                                    $nom = $publication_li["nom"];
                                                    $prenom = $publication_li["prenom"];
                                                    $username = $publication_li["username"];
                                                }
										?>

										<div class="central-meta item">
											<div class="user-post">
												<div class="friend-info">
													<figure>
														<?php
															if(empty($publication_li["id_page"]) ){
                                  if(isset($publication_li["pdp"])){
                                      $pdp = $publication_li["pdp"];
                                      $chemin_pdp = "public/images/picture/pdp/$pdp";
                                  }
                                  else{
                                      $chemin_pdp = "public/images/av.png";
                                  }
                                }

															$jour_lim = $publication_li['jour'];
															$mois_lim = french_it($publication_li['mois']);
															$reste_lim = $publication_li['date_publication'];
															$id_pub = $publication_li['id_publication'];
														?>

														<img style="width:50px; height:47px;" src="<?= $chemin_pdp ?>" alt="">
													</figure>
													<div class="friend-name">

														<?php
															if(empty($publication_li["id_page"]) ){
														?>
														<ins><a href="index.php?action=affichage_profil&amp;username=<?= $username ?>" title=""><?php echo "$nom $prenom"; ?></a></ins>
														<?php
															}
															else{
														?>
														<ins><a href="index.php?action=visite_page&amp;id=<?=$id?>&amp;nom_page=<?=$nom?>" title=""><?php echo "$nom"; ?></a></ins>
														<?php
															}
														?>
														<span>Publié le <?php echo "$jour_lim $mois_lim $reste_lim" ?></span>
													</div>
													<div class="post-meta">
														<div id="<?= $id_pub ?>" class="description">
															<?php
																if(!empty($publication_li["texte"])){
																	$vir = "\n";
																	$text_tab = enleve_le_point_virgule($publication_li["texte"], $vir);
																	$nbr = count($text_tab);
																	for($i=0; $i<$nbr; $i++){
																		$texte = $text_tab[$i];
															?>
															<div style="margin-left:50px;"><?= $texte ?>
															</div>
															<?php
																	}
																}
																if(!empty($publication_li["mission"])){
															?>

															<h6 style="display: inline; color: #610f91">Missions:</h6>
															<p class="para" style="display: inline">
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

															<h6 style="display: inline; color: #610f91;">Formations:</h6>
															<p class="para" style="display: inline; color: #333">
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

															<h6 style="display: inline; color: #610f91">Expériences:</h6>
															<p class="para" style="display: inline; color: #333">
																<?php
																	$vir = ";";
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

															<h6 style="display: inline; color: #610f91">Competences:</h6>
															<p class="para" style="display: inline; color: #333">
																<?php
																	$vir=";";
																	$text_tab = enleve_le_point_virgule($publication_li["competence"], $vir);
																	$nbr = count($text_tab);
																	for($i=0; $i<$nbr; $i++){
																		$texte = $text_tab[$i];
																?>
																	<li style="margin-left:50px;"><?= $texte ?></li>

																<?php
																	}
																}
																if(!empty($publication_li["langue"])){
																?>
															</p>

															<i class="mtrl-select"></i>

															<h6 style="display: inline; color: #610f91">Langues:</h6>
															<p class="para" style="display: inline; color: #333">
																<?php
																	$vir = ";";
																	$text_tab = enleve_le_point_virgule($publication_li["langue"], $vir);
																	$nbr = count($text_tab);
																	for($i=0; $i<$nbr; $i++){
																		$texte = $text_tab[$i];
																?>
																	<li style="margin-left:50px;"><?= $texte ?></li>

																<?php
																	}
																}

																	if(!empty($publication_li["personnalite"])){
																?>
															</p>
															<i class="mtrl-select"></i>

															<h6 style="display: inline; color: #610f91">Personnalités :</h6>
															<p class="para" style="display: inline; color: #333">
																<?php
																	$vir = ";";
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



																<?php
																if(!empty($publication_li["date_limite"]) and $publication_li["date_limite"] != " "){
																?>
															</p>

															<i class="mtrl-select"></i>

															<h6 style="display: inline; color: #610f91">Date limite :</h6>
															<p class="para" style="display: inline; color: #333">
																<li style="margin-left:50px;"><?= $publication_li["date_limite"] ?> </li>

															<?php
																}
																if(!empty($publication_li["lieu"])){
															?>
															</p>
															<i class="mtrl-select"></i>

															<h6 style="display: inline; color: #610f91">Lieu :</h6>
															<p class="para" style="display: inline; color: #333">
																<li style="margin-left:50px;"><?= $publication_li["lieu"] ?> </li>

																<?php
																	}
																?>
														</div>
														<?php
															if(!empty($publication_li["nom_image"])){
																$image_publie = $publication_li["nom_image"];
																$chemin_image_publie = "public/images/picture/post/$image_publie";
                                                                if(!empty($publication_li["id_page"])){
                                                                    $chemin_image_publie = "public/images/picture/post_page/$image_publie";
                                                                }

														?>
																<img src="<?= $chemin_image_publie ?>" alt="">
														<?php
															}
														?>


													</div>
												</div>

												<!--Ici commentaire -->
											</div>
										</div>

										<?php
											}
										?>
												<!-- Publication acceuil iciiiiiiiiiiiiiiii -->

									</div><!-- centerl meta -->


									<!-- Your page et freinds à droite acceuil-->
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



	<!-- side panel -->


<script src="public/js/main.min.js"></script>
<?php
	require("view/js.php");
?>

<script>
/*
function french_it(mois){
	mois_tab = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
	return mois_tab[mois-1];
}


setInterval('nouveau_actu()', 2000);

function nouveau_actu(){
		id_dernier_pub = $('.description').attr('id');

		$.post(
					'controller/load_actu.php',
				{
					id_pub: id_dernier_pub
				},

				actu_recu,  // nom fonction retour

			);
			function actu_recu(text){
				tab = new Array(JSON.parse(text));
				// console.log(tab[0][0]);
				}
}
				/*
				if (tab[0].length > 0){
					for (i=0;i<tab[0].length;i++){
						// new_pub = $('.post-meta').clone();
						new_pub = "<div class='central-meta item'>" + "<div class='user-post'>;" + "<div class='friend-info'>" + "<figure>"

						if (tab[0][i]['id_page'] === ''){
							if (tab[0][i]['pdp']){

									chemin_pdp = "public/images/picture/pdp/" + tab[0][i]['id_page'];
							}
							else{
									chemin_pdp = "public/images/av.png";
							}
						}
						else{

						}

						new_pub = new_pub + "<img src=" + chemin_pdp  + "alt=''>" + "</figure>" + "<div class='friend-name'>"


					tab[0][i]['prenom']
					}
				}

				console.log(tab[0].length);
				// new_pub = $('.description').clone();

				// new_pub.attr('id', '')
				 //$('.newpst-input').after('')
				 */



</script>


</body>

</html>

<?php
}
?>
