<!doctype html>
<html lang="fr-FR">
	<head>
		<title>Alexis Trupin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="icon" type="image/x-icon" href="/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
		<style>
			body {
				text-align: center;
			}

			header {
				min-height: 100vh;

				background-image: linear-gradient(
					rgba(0, 0, 0, 0.6),
					rgba(0, 0, 0, 0.6)
				), url('/img/code.jpg');
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

			section {
				padding-top: 3em;
				padding-bottoM: 3em;
			}

			.link {
				margin-top: 2em;
				margin-bottom: 2em;
			}

			.link img {
				width: 30%;
				margin-bottom: 1em;
			}

			.portfolio {
				display: flex;
				padding: 1em;
				margin-top: 1em;
				margin-bottom: 1em;
			}

			.portfolio > img {
				height: 6em;
			}

			.portfolio > div {
				text-align: left;
				padding-left: 1em;
			}

			footer {
				padding-top: 2em;
				padding-bottom: 1em;
			}

			.info {
				margin-top: 1em;
				margin-bottom: 1em;
			}

		</style>
	</head>
	<body>
		<header>
			<div id="particles"></div>
			<div id="boxes" class="text-white">
				<h1 style="font-size:5rem;">Alexis Trupin</h1>
				<p class="lead" style="font-size:3rem;">Développeur</p>
				<a href="#1">
					<img style="width:3em;" src="/img/arrow.png" />
				</a>
			</div>
		</header>
		<section id="1" class="bg-primary">
			<div class="container text-white">
				<div class="row">
					<div class="col-sm-6 col-md-4 link">
						<img src="/img/link/github.png" />
						<h3>GitHub</h3>
						<a href="https://github.com/HydroSnow" class="text-white">github.com/HydroSnow</a>
					</div>
					<div class="col-sm-6 col-md-4 link">
						<img src="/img/link/linkedin.png" />
						<h3>LinkedIn</h3>
						<a href="https://linkedin.com/in/trupin/" class="text-white">linkedin.com/in/trupin/</a>
					</div>
					<div class="col-sm-6 col-md-4 link">
						<img src="/img/link/mail.png" />
						<h3>E-Mail</h3>
						<a href="mailto:trupin.alexis@gmail.com" class="text-white">trupin.alexis@gmail.com</a>
					</div>
				</div>
			</div>
		</section>
		<section id="2" class="bg-white">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>Portfolio</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 portfolio p-3">
						<img class="img-fluid" src="/img/portfolio/discord.png" alt="Logo Discord">
						<div>
							<h2><a href="#" class="text-dark">Bots Discord</a></h2>
							<p class="mb-0">todo: description</p>
						</div>
					</div>
					<div class="col-12 col-md-6 portfolio p-3">
						<img class="img-fluid" src="/img/portfolio/fromage.jpg" alt="Fromage">
						<div>
							<h2><a href="#" class="text-dark">Les Fromageries Wankul</a></h2>
							<p class="mb-0">todo: description</p>
						</div>
					</div>
					<div class="col-12 col-md-6 portfolio p-3">
						<img class="img-fluid" src="/img/portfolio/aedificantes.jpg" alt="Logo Aedificantes">
						<div>
							<h2><a href="#" class="text-dark">Stage chez Aedificantes</a></h2>
							<p class="mb-0">todo: description</p>
						</div>
					</div>
					<div class="col-12 col-md-6 portfolio p-3">
						<img class="img-fluid" src="/img/portfolio/24h.jpg" alt="Logo 24h du Code">
						<div>
							<h2><a href="#" class="text-dark">Les 24h du Code</a></h2>
							<p class="mb-0">todo: description</p>
						</div>
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
							<a href="https://jquery.com/" class="text-white">jQuery</a>,
							<a href="https://popper.js.org/" class="text-white">popper.js</a>,
							<a href="https://vincentgarreau.com/particles.js/" class="text-white">particles.js</a>
						</p>
					</div>
					<div class="col-sm-4 info">
						<h4>Copyright</h4>
						<?php $b = "2019"; $n = date("Y"); $copy_year = ($n == $b ? $b : $b . " - " . $n); ?>
						<p><a href="https://github.com/HydroSnow/trupin.dev/blob/master/LICENSE" class="text-white"><?= $copy_year ?> &copy; Alexis Trupin</a></p>
					</div>
					<div class="col-sm-4 info">
						<h4>Source</h4>
						<p><a href="https://github.com/HydroSnow/trupin.dev" class="text-white">github.com/trupin.dev</a></p>
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
