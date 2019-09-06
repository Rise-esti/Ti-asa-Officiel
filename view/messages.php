
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
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="advertisment-box">
								
										<figure>
											<a href="#" title="Advertisment"><img src="" alt=""></a>
										</figure>
									</div>
									
									<?php
										require("view/shortcuts_gauche_acceuil.php");
									?>
									<!-- Shortcuts -->										
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6" >
								<div class="central-meta">
									<div class="messages">
										<h5 class="f-title"><i class="ti-bell"></i>Messages </h5>
										<div class="message-box">
											<ul class="peoples">
												<?php
												$tab_mess_farany = $_SESSION["tab_mess_farany"];
												$nbr = count($tab_mess_farany);
												for($i=0; $i<$nbr; $i++){
													$pdp = $tab_mess_farany[$i]["pdp"];
													if(isset($pdp)){
														$chemin = "public/images/picture/pdp/$pdp";
													}
													else{
														$chemin = "public/images/av.png";
													}
												?>
												<li>
													<a href="index.php?action=message&amp;id=<?=$id?>&amp;id_exp=<?= $tab_mess_farany[$i]['expediteur'] ?>&amp;discussion">
														<figure>
															<img src="<?= $chemin ?>" alt="">
															<span class="status f-online"></span>
														</figure>
														<div class="people-name">
															<span><?=$tab_mess_farany[$i]["nom"]. ' '. $tab_mess_farany[$i]["prenom"] ?></span>
														</div>
													</a>
												</li>
												<?php
												}
													$pdp = $profil_li["photo_de_profil"];
													if(isset($pdp)){
														$chemin = "public/images/picture/pdp/$pdp";
													}
													else{
														$chemin = "public/images/av.png";
													}
													
													for($i=0; $i<$nbr_discussion; $i++){
														if($_SESSION["id_expediteur_mess"]== $tab[$i]["expediteur"]){
															$pdp_dest = $tab[$i]["pdp"];
															$nom_dest = $tab[$i]["nom"];
															$prenom_dest = $tab[$i]["prenom"];
															if(isset($pdp_dest)){
																$chemin_pdp_dest = "public/images/picture/pdp/$pdp_dest";
															}
															else{
																$chemin_pdp_dest = "public/images/av.png";
															}
														}
													}
													
													if(!empty($info_destinataire_li["id"])){
														
														$nom_dest = $info_destinataire_li["nom"];
														$prenom_dest = $info_destinataire_li["prenom"];
														$pdp_dest = $info_destinataire_li["photo_de_profil"];
														if(isset($pdp_dest)){
															$chemin_pdp_dest = "public/images/picture/pdp/$pdp_dest";
														}
														else{
															$chemin_pdp_dest = "public/images/av.png";
														}
													}
													
												?>
												
											</ul>
											<div class="peoples-mesg-box">
												<div class="conversation-head">
													<figure><img src="<?= $chemin_pdp_dest ?>" alt=""></figure>
													<span><?= $nom_dest.' '.$prenom_dest ?><i>En ligne
													<?php
													$id_exp = $_SESSION["id_expediteur_mess"];
													$id = $_SESSION["ID"];
													
													?>
													 </i></span>
												</div>
												<ul value="" id="gae" class="chatting-area">
													<?php
													$id_exp = $_SESSION["id_expediteur_mess"];
													$id = $_SESSION["ID"];
													for($i=0; $i<$nbr_discussion; $i++){
														$id_exp_temps = $tab[$i]["expediteur"];
														if($id_exp_temps != $id){
															$id_exp = $id_exp_temps;
													?>
														<li class="you">
															<figure><img style="width:50px; height:33px;"src=<?= $chemin_pdp_dest?> alt=""></figure>
															<p><?= $tab[$i]["mes"] ?></p>
													
														</li>
														<?php
														}
														else{
														?>
														
														<li class="me">
															<figure >
																<img style="width:50px; height:33px;" src="<?= $chemin ?>" alt="">
															</figure>
															<p >
																<?= $tab[$i]["mes"] ?>
															</p>
														</li>
														
														
														<?php
														}
														$last_id_message = $tab[$i]["id_message"];
													}
													
													$id_dest = $_SESSION["id_expediteur_mess"];
													
													?>
													<script>
															x = document.getElementById('gae')
															x.value = <?=$last_id_message?>;
															
													</script>
												</ul>
												<div class="message-text-container">
													<form method="post" action="index.php?action=nouveau_message&amp;id=<?=$id?>&amp;id_dest=<?= $id_dest?>">
														<textarea type="text" name="mes" id="new_message" ></textarea>
														<button type="button" id="nw-msg" name="envoyer_message" title="Envoyer Message"><i class="fa fa-paper-plane"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											<h4 class="widget-title">Socials </h4>
											<ul class="socials">
												<li class="facebook">
													<a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins></ins></a>
												</li>
												<li class="twitter">
													<a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins></ins></a>
												</li>
												<li class="google">
													<a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins></ins></a>
												</li>
											</ul>
										</div>
									<?php
										require("view/who_s_following.php")
									?>
										<!-- who's following -->
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
	<script src="public/jquery.min.js"></script>
<script>
	
	setInterval('load_message()', 2000);
	function load_message(){
		id_last = document.getElementById('gae');
		$.post(
			'controller/load.php',
			{
				id: <?= $id ?>,
				id_exp: <?= $id_exp ?>,
				id_last_message: id_last.value
			},

			message_recu,  // nom fonction retour


		);
		function message_recu(text){
			tab = new Array(JSON.parse(text));
			if (tab[0].length > 0){
			for(var i=0; i<tab.length; i++){
				
				li ="<li class='you'><figure><img src='<?= $chemin_pdp_dest ?>' alt=''></figure><p>" +  tab[i][0]['mes'] + "</p></li>";
				$('.chatting-area').append(li);
				xul = document.getElementById('gae');
				xul.value = tab[i][0]['id_message'];
				id_last.value = tab[i][0]['id_message'];
					
			}
					
		}
		
		}
	}

	document.getElementById('nw-msg').addEventListener('click', function envoyer_message(){
		message_a_send = document.getElementById("new_message").value ;
		if (message_a_send.trim() !== ''){
			document.getElementById("new_message").value = '';
			$.post(
				'controller/send_message.php',
				{
					id: <?= $id ?>,
					id_exp: <?= $id_exp ?>,
					new_message : message_a_send
				},

				message_envoyer
			);
			function message_envoyer(reponse){
				if(reponse === 'ok'){
					li ="<li class='me'><figure><img src='<?= $chemin_pdp ?>' alt=''></figure><p>" +  message_a_send + "</p></li>";
					$('.chatting-area').append(li);
				}
			}
		}
	});

	
</script>
<script data-cfasync="false" src="public/js/email-decode.min.js"></script>
<script src="public/js/main.min.js"></script>
<script src="public/js/script.js"></script>
<script src="public/js/map-init.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

	<!-- side panel -->		
<?php
	// require("view/js.php");
	
?>

</body>	

</html>