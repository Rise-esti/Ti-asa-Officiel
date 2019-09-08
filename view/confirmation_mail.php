<!DOCTYPE html>
<html lang="en">
<head>

	<title>Code de confirmation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="public/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="public/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/css/main2.css">
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
			<a class="navbar-brand " style="margin-top:0.9% !important; margin-left: 3%;" href="topnav.php"><i class="fa fa-rss" ></i><b class="ti">Ti-asa</b></a>
		</nav>
		<div class="container-contact100">
			<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
				<div class="wrap-contact100" style="display: block">
					<form class="contact100-form validate-form" action="index.php?action=confirmation_mail&amp;mail=<?= $mail?>" method="POST">
						<span class="contact100-form-title">
							Code de confirmation
						</span>
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Veuillez entrer le code">
							<span class="label-input100">Nous avons envoyés un code à 6 chiffres à votre adresse email. Veuillez le saisir ici pour confirmer votre compte.</span>
							<input style="font-size:15px;" class="input100" type="text" name="mot_confirmation" placeholder="">
							<span class="focus-input100"></span>
						</div>
						<div class="container-contact100-form-btn" >
							<button class="contact100-form-btn" type="submit" name="confirm_mail">
								Confirmer
							</button>
						</div>
					</form>
					<?php
					$conf = true;
					if(!empty($notification)){
						echo "$notification<br>";
					}
					?>

					<span class="contact100-more">
						Code non réçu ? <span class="contact100-more-highlight" style="font-weight: bold !important; cursor: pointer"> Cliquez ici</span>
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

	<script src="public/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="public/vendor/animsition/js/animsition.min.js"></script>
	<script src="public/vendor/bootstrap/js/popper.js"></script>
	<script src="public/vendor/select2/select2.min.js"></script>
	<script src="public/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="public/vendor/countdowntime/countdowntime.js"></script>
	<script src="public/js/map-custom.js"></script>
	<script src="public/js/main.js"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
