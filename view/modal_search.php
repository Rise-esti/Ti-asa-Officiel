<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bienvenue sur ti-asa</title>
<link rel="stylesheet" href="public/material-icon.css">
<link rel="stylesheet" href="public/font-awesome.min.css">
<link rel="stylesheet" href="public/bootstrap.min.css">
<link rel="stylesheet" href="public/topnav.css">

<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/stylee.css">


<script src="public/jquery.min.js"></script>
<script src="public/bootstrap.min.js"></script>

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

<link rel="stylesheet" type="text/css" href="public/modal.css">

<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="public/assets/fonts/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="public/bootstrap.min.css">
<style type="text/css">
	
</style>


<div class="site-wrap">
	<div class="site-section bg-light" id="services-section">
	  <div class="container">
	    <div class="row ">
	      <div class="col-12 mb-5 position-relative">
	        <p class="section-title text-center mb-5" style="font-size: 45px; font-weight:bold; color:#610f91">Bienvenue sur ti-asa</p>
	      </div>


	      <div class="container" style="margin-bottom: 12% !important; margin-top: -5% !important; margin-left:17% !important; ">
		<div class="row justify-content-center">
	  
		  <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
		    <div class="row">
		      <div class="col-lg-10">
		        <p class="text-secondary" style="margin-left: 32% !important; color: #610f91!important; font-size: 15px;">Recruter<span class="mx-3">|</span> Trouver un emploi</p>
		        <p style="font-size: 17px;"></p>
		        <p style="display: inline; "><a href="#myModal" class="btn smoothscroll btn-primary" data-toggle="modal" style="font-size: 16px; padding: 11px; border-radius: 30px; margin-left: 28%; margin-top: 3%;" > <i class="fa fa-sign-in"></i> Se connecter</a></p>
		        <p style="display: inline"><a href="#myModal2" class="btn smoothscroll btn-primary" data-toggle="modal" style="font-size: 16px; padding: 11px; border-radius: 30px; border-color: #610f91; color: #fff; margin-left: 3%; margin-top: 3%";> <i class="fa fa-pencil"></i> S'inscrire</a></p>

		        
		      </div>
		    </div>
		  </div>
		    
		</div>
		<?php
			if(isset($erreur_se_connecter)){
		?>
				<p style="margin-left:30%;color:#812"> <?= $erreur_se_connecter ?>
		<?php
			}

			if(isset($erreur_inscription)){
		?>
				<p style="margin-left:30%;color:#812"> <?= $erreur_inscription ?>
		<?php
			}
		?>  
	        </div>
	        
	
	      
	 
	      



<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title" style="font-weight: bold;">Se connecter</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="index.php?action=se_connecter" method="post">
					<div class="form-group">
						<input type="text" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="mail" placeholder="Email" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="password" placeholder="Mot de passe" required="required">
					</div>
					<div class="form-group">
						<input type="submit" name="valider_se_connecter"  style="border-radius: 25px !important;" class="btn btn-primary btn-block btn-lg" value="Se connecter">
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
						<input type="text" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="nom" placeholder="Nom" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="prenom" placeholder="Prénom" required="required">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="mail" placeholder="Email" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="password" placeholder="Mot de passe" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="confirmation_password" placeholder="Confirmer le mot de passe" required="required">
					</div>
					<div class="form-group">
						<input type="submit" name="valider_inscription"  style="border-radius: 25px !important;" class="btn btn-primary btn-block btn-lg" value="S'inscrire">
					</div>
				</form>				
				
			</div>
		</div>
	</div>
</div>     
</body>
</html>                                                        