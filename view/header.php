<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>ti-asa</title>
    <link rel="icon" href="public/images/fav.png" type="image/png" sizes="16x16"> 
   
    <link rel="stylesheet" href="public/css/main.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/color.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">


    <!--resp font & color footer--> <link rel="stylesheet" href="public/assets/css/style.css">


</head>
<script>	
	function cocher_cliques_message(){
		$('.nbr_lu').load("model/cocher_cliques_message.php");
	}

	setInterval('afficher_nbr_nouveau_message()', 1000);
	function afficher_nbr_nouveau_message(){
		$('.nbr_lu').load("model/afficher_nbr_nouveau_message.php");
	}

</script>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">

<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="public/images/logo2.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		<nav id="menu" class="res-menu">
			<ul>
				<li><span>Actualité</span>
					<ul>
						<li><a href="index.php?action=connecter&amp;id=<?= $id ?>" title="">Accueil</a></li>
						<li><a href="index2.html" title="">A</a></li>
						<li><a href="index-company.html" title="">B</a></li>

					</ul>
				</li>
				<li><span>Profil</span>
					<ul>
						<li><a href="index.php?action=information_generale&amp;id=<?= $id ?>" title="">Afficher votre profil</a></li>
						<li><a href="index.php?action=modifier_profil&amp;id=<?= $id ?>" title="">Modifier votre profil</a></li>			
					</ul>
				</li>
				<li><span>Account Setting</span>
					<ul>
						<li><a href="create-fav-page.html" title=""></a></li>
						
					</ul>
				</li>
				<li><span>forum</span>
					<ul>
						<li><a href="forum.html" title=""></a></li>
						
					</ul>
				</li>
				<li><span>Our Shop</span>
					<ul>
						<li><a href="shop.html" title=""></a></li>
						
					</ul>
				</li>
				<li><span>Our Blog</span>
					<ul>
						<li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
						<li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
						<li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
						<li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
						<li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
						<li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
						<li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
						<li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
					</ul>
				</li>
				<li><span>Portfolio</span>
					<ul>
						<li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
						<li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
						<li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
					</ul>
				</li>
				<li><span>Support & Help</span>
					<ul>
						<li><a href="support-and-help.html" title="">Support & Help</a></li>
						<li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
						<li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a></li>
					</ul>
				</li>
				<li><span>More pages</span>
					<ul>
						<li><a href="careers.html" title="">Careers</a></li>
						<li><a href="career-detail.html" title="">Career Detail</a></li>
						<li><a href="404.html" title="">404 error page</a></li>
						<li><a href="404-2.html" title="">404 Style2</a></li>
						<li><a href="faq.html" title="">faq page</a></li>
						<li><a href="insights.html" title="">insights</a></li>
						<li><a href="knowledge-base.html" title="">knowledge base</a></li>
					</ul>
				</li>
				<li><a href="about.html" title="">about</a></li>
				<li><a href="about-company.html" title="">About Us2</a></li>
				<li><a href="contact.html" title="">contact</a></li>
				<li><a href="contact-branches.html" title="">Contact Us2</a></li>
				<li><a href="widgets.html" title="">Widgts</a></li>
			</ul>
		</nav>
		<nav id="shoppingbag">
			<div>
				<div class="">
					<form method="post">
						<div class="setting-row">
							<span>use night mode</span>
							<input type="checkbox" id="nightmode"/> 
							<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notifications</span>
							<input type="checkbox" id="switch2"/> 
							<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notification sound</span>
							<input type="checkbox" id="switch3"/> 
							<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>My profile</span>
							<input type="checkbox" id="switch4"/> 
							<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show profile</span>
							<input type="checkbox" id="switch5"/> 
							<label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
					<h4 class="panel-title">Account Setting</h4>
					<form method="post">
						<div class="setting-row">
							<span>Sub users</span>
							<input type="checkbox" id="switch6" /> 
							<label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>personal account</span>
							<input type="checkbox" id="switch7" /> 
							<label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Business account</span>
							<input type="checkbox" id="switch8" /> 
							<label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show me online</span>
							<input type="checkbox" id="switch9" /> 
							<label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Delete history</span>
							<input type="checkbox" id="switch10" /> 
							<label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Expose author name</span>
							<input type="checkbox" id="switch11" /> 
							<label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
				</div>
			</div>
		</nav>
	</div><!-- responsive header -->
	
	<div class="topbar stick">
		<div class="logo">
			<i class="fa fa-rss" style="display:inline"></i><p class="por" style="display:inline">ti-asa</p>
		</div>
		
		<div class="top-area">
			<ul class="main-menu">
				<li>
					<a href="#" title="" class=" high">Accueil</a>
					<ul>
						<li><a href="index.php?action=connecter&amp;id=<?= $id ?>" title="" class="drop">Actualités</a></li>
						
					</ul>
				</li>
				<li>
					<a href="#" title="" class=" high" >Profil</a>
					<ul>
						<li><a href="index.php?action=information_generale&amp;id=<?= $id ?>" title="" class="drop">Afficher votre profil</a></li>
						<li><a href="index.php?action=modifier_profil&amp;id=<?= $id ?>" title="" class="drop">Modifier votre profil</a></li>

					</ul>
				</li>

				<li>
					<a href="#" title="" class=" high">Page</a>
					<ul>
						<li><a href="index.php?action=creer_page&amp;id=<?=$id?>" title="" class="drop">Créer une page</a></li>
						<?php
                        $tab_list_page = array();
						$i = 0;
						while($mes_page = $select_mes_page->fetch()){
						?>
						<li><a href="index.php?action=page&amp;id=<?=$id?>&amp;nom_page=<?=$mes_page["nom_page"]?>" title="" class="drop"><?= $mes_page["nom_page"] ?></a></li>
						<?php
                            $tab_list_page[$i] = $mes_page;
                            $i++;
						}
                        $nbr_page = count($tab_list_page);
						?>
					</ul>
				</li>
				
				<li>
					<a href="#" title="" class=" high">Plus</a>
					<ul>
						<li><a href="create-fav-page.html" title="" class="drop">créer une page</a></li>
						<li><a href="messages.html" title="" class="drop"> Messages </a></li>
					</ul>
				</li>
			</ul>
			<ul class="setting-area">
				<li>
					<a href="#" title="Rechercher" data-ripple=""> <i class="ti-search"></i></a>
					<div class="searched">
						<form method="post" class="form-search" >
							<input type="text" id="zavatra_recherchena" placeholder="Rechercher...">
							<button onclick="alefa()" data-ripple ><i  class="ti-search"></i></button>
						</form>
					</div>
				
				</li>
		
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="ti-bell"></i><span style="color:#610f91; font-weight:bold;">4</span>
					</a>
					<div class="dropdowns">
						<span>4 New Notifications</span>
						<ul class="drops-menu">
						<!--
							<li>
								<a href="notifications.html" title="">
									<img src="public/images/resources/thumb-1.jpg" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="public/images/resources/thumb-2.jpg" alt="">
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag red">Reply</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="public/images/resources/thumb-3.jpg" alt="">
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag blue">Unseen</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="public/images/resources/thumb-4.jpg" alt="">
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="public/images/resources/thumb-5.jpg" alt="">
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul> 
						<a href="notifications.html" title="" class="more-mesg">view more</a> -->
					</div>
				</li>
				<li>
					<a href="#" title="Messages"  onClick="cocher_cliques_message()" data-ripple=""><i class="ti-comment"></i>
						<span class="nbr_lu" style="color:#610f91; font-weight:bold;">
							<?php 
								if($_SESSION["nbr_nouveau_message"] == 0){
									$_SESSION["nbr_nouveau_message"] = "";
								}
								echo $_SESSION["nbr_nouveau_message"]; 
							?>
						</span>
					</a>
					<div class="dropdowns">
						<span><?= $_SESSION["nbr_message_non_lu"] ?> messages non lus</span>
						
						<ul id='msg-cont' class="drops-menu">
							<?php
								
								$tab_mess_farany = $_SESSION["tab_mess_farany"];
								$nbr = count($tab_mess_farany);
								for($i=0; $i<$nbr; $i++){
									$pdp = $tab_mess_farany[$i]["pdp"];
									$id_exp = $tab_mess_farany[$i]["expediteur"];
									if(isset($pdp)){
										$chemin_pdp_mes = "public/images/picture/pdp/$pdp";
									}
									else{
										$chemin_pdp_mes = "public/images/av.png";
									}
									
									
									
							?>
							<li id="<?=$tab_mess_farany[$i]['expediteur']?>" >
								<a href="#" Onclick="window.location='index.php?action=message&amp;id=<?=$id?>&amp;id_exp=<?= $id_exp ?>'" title="">
									<img src=<?= $chemin_pdp_mes ?> alt="">
									<div class="mesg-meta" >
										<h6 class="anarana"><?=$tab_mess_farany[$i]["nom"]. ' '. $tab_mess_farany[$i]["prenom"] ?></h6>
										<span id='mes_far'><?=$tab_mess_farany[$i]["mes"] ?></span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							
							<?php
									
								}
							?>
						</ul>
						<a href="messages.html" title="" class="more-mesg">view more</a> 
					</div>
				</li>
				<?php
					$nom = $profil_li["nom"];
					$prenom = $profil_li["prenom"];
				?>
				<li><a href="#" title="<?php echo "$nom $prenom" ?>" data-ripple="" style="color: #610f91; font-weight:bold; "><?= $profil_li["prenom"] ?></a>
					<div class="dropdowns languages">
						<a href="#" title=""><i class="ti-check"></i>English</a>
						<a href="#" title="">Arabic</a>
						<a href="#" title="">Dutch</a>
						<a href="#" title="">French</a>
					</div>
				</li>
			</ul>
			<div class="user-img">
			<?php								
				if(isset($profil_li["photo_de_profil"])){
					$pdp = $profil_li["photo_de_profil"];
					$chemin_pdp = "public/images/picture/pdp/$pdp";
				}
				else{
					$chemin_pdp = "public/images/av.png";
				}
			?>
			
				<img style="border-radius: 50%;width: 36px;height: 36px; " src="<?= $chemin_pdp ?>" alt="">
				<span class="status f-online"></span>	
				<div class="user-setting">
					<a href="#" title="" style="font-weight:bold;"><span class="status f-online"></span><?= $profil_li["prenom"] ?></a>
					<a href="#" Onclick="window.location='index.php?action=information_generale&amp;id=<?= $id ?>'"><i class="ti-user prof" ></i> <span class="propa">Voir le profil</span></a>
					<a href="#" Onclick="window.location='index.php?action=modifier_profil&amp;id=<?= $id ?>'"><i class="ti-pencil-alt prof"></i><span class="propa">Modifier le profil </span></a>
					
					<a href="#" ><i class="ti-settings prof"></i><span class="propa"> Paramètres de compte </span></a>
					<a href="#" Onclick="window.location='index.php?action=deconnecter&amp;id=<?= $id ?>'"><i  class="ti-power-off prof"></i><span class="propa"> Déconnexion</span></a>
				</div>
			</div>
			
			<!-- <span class="ti-menu main-menu" data-ripple=""></span> -->
		</div>
	</div><!-- topbar -->



	


	
	
	<script>
		setInterval('load_message_farany()', 2000);
		function load_message_farany(){
			$.post(
				'controller/message_farany.php',
				{
					id: <?= $id ?>,
					id_exp: <?= $id_exp ?>,
				},

				message_recu,  // nom fonction retour


			);

			function message_recu(msg){
				console.log('aty ve ?');
				message = new Array(JSON.parse(msg));
				
			
				
				
				if (message[0].length > 0){
					
					ids = new Array()
					$('#msg-cont > li').each(function(){
							ids.push($(this).attr('id'));		
					});

					for (i=0;i<message[0].length;i++){
						if (ids.indexOf(message[0][i]['id_expediteur']) > -1 ){
							$('#'   +  message[0][i]['id_expediteur'] + ' #mes_far'  ).html(message[0][i]['mes']);
							$('#msg-cont').prepend($('#' + message[0][i]['id_expediteur'] ));

						}
						else{
								hafatra = "<li id='" +  message[0][i]['id_expediteur'] + "' > <a href='#' Onclick='window.location=index.php?action=message&amp;id=" + message[0][i]['id_destinataire'] + "&;id_exp=" + message[0][i]['id_expediteur']+ "' title=''> <img src='"+ message[0][i]['pdp']+"' alt=''> <div class='mesg-meta' > <h6 class='anarana'>" + message[0][i]['nom'] + ' ' + message[0][i]['prenom']+"</h6> <span id='mes_far'>"+message[0][i]['mes']+"</span> <i>2 min ago</i> </div>	</a> <span class='tag green'>New</span>	</li>";
								$('#msg-cont').prepend(hafatra);
						}

						
					}

				}
				

				
			}
		}


	</script>
	<script src='public/js/stable.js'></script>

