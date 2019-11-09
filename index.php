<?php // birthday computing
	$birth = strtotime("2001-09-12 17:13:00");
	$now = strtotime(date('Y-m-d H:i:s'));
	$age = floor(($now - $birth) / (365 * 60 * 60 * 24));
	$description = "Bonjour ! J'ai " . $age . " ans et je suis développeur.";
?>

<?php // copyright year computing
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
	<link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
	<style>
		html {
			scroll-behavior: smooth;
		}

		body {
			text-align: center;
			font-size: 1.2em;
		}

		header {
			min-height: 100vh;

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

			background-image: linear-gradient(#00000055, #00000055), url('/assets/snow-village.jpg');
			background-position: center top;
			-webkit-background-size: cover;
			background-size: cover;

			color: white;
		}

		header>* {
			z-index: 1;
		}

		header>#particles {
			position: absolute;
			z-index: 0;

			width: 100%;
			height: 100%;
		}

		.content-line {
			display: inline-block;

			height: 1px;
		}

		section {
			padding-top: 3em;
			padding-bottoM: 3em;
		}

		.nice-blue {
			background-color: #a5d4f0;
		}

		.nice-blue a {
			color: black;
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

		.link>img {
			width: 100px;
			margin-bottom: 1em;
		}

		footer {
			padding-top: 2em;
			padding-bottom: 2em;
			color: white;
		}

		footer a {
			color: white;
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
	</style>
	<meta name="theme-color" content="#010222" />
</head>

<body>
	<header class="py-5">
		<div id="particles"></div>
		<h1 class="boxes" style="font-size:5rem;">Alexis Trupin</h1>
		<p class="lead mb-3" style="font-size:3rem;">Développeur</p>
		<a href="#1">
			<img style="width:50px;" src="/assets/arrow.png" />
		</a>
	</header>
	<section id="1" class="nice-blue">
		<div class="container">
			<h1 class="display-4">Présentation</h1>
			<div class="content-line" style="background-color:black; width:100px;"></div>
			<p class="my-3">
				<?= $description ?>
				<a href="/CV_Trupin_V3.pdf">Cliquez ici pour consulter mon CV</a>.
			</p>
		</div>
	</section>
	<section class="bg-white">
		<div class="container">
			<h1 class="display-4">Portfolio</h1>
			<div class="content-line" style="background-color:black; width:100px;"></div>
			<div class="row">
				<div class="col-md-6 portfolio p-3">
					<img class="img-fluid" src="https://www.harion.fr/media/logo.png" alt="Logo Harion">
					<div>
						<h2>Harion</h2>
						<p class="mb-0">Je suis l'administrateur de Harion, un serveur de jeu ouvert depuis septembre 2016.</p>
						<p><a href="https://www.harion.fr/">Site officiel</a> - <a href="https://github.com/HydroSnow/Portfolio/blob/master/harion.md">En savoir plus</a></p>
					</div>
				</div>
				<div class="col-md-6 portfolio p-3">
					<img class="img-fluid" src="/assets/portfolio/24h.jpg" alt="Logo 24h du Code">
					<div>
						<h2>Les 24h du Code</h2>
						<p class="mb-0">Je participe a la session 2020 des 24h du Code, un concours pour les passionnés de programmation.</p>
						<p><a href="https://www.les24hducode.fr/">Site officiel</a></p>
					</div>
				</div>
				<div class="col-md-6 portfolio p-3">
					<img class="img-fluid" src="/assets/portfolio/discord.png" alt="Logo Discord">
					<div>
						<h2>Bots Discord</h2>
						<p class="mb-0">Je développe des robots sur l'application de communication Discord.</p>
						<p><a href="https://github.com/HydroSnow/Portfolio/blob/master/discord.md">En savoir plus</a></p>
					</div>
				</div>
				<div class="col-md-6 portfolio p-3">
					<img class="img-fluid" src="/assets/portfolio/manette.jpg" alt="Manette de jeux-vidéo">
					<div>
						<h2>Jeux</h2>
						<p class="mb-0">Je développe des mini-jeux durant mon temps libre.</p>
						<p><a href="https://github.com/HydroSnow/Portfolio/blob/master/jeux.md">En savoir plus</a></p>
					</div>
				</div>
			</div>
			<p>Le portfolio est actuellement incomplet. Vous pouvez consulter quelques unes de mes autres réalisations sur <a href="https://github.com/HydroSnow">github.com/HydroSnow</a>.</p>
		</div>
	</section>
	<section class="nice-blue">
		<div class="container">
			<h1 class="display-4">Contact</h1>
			<div class="content-line" style="background-color:black; width:100px;"></div>
			<div class="row">
				<div class="col-md-4 link">
					<img src="/assets/link/github2.png" />
					<h3>GitHub</h3>
					<a href="https://github.com/HydroSnow">github.com/HydroSnow</a>
				</div>
				<div class="col-md-4 link">
					<img src="/assets/link/linkedin2.png" />
					<h3>LinkedIn</h3>
					<a href="https://linkedin.com/in/trupin/">linkedin.com/in/trupin/</a>
				</div>
				<div class="col-md-4 link">
					<img src="/assets/link/mail2.png" />
					<h3>E-Mail</h3>
					<a href="mailto:trupin.alexis@gmail.com">trupin.alexis@gmail.com</a>
				</div>
			</div>
		</div>
	</section>
	<footer class="bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-4 info">
					<h4>Crédits</h4>
					<p>
						<a href="https://getbootstrap.com/">Bootstrap</a>,
						<a href="https://jquery.com/">jQuery</a>,
						<a href="https://popper.js.org/">popper.js</a>,
						<a href="https://vincentgarreau.com/particles.js/">particles.js</a>,
						<a href="https://pixabay.com/">Pixabay</a>
					</p>
				</div>
				<div class="col-md-4 info">
					<img src="/assets/aqua.png" class="rounded" style="height:90px;" />
				</div>
				<div class="col-md-4 info">
					<h4>Copyright</h4>
					<p>
						<?= $copy_year ?> &copy; Alexis Trupin</a><br />
						<a href="https://github.com/HydroSnow/trupin.dev" class="text-white">trupin.dev sur GitHub</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="/vendor/jquery-3.4.1.min.js"></script>
	<script src="/vendor/popper-1.15.0.min.js"></script>
	<script src="/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="/vendor/particles.js-2.0.0/particles.min.js"></script>
	<script>
		particlesJS.load('particles', '/assets/particles.json', async function() {
			console.log('callback - particles.js config loaded');
		});
	</script>
</body>

</html>
<!-- t'es moche, petit fouineur -->
