
<?php
	$birth = strtotime("2001-09-12 17:13:00");
	$now = strtotime(date('Y-m-d H:i:s'));
	$age = floor(($now - $birth) / (365 * 60 * 60 * 24));
	$description = "Je suis un développeur de " . $age . " ans.";

	$start_year = "2019";
	$current_year = date("Y");
	if ($start_year == $current_year) {
		$copy_year = $start_year;
	} else {
		$copy_year = $start_year . " - " . $current_year;
	}
?>

<!doctype html>
<html lang="fr-FR">

<head>
	<title>Alexis Trupin</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="<?= $description ?>" />
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
	<style>
		body {
			text-align: center;
		}

		header {
			min-height: 100vh;

			background-image: linear-gradient(rgba(0, 0, 0, 0.7),
					rgba(0, 0, 0, 0.7)), url('/img/code2.jpg');
			background-position: center top;
			-webkit-background-size: cover;
			background-size: cover;

			display: -ms-flexbox;
			display: -webkit-box;
			display: flex;

			flex-direction: column;

			-ms-flex-align: center;
			-ms-flex-pack: center;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
		}

		header #particles {
			position: absolute;
			width: 100%;
			height: 100%;

			z-index: 0;
		}

		header #boxes {
			z-index: 1;
		}

		#trupixel {
			height: 250px;
		}

		header #boxes p {
			margin-bottom: 16px;
		}

		.content-line {
			display: inline-block;

			height: 1px;
			width: 100px;

			background-color: black;
		}

		section {
			padding-top: 3em;
			padding-bottoM: 3em;
		}

		.portfolio {
			display: flex;
			padding: 1em;
			margin-top: 1em;
			margin-bottom: 1em;
		}

		.portfolio>img {
			height: 6em;
		}

		.portfolio>div {
			text-align: left;
			padding-left: 1em;
		}

		.link {
			margin-top: 2em;
			margin-bottom: 2em;
		}

		.link img {
			width: 20%;
			margin-bottom: 1em;
		}

		footer {
			padding-top: 2em;
			padding-bottom: 2em;
		}

		.info {
			margin-top: 1em;
			margin-bottom: 1em;
		}

		footer h4 {
			margin-bottom: 0.6em;
		}

		p {
			margin: 0;
		}

		.bg-light {
			background-color: #EEF !important;
		}
	</style>
</head>

<body>
	<header class="text-white">
		<div id="particles"></div>
		<div id="boxes" class="py-5">
			<img id="trupixel" src="/img/trupixel_512.png" />
			<h1 style="font-size:5rem;">Alexis Trupin</h1>
			<p class="lead" style="font-size:3rem;">Développeur</p>
			<a href="#1">
				<img style="width:3em;" src="/img/arrow.png" />
			</a>
		</div>
	</header>
	<section id="1" class="bg-light">
		<div class="container">
			<h1 class="display-4">Présentation</h1>
			<div class="content-line"></div>
			<p class="lead m-3">
				<?= $description ?> <br />
				<a href="/CV_Trupin_V3.pdf">Cliquez ici pour consulter mon CV</a>
			</p>
		</div>
	</section>
	<section class="bg-white">
		<div class="container">
			<h1 class="display-4">Portfolio</h1>
			<div class="content-line"></div>
			<div class="row">
				<div class="col-12 col-md-6 portfolio p-3">
					<img class="img-fluid" src="/img/portfolio/discord.png" alt="Logo Discord">
					<div>
						<h2>Bots Discord</h2>
						<p class="mb-0">todo: description</p>
						<p><a href="https://github.com/HydroSnow/Portfolio/blob/master/discord.md">En savoir plus...</a></p>
					</div>
				</div>
				<div class="col-12 col-md-6 portfolio p-3">
					<img class="img-fluid" src="/img/portfolio/fromage.jpg" alt="Fromage">
					<div>
						<h2>Les Fromageries Wankul</h2>
						<p class="mb-0">todo: description</p>
						<p><a href="https://github.com/HydroSnow/Portfolio/blob/master/wankul.md">En savoir plus...</a></p>
					</div>
				</div>
				<div class="col-12 col-md-6 portfolio p-3">
					<img class="img-fluid" src="/img/portfolio/aedificantes.jpg" alt="Logo Aedificantes">
					<div>
						<h2>Stage chez Aedificantes</h2>
						<p class="mb-0">todo: description</p>
						<p><a href="https://github.com/HydroSnow/Portfolio/blob/master/aedificantes.md">En savoir plus...</a></p>
					</div>
				</div>
				<div class="col-12 col-md-6 portfolio p-3">
					<img class="img-fluid" src="/img/portfolio/24h.jpg" alt="Logo 24h du Code">
					<div>
						<h2>Les 24h du Code 2020</h2>
						<p class="mb-0">todo: description</p>
						<p><a href="https://github.com/HydroSnow/Portfolio/blob/master/24h.md">En savoir plus...</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-light">
		<div class="container">
			<h1 class="display-4">Contact</h1>
			<div class="content-line"></div>
			<div class="row">
				<div class="col-sm-6 col-md-4 link">
					<img src="/img/link/github2.png" />
					<h3>GitHub</h3>
					<a href="https://github.com/HydroSnow">github.com/HydroSnow</a>
				</div>
				<div class="col-sm-6 col-md-4 link">
					<img src="/img/link/linkedin2.png" />
					<h3>LinkedIn</h3>
					<a href="https://linkedin.com/in/trupin/">linkedin.com/in/trupin/</a>
				</div>
				<div class="col-sm-6 col-md-4 link">
					<img src="/img/link/mail2.png" />
					<h3>E-Mail</h3>
					<a href="mailto:trupin.alexis@gmail.com">trupin.alexis@gmail.com</a>
				</div>
			</div>
		</div>
	</section>
	<footer class="bg-dark text-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 info">
					<h4>Crédits</h4>
					<p>
						<a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>,
						<a href="https://jquery.com/" class="text-white">jQuery</a>, <br />
						<a href="https://popper.js.org/" class="text-white">popper.js</a>,
						<a href="https://vincentgarreau.com/particles.js/" class="text-white">particles.js</a>
					</p>
				</div>
				<div class="col-sm-4 info">
					<h4>Copyright</h4>
					<p>
						<?= $copy_year ?> &copy; Alexis Trupin</a><br />
						<a href="https://github.com/HydroSnow/trupin.dev/blob/master/LICENSE" class="text-white">Licence MIT</a>
					</p>
				</div>
				<div class="col-sm-4 info">
					<h4>Sources</h4>
					<p>
						<a href="https://github.com/HydroSnow/trupin.dev" class="text-white">trupin.dev sur GitHub</a> <br />
						<a href="https://github.com/HydroSnow/Portfolio" class="text-white">Portfolio sur GitHub</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="/lib/jquery-3.4.1.min.js"></script>
	<script src="/lib/popper-1.15.0.min.js"></script>
	<script src="/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="/lib/particles.js-2.0.0/particles.min.js"></script>
	<script>
		particlesJS.load('particles', '/lib/particles.js-2.0.0/particles.json', function() {
			console.log('callback - particles.js config loaded');
		});
	</script>
</body>

</html>
<!-- t'es moche, petit fouineur -->
