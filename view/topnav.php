<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bienvenu sur ti-asa</title>
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
<script type="text/javascript">
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
		e.stopPropagation();
	});
</script>
</head> 
<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand " href="topnav.html"><i class="fa fa-rss"></i><b class="ti">ti-</b><b>asa</b></a>  		
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
								<input type="text" class="form-control" style="border-right: none !important; border-left: none !important; border-top:none !important; font-family: Poppins-Regular !important; font-size: 14px !important;" name="prenom" placeholder="Prénom" required="required">
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

<div class="site-wrap">

	
         
	
      
      
	<div class="site-section bg-light" id="services-section">
	  <div class="container">
	    <div class="row ">
	      <div class="col-12 mb-5 position-relative">
	        <p class="section-title text-center mb-5" style="font-size: 45px; font-weight:bold; color:#610f91">Bienvenu sur  <i class="fa fa-rss"></i>Ti-asa</p>
	      </div>


	      <div class="container" style="margin-bottom: 12% !important; margin-top: -5% !important; margin-left:17% !important; ">
		<div class="row justify-content-center">
	  
		  <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
		    <div class="row">
		      <div class="col-lg-10">
		        <p class="text-secondary" style="margin-left: 32% !important; color: #610f91!important; font-size: 15px;">Recruter<span class="mx-3">|</span> Trouver  de l'emploi</p>
		        <p style="font-size: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptate dolore, nostrum inventore quisquam totam dignissimos culpa! Eveniet.</p>
		        <p style="display: inline; "><a href="#myModal" class="btn smoothscroll btn-primary" data-toggle="modal" style="font-size: 16px; padding: 11px; border-radius: 30px; margin-left: 28.2%; margin-top: 3%;" > <i class="fa fa-sign-in"></i> Se connecter</a></p>
		        <p style="display: inline"><a href="#myModal2" class="btn smoothscroll btn-primary-outline" data-toggle="modal" style="font-size: 16px; padding: 11px; border-radius: 30px; border-color: #610f91; color: #610f91; margin-left: 3%; margin-top: 3%"> <i class="fa fa-pencil"></i> S'inscrire</a></p>

		        
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
	        
	
	      
	 
	      <div class="col-md-6 mb-4">
	        <div class="service d-flex h-100">
		<div class="service-number mr-4"><i class="fa fa-rss" style="color: #610f91 !important; font-size: 50px;"></i></div>
		<div class="service-about">
		  <p style="font-size: 18px" >Recruter</p>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aperiam repudiandae quis ipsa quod, reprehenderit iusto laudantium.</p>
		</div>
	        </div>
	      </div>
	
	      <div class="col-md-6 mb-4">
	        <div class="service d-flex h-100">
		<div class="service-number mr-4"><i class="fa fa-sliders" style="color: #610f91 !important; font-size: 50px;"></i></div>
		<div class="service-about">
		  <p style="font-size: 18px;" >Trouver de l'emploi </p>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aperiam repudiandae quis ipsa quod, reprehenderit iusto laudantium.</p>
		</div>
	        </div>
	      </div>
	
	      <div class="col-md-6 mb-4">
	        <div class="service d-flex h-100">
		<div class="service-number mr-4"><i class="fa fa-file" style="color: #610f91 !important; font-size: 50px;"></i></div>
		<div class="service-about">
		  <p style="font-size: 18px">Interview en ligne</p>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aperiam repudiandae quis ipsa quod, reprehenderit iusto laudantium.</p>
		</div>
	        </div>
	      </div>
	
	      <div class="col-md-6 mb-4">
	        <div class="service d-flex h-100">
		<div class="service-number mr-4"><i class="fa fa-car" style="color: #610f91 !important; font-size: 50px;"></i></div>
		<div class="service-about">
		  <p style="font-size: 18px">Discussion professionnelle</p>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aperiam repudiandae quis ipsa quod, reprehenderit iusto laudantium.</p>
		</div>
	        </div>
	      </div>
	
	    </div>
	  </div>
	</div>
      
      
      
	
	<section class="site-section bg-light" id="blog-section" style="margin-top: -5%;">
	  <div class="container">
	    <div class="row">
	      
	      <div class="col-12 mb-5 position-relative">
	        <p class="section-title text-center mb-5" style="color: #610f91; font-size: 50px;"> Ti-asa, pour qui?</p>
	      </div>
      
	      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
	        <div class="blog_entry">
		<a href="single.html"><img src="public/images/img_4.jpg" alt="Image" class="img-fluid"></a>
		<div class="p-4 bg-white">
		  <p><a href="single.html" >Pour les entreprises</a></p>
		  <span class="date">April 25, 2019</span>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit reprehenderit adipisci sed perferendis quia iure, aperiam ab?.</p>
		  <p class="more"><a href="single.html">Plus <i class="fa fa-arrow-right"></i></a></p>
		</div>
	        </div>
	      </div>
      
	      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
	        <div class="blog_entry">
		<a href="single.html"><img src="public/images/img_4.jpg" alt="Image" class="img-fluid"></a>
		<div class="p-4 bg-white">
		  <p><a href="single.html">Pour ceux qui cherchent des opportunités</a></p>
		  <span class="date">April 25, 2019</span>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit reprehenderit adipisci sed perferendis quia iure, aperiam ab?.</p>
		  <p class="more"><a href="single.html"> Plus <i class="fa fa-arrow-right"></i></a></p>
		</div>
	        </div>
	      </div>
      
	      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
	        <div class="blog_entry">
		<a href="single.html"><img src="public/images/img_4.jpg" alt="Image" class="img-fluid"></a>
		<div class="p-4 bg-white">
		  <p><a href="single.html">Pour les professionnels de travail</a></p>
		  <span class="date">April 25, 2019</span>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit reprehenderit adipisci sed perferendis quia iure, aperiam ab?.</p>
		  <p class="more"><a href="single.html">Plus <i class="fa fa-arrow-right"></i></a></p>
		</div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
</div> <!-- .site-wrap -->

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