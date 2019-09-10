<?php
  if($conf != true){
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ti-asa | Acceuil </title>

    <link rel="stylesheet" href="public/CSS/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/CSS/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<link rel="stylesheet" href="public/CSS/team.css">

</head>

<style>
    body{
        font-family: Poppins;
    }
</style>


<body id="page-top">


    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#" style="font-size: 31px !important; margin-top:-0.5%;"><i class="fa fa-rss"></i>Ti-asa</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" ><a class="nav-link js-scroll-trigger" href="#about" style="font-size: 15.2px !important">A propos</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link js-scroll-trigger" href="#services" style="font-size: 15.2px !important"> Services</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link js-scroll-trigger" href="#portfolio" style="font-size: 15.2px !important">Gallérie</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link js-scroll-trigger" href="#download" style="font-size: 15.2px !important">Télécharger</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link js-scroll-trigger" href="#team" style="font-size: 15.2px !important">Team</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link js-scroll-trigger" href="#contact" style="font-size: 15.2px !important">  Contact</a></li>
                    <a href="#myModal2" data-toggle="modal" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1"><i class="fa fa-pencil"></i> S'inscrire</a>
                </ul>
            </div>
        </div>
    </nav>


    <header class="masthead text-center text-white d-flex" style="background-image:url('public/IMG/header.jpg');" id="connecter">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong> Bienvenue sur ti-asa</strong></h1>
                    <hr>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Recruter des personnels | Trouver un emploi</p>
                <a  href="#myModal" class="btn btn-primary btn-xl " data-toggle="modal" role="button" >Se connecter</a></div>
                <br>
                <p class="text-faded mb-5" style="color:red !important; font-size: 17px;"><?= $erreur_se_connecter ?></p>
                <p class="text-faded mb-5"> <?= $erreur_inscription ?></p>
        </div>
    </header>


    <section id="about" class="bg-primary" style=" background-image: linear-gradient(to bottom, #f05f40, #ee5f3f ) !important;">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 mx-auto text-center">
                    <h2 class="text-white section-heading">Nous avons ce qu'il vous faut!</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">Ti-asa a tout ce dont vous avez besoin pour réussir votre carrière professionnelle et surtout trouver de bons collaborateurs pour développer votre entreprise. Tout est si simple avec ti-asa. Inscrivez-vous et profitez de nos services!</p>
                    <a class="btn btn-light btn-xl " data-toggle="modal"  href="#myModal2">S'inscrire</a>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section bg-light" id="blog-section" style="margin-top: -5%;">
        <div class="container">
            <div class="row">

                <div class="col-12 mb-5 position-relative">
                    <p class="section-title text-center mb-5" style="color: #f05f40; font-size: 50px;"> Ti-asa, pour qui?</p>
                </div>

                <div class="col-md-6 mb-5 mb-lg-0 col-lg-4" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);">
                    <div class="blog_entry">
                        <a href="#"><img src="public/IMG/1.jpg" alt="Image" class="img-fluid"></a>
                        <div class="p-4 bg-white">
                            <p><a href="#" >Pour les entreprises</a></p>
                            <p>Les entreprises auront l'occasion de trouver directement les professionnels qu'ils recherchent filtrés par leurs propres qualifications rechérchées.</p>
                            <p class="more"><a href="#">Plus <i class="fa fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5 mb-lg-0 col-lg-4" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);">
                    <div class="blog_entry">
                    <a href="#"><img src="public/IMG/2.jpg" alt="Image" class="img-fluid"></a>
                        <div class="p-4 bg-white">
                            <p><a href="#">Pour ceux qui cherchent des opportunités</a></p>
                            <p>Pour les étudiants et les professionnels toujours à la recherche de nouvelles opportunitées et de nouveaux défis dans le monde du travail.</p>
                            <p class="more"><a href="#"> Plus <i class="fa fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5 mb-lg-0 col-lg-4" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);">
                    <div class="blog_entry">
                    <a href="#"><img src="public/IMG/3.jpg" alt="Image" class="img-fluid"></a>
                        <div class="p-4 bg-white">
                            <p><a href="#">Pour les inactifs</a></p>
                            <p>Toute personne sans-travail trouvera sur ti-asa un moyen simple et rapide de trouver des offres d'emploi disponibles chez les entreprises utilisateurs ainsi que chez les particuliers recherchant du personnel.</p>
                            <p class="more"><a href="#">Plus <i class="fa fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="services" style="margin-top: -10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A votre service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-rss fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
                        <h3 class="mb-3" style="font-size:22px !important;">Recruter</h3>
                        <p class="text-muted mb-0">Trouver facilement des profils que vous recherchez par les suggestions du site . Ou Publier des Offres et attendre des candidatures.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-search fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                        <h3 class="mb-3" style="font-size:22px !important;">Trouver un emploi</h3>
                        <p class="text-muted mb-0">Fini les recherhces des offres dans des tonnes de publication que ce soit dans des journaux ou site web, Nous vous apportons les offres qui vous intêressent.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-video-camera fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                        <h3 class="mb-3" style="font-size:22px !important;">Passez vos interview en ligne</h3>
                        <p class="text-muted mb-0">Un Entretien directement via le Site Web pour ne pas perdre du temps ou pour accelerer l'embauche.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-comments fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                        <h3 class="mb-3" style="font-size:22px !important;">Discuter avec des professionnels</h3>
                        <p class="text-muted mb-0">Realiser une discussion professionnelle  pour negocier des contrats, partager des experiences ou encore pour prendre rendez-vous</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="portfolio" class="p-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters popup-gallery">
                <div class="col-sm-6 col-lg-4"><a href="public/IMG/gallery/info.jpg" class="portfolio-box"><img class="img-fluid" src="public/IMG/gallery/info.jpg"><div class="portfolio-box-caption"><div class="portfolio-box-caption-content"><div class="project-category text-faded"><span>Technologies de l'information</span></div><div class="project-name"><span>Réalisez des projets informatiques</span></div></div></div></a></div>
                <div class="col-sm-6 col-lg-4"><a href="public/IMG/gallery/Isalo.jpg" class="portfolio-box"><img class="img-fluid" src="public/IMG/gallery/Isalo.jpg"><div class="portfolio-box-caption"><div class="portfolio-box-caption-content"><div class="project-category text-faded"><span>Tourisme</span></div><div class="project-name"><span>Développons le monde du tourisme</span></div></div></div></a></div>
                <div class="col-sm-6 col-lg-4"><a href="public/IMG/gallery/construction.jpg" class="portfolio-box"><img class="img-fluid" src="public/IMG/gallery/construction.jpg"><div class="portfolio-box-caption"><div class="portfolio-box-caption-content"><div class="project-category text-faded"><span>Trauvaux</span></div><div class="project-name"><span>Valorisons les travaux publics</span></div></div></div></a></div>
                <div class="col-sm-6 col-lg-4"><a href="public/IMG/gallery/marketing.jpg" class="portfolio-box"><img class="img-fluid" src="public/IMG/gallery/marketing.jpg"><div class="portfolio-box-caption"><div class="portfolio-box-caption-content"><div class="project-category text-faded"><span>Marketing</span></div><div class="project-name"><span>Soyons fier de nos produits</span></div></div></div></a></div>
                <div class="col-sm-6 col-lg-4"><a href="public/IMG/gallery/sec.jpg" class="portfolio-box"><img class="img-fluid" src="public/IMG/gallery/sec.jpg"><div class="portfolio-box-caption"><div class="portfolio-box-caption-content"><div class="project-category text-faded"><span>Securité</span></div><div class="project-name"><span>Engagez des forts pour votre securité</span></div></div></div></a></div>
                <div class="col-sm-6 col-lg-4"><a href="public/IMG/gallery/rh.jpg" class="portfolio-box"><img class="img-fluid" src="public/IMG/gallery/rh.jpg"><div class="portfolio-box-caption"><div class="portfolio-box-caption-content"><div class="project-category text-faded"><span>Administration</span></div><div class="project-name"><span>Pouvoir recruter c'est déjà un pas</span></div></div></div></a></div>
            </div>
        </div>
    </section>


    <section class="bg-dark text-white" id="download">
        <div class="container text-center">
        <h2 class="mb-4" style="font-size:18px !important;">Vous pourrez télécharger l'application ti-asa pour android pour pouvoir se connecter à partir de votre smartphone et recevoir des notifications</h2>
        <a class="btn btn-light btn-xl sr-button" role="button" href="#" data-aos="zoom-in" data-aos-duration="400" data-aos-once="true"> <i class="fa fa-android" style="color: #3aa513 !important; font-size: 25px;"></i> Télécharger</a></div>
    </section>


    	<section id="team" class="equipe">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto text-center">
				<h2 class="section-heading">Notre équipe</h2>
				<hr class="my-4">
				</div>
			</div>
           		<div class="row">

				<div class="col-lg-3 col-md-6 " id="team">
					<div class="team layout-2">
						<div class="img-team">
							<img src="public/IMG/team/nn.jpeg" alt="">
						</div>
						<div class="padding-20px">
							<h3>MIHAINGOHERILANTO Manambintsoa</h3>
							<div class="jop">PHP developer</div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="https://github.com/Ntsoa2112"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-6">
					<div class="team layout-2">
						<div class="img-team">
							<img src="public/IMG/team/jul.jpg"  alt="">
						</div>
						<div class="padding-20px">
							<h3> RAHAJAHARIMANGA Josoa Juliano</h3>
							<div class="jop">Back-End developer</div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="https://github.com/julianojosoa13"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-6">
					<div class="team layout-2">
						<div class="img-team">
							<img src="public/IMG/team/ld.JPG"  alt="">
						</div>
						<div class="padding-20px">
							<h3>RASENDRANIRINA Manankoraisina Landry</h3>
							<div class="jop">UI and UX designer</div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="https://github.com/Landris18"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-6">
					<div class="team layout-2">
						<div class="img-team">
							<img src="public/IMG/team/gae.jpeg"  alt="">
						</div>
						<div class="padding-20px">
							<h3>SOANARINDRA Stelanony Karin</h3>
							<div class="jop">Developer | Marketing </div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="https://github.com/gaetan1903"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 gae" style="left: 25%">
					<div class="team layout-2">
						<div class="img-team">
							<img src="public/IMG/team/gae.jpeg"  alt="">
						</div>
						<div class="padding-20px">
							<h3>BAKARY Gaetan Jonathan</h3>
							<div class="jop" style="color: #01121d !important">Server Admin | Mobile Application Developer | Data Analyst</div>
							<ul class="social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a class="google" href="https://github.com/gaetan1903"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
    	</section>


    <section  style="margin-top: -10%; margin-bottom: -8%" id="contact">
        <div class="container" >
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Entrons en contact!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Avez-vous des remarques ou des suggestions? C'est génial! Appelez-nous ou envoyez-nous un email. Les remarques et les suggestions seront les bienvenues!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p>+261325398496</p>
                </div>
                <div class="col-lg-4 mr-auto text-center"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                    <p><a href="mailto:rise.ti-asa@gmail.com" style="color: #212529;">rise.ti-asa@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>





    <a href="#connecter" class="nav-link js-scroll-trigger"> <i class="fa fa-sign-in" style="background-color: #f05f40; font-size:25px ;color: #fff; padding:18px; border-radius: 50px; padding-left: 24px; padding-top: 19px;  top: 15%; margin-left: 94%; text-align: center !important; box-shadow: 0px 2px 25px 0 #f05f40; transition-duration: 0.5s;"></i> </a>


    <footer class="layout-dark" style="background-color:#212529 !important; padding-bottom: 3% !important; padding-top: 4% !important;" >
        <div class="copy-right">
            <div class="container padding-tb-50px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy-right-text text-lg-left text-center sm-mb-15px" ><a target="_blank" href="#" style="color:#fff"><b>Ti-asa service pro</b></a> </div>
                    </div>
                    <div class="col-lg-6">
                        <!--  Social -->
                        <ul class="social-media list-inline text-lg-right text-center margin-0px text-white" >
                            <li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/Ti-asa-114419079928260" style="color:#fff"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true" style="color:#fff"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="https://github.com/rise-esti"><i class="fa fa-github" aria-hidden="true" style="color:#fff"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-rss" aria-hidden="true" style="color:#fff"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-weight: bold;">Se connecter</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form id="connecter" action="index.php?action=se_connecter"  method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins !important; font-size: 15px !important;" id="email" placeholder="Email" required="required">

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins !important; font-size: 15px !important;" id="password" placeholder="Mot de passe" required="required">
                        </div>
                        <div class="form-group">
                            <input type="button" onclick="verifie_password()" name="valider_se_connecter"  style="border-radius: 25px !important;" class="btn btn-primary btn-block btn-lg" value="Se connecter">
                            <label style="color:red;font-size:11;text-align: center"></label>
                        </div>
                    </form>
                    <p class="hint-text small"><a href="#" OnClick="window.location='index.php?action=mot_de_passe_oubliee'">Mot de passe oublié?</a></p>
                </div>
            </div>
        </div>
    </div>



    <div id="myModal2" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-weight: bold;">S'inscrire</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form  action="index.php?action=inscription" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins !important; font-size: 15px !important;" name="prenom" placeholder="Prénom(s)" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins !important; font-size: 15px !important;" name="nom" placeholder="Nom(s)" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins !important; font-size: 15px !important;" name="mail" placeholder="Adresse Email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins !important; font-size: 15px !important;" name="password" placeholder="Mot de passe" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins !important; font-size: 15px !important;" name="confirmation_password" placeholder="Confirmer le mot de passe" required="required">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="valider_inscription"  style="border-radius: 25px !important;" class="btn btn-primary btn-block btn-lg" value="S'inscrire">
                        </div>
                        <script type="text/javascript" src="public/js/verification_form1.js"></script>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="public/JS/jquery.min.js"></script>
    <script src="public/js/unrechargeable_page.js"></script> <!-- sans actualiser la page -->
    <script src="public/JS/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="public/JS/creative.js"></script>
    <script src="public/JS/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>
</html>
<?php } ?>
