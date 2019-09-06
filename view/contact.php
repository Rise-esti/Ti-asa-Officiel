<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="public/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/css/main2.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="public/material-icon.css">
<link rel="stylesheet" href="public/font-awesome.min.css">
<link rel="stylesheet" href="public/bootstrap.min.css">
<link rel="stylesheet" href="public/topnav.css">
<script src="public/jquery.min.js"></script>
<script src="public/bootstrap.min.js"></script>

	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/assets/css/style.css">
	<link rel="stylesheet" href="public/assets/fonts/font-awesome/css/font-awesome.min.css">
</head>
<body>


		<nav class="navbar navbar-default navbar-expand-lg navbar-light">
				<div class="navbar-header d-flex col">
					<a class="navbar-brand "  style="margin-top:4.1% !important" href="topnav.html"><i class="fa fa-rss" ></i><b class="ti">ti-</b><b>asa</b></a>  		
					<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
						
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collection of nav links, forms, and other content for toggling -->
				<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
					<ul class="nav navbar-nav">			
					</ul>
					<ul class="nav navbar-nav navbar-right ml-auto">	
						<li class="nav-item"><a href="index.php?action=nous_contacter" class="nav-link"> <i class="fa fa-telegram"></i> Nous contacter</a></li>					
						<li class="nav-item">
							<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#"> <i class="fa fa-sign-in"></i> Se connecter</a>
							<ul class="dropdown-menu form-wrapper">					
								<li>
								<form action="index.php?action=se_connecter" method="post">
									<div class="form-group" >
										<input type="mail" class="form-control" name="mail" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" placeholder="Email"  required="required">
									</div> 
									<div class="form-group">
										<input type="password" class="form-control" name="password" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" placeholder="Mot de passe" required="required">
									</div>
									<input type="submit" class="btn btn-primary btn-block" name="valider_se_connecter" value="Se connecter">
									<div class="form-footer">
										<a href="index.php?action=mot_de_passe_oubliee">Mot de passe oublié?</a>
									</div>
								</form>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1"><i class="fa fa-pencil"></i> S'inscrire</a>
							<ul class="dropdown-menu form-wrapper">					
								<li>
								<form action="index.php?action=inscription" method="post">
									<div class="form-group ">
										<input  type="text" class="form-control"  style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="nom" placeholder="Nom" required="required">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" prenom="prenom" placeholder="Prénom" required="required">
									</div>
									<div class="form-group">
										<input type="mail" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="mail" placeholder="Email" required="required">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="password" placeholder="Mot de passe" required="required">
									</div>
									<div class="form-group">
										<input type="password" class="form-control"style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="confirmation_password"  placeholder="Confirmer mot de passe" required="required">
									</div>
									<div class="form-group">
										<label class="checkbox-inline"><input type="checkbox" required="required"> <span style="font-family: Poppins-Regular">J'accepte </span><a href="#" style="font-size:15px; color: #610f91 !important;">les termes &amp; Conditions</a></label>
									</div>
									<input type="submit" class="btn btn-primary btn-block" name="valider_inscription" value="S'inscrire">
								</form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
		</nav>



	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Nous contacter
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Veuillez saisir votre nom">
					<span class="label-input100">Nom</span>
					<input style="font-size:15px;" class="input100"   type="text" name="name" placeholder="Entrer votre nom">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Veuillez saisir un email correct: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input style="font-size:15px;" class="input100" type="text" name="email" placeholder="Entrer votre adreese email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Veuillez saisir votre message">
					<span class="label-input100">Message</span>
					<textarea style="font-size:15px;"  class="input100" name="message" placeholder="Votre message ici..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Envoyer
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>

			<span class="contact100-more">
				Avez-vous des questions: <span class="contact100-more-highlight">0329903072</span>
			</span>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<footer class="layout-dark">
		<div class="copy-right">
			<div class="container padding-tb-50px">
				<div class="row">
					<div class="col-lg-6">
						<div class="copy-right-text text-lg-left text-center sm-mb-15px"><a target="_blank" href="#"><b>Ti-asa service pro</b></a> </div>
					</div>
					<div class="col-lg-6">
						<!--  Social -->
						<ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
						<!-- // Social -->
					</div>
				</div>
			</div>
		</div>
	</footer>

<!--===============================================================================================-->
	<script src="public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/bootstrap/js/popper.js"></script>
	<!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
<!--===============================================================================================-->
	<script src="public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

	<script src="public/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="public/js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
