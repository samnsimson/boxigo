<?php 

require_once($_SERVER['DOCUMENT_ROOT'].'/boxigo/functions.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo path(); ?>/components/bootstrap/dist/css/bootstrap-material.min.css">
	<link href="<?php echo path(); ?>/components/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" type="text/css" /> 
	<link href="<?php echo path(); ?>/components/smartwizard/dist/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo path(); ?>/components/datepicker/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo path(); ?>/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo path(); ?>">Boxigo</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Offers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Customer Support</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">For Service Providers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light btn btn-sm btn-success" href="#">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>