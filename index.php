<!DOCTYPE html>
<html>
<head>
	<title>Arthur LEVEQUE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/fa688e7845.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="icon" href="img/logo-arthur.ico" />
</head>
<body>
	<?php session_start(); ?>
	
	<?php require('req/header.php'); ?>
	<?php require('req/nav.php'); ?>

	<main>
		<div class="transition-to-main"></div>
		<?php require('req/about.php'); ?>

		<?php require('req/visitor_counter.php'); ?>

		<div class="parallax" style="background-image: url('img/ordi_portable.png');">
			<div class="counters">
				<div class="counter-bloc">
					<div class="counter-icon">
						<i class="fas fa-stopwatch"></i>
					</div>
					<div class="counter-text">
						<p class="counter" data-count="<?php echo round($joursCreation); ?>">0</p>
						<p class="counter-label">Jours depuis la mise en ligne du site</p>
					</div>
				</div>
				<div class="counter-bloc">
					<div class="counter-icon">
						<i class="fas fa-users"></i>
					</div>
					<div class="counter-text">
						<p class="counter" data-count="<?php echo $compte; ?>">0</p>
						<p class="counter-label">Visiteurs depuis la mise en ligne du site</p>
					</div>
				</div>
			</div>
    	</div>

		<?php require('req/skills.php'); ?>

		<div class="parallax" style="background-image: url('img/code.jpg');">
			<div class="tools">
				<p>Environnements de travail :</p>
				<div class="working-environments">
					<div class="working-environment">
						<p>Système d'exploitation</p>
						<i class="fab fa-windows"></i>
						<p>Windows</p>
					</div>

					<div class="working-environment">
						<p>Éditeur de texte</p>
						<i class="fas fa-ribbon vsc"></i>
						<p>Visual Studio Code</p>
					</div>
				</div>
			</div>
    	</div>
		
		<?php require('req/experiences.php'); ?>

		<div class="parallax" style="background-image: url('img/work.jpg');">
			<img src="img/logo-arthur.png" alt="logo Arthur LEVEQUE">
    	</div>

		<?php require('req/contact.php'); ?>

	</main>

	<script src="js/active-nav.js"></script>
	<script src="js/landingpage-arrow.js"></script>
	<script src="js/smooth-anchor.js"></script>
	<script src="js/loading.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/panels.js"></script>
</body>
</html>