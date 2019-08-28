<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Navbar Dropdown Login and Signup Form with Social Buttons</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/topnav.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		<a class="navbar-brand" href="#">ti-<b>asa</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Nous contacter</a></li>			
		</ul>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Rechercher...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Se connecter</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="index.php?action=se_connecter" method="post">
							<div class="form-group">
								<input type="mail" class="form-control" placeholder="Email" name="mail" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Mot de passe" name="password" required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Login" name="valider_se_connecter">
							<div class="form-footer">
								<a href="#">Mot de passe oublié?</a>
							</div>
							<?php

								if(isset($_GET["erreur_se_connecter"])){
									$erreur_se_connecter = htmlspecialchars($_GET["erreur_se_connecter"]);
									echo $erreur_se_connecter;
								}
							?>
						</form>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">S'inscrire</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="index.php?action=inscription" method="post">
							<p class="hint-text">Entrer les informations nécessaires</p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nom" name="nom" required="required">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Prénom" name="prenom" required="required">
							</div>
							<div class="form-group">
								<input type="mail" class="form-control" placeholder="Email" name="mail" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password" name="confirmation_password" required="required">
                            </div>
							<div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" required="required"> J'accepte <a href="#">les termes &amp; Conditions</a></label>
                            </div>
							<input type="submit" class="btn btn-primary btn-block" value="Sign up" name="valider_inscription">
							<?php
							if(isset($_GET["erreur_inscription"])){
								$erreur_inscription = htmlspecialchars($_GET["erreur_inscription"]);
								echo $erreur_inscription;
							}
							?>
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
</body>
</html>                                                        