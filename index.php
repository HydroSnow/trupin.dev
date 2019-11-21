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

<?php // disable particles
	if (!isset($_COOKIE["particles"])) {
		$_COOKIE["particles"] = 1;
	}

	if ($_COOKIE["particles"] == 1) {
		$particles = true;
		echo("<!-- particles enabled -->");
	} else {
		$particles = false;
		echo("<!-- particles disabled -->");
	}
?>

<!doctype html>
<html lang="fr-FR">

<head>
	<title>Alexis Trupin</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="<?= $description ?>" />
	<meta name="theme-color" content="#010222" />
	<link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/portfolio.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/contact.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/footer.css" />
</head>

<body>
	<p id="particles-switch">
		<?php if ($particles) { ?>
			<button id="disable-particles" type="button" class="btn btn-success">Particules</button>
			<script>
				document.getElementById("disable-particles").onclick = function() {
					document.cookie = "particles=0";
					document.location.reload(false);
					return false;
				}
			</script>
		<?php } else { ?>
			<button id="enable-particles" type="button" class="btn btn-danger">Particules</button>
			<script>
				document.getElementById("enable-particles").onclick = function() {
					document.cookie = "particles=1";
					document.location.reload(false);
					return false;
				}
			</script>
		<?php } ?>
	</p>
	<header class="py-5">
		<?php if ($particles) { ?> <div id="particles"></div> <?php } ?>
		<h1 class="header-content" style="font-size:5rem;">Alexis Trupin</h1>
		<p class="lead mb-3 header-content" style="font-size:3rem;">Développeur</p>
		<a class="header-content" href="#1">
		    <img style="width:50px;" src="/assets/arrow.png" />
		</a>
	</header>
	<section id="1" class="section-blue">
		<div class="container">
			<h1 class="display-4">Présentation</h1>
			<div class="content-line" style="background-color:black; width:100px;"></div>
			<p class="my-3">
				<?= $description ?>
				<a href="/CV_Trupin_V3.pdf">Cliquez ici pour consulter mon CV</a>.
			</p>
		</div>
	</section>
	<section class="section-white">
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
	<section class="section-blue">
		<div class="container">
			<h1 class="display-4">Contact</h1>
			<div class="content-line" style="background-color:black; width:100px;"></div>
			<div class="row">
				<div class="col-md-4 contact">
					<img src="/assets/link/github.svg" />
					<h3>GitHub</h3>
					<a href="https://github.com/HydroSnow">github.com/HydroSnow</a>
				</div>
				<div class="col-md-4 contact">
					<img src="/assets/link/linkedin.svg" />
					<h3>LinkedIn</h3>
					<a href="https://linkedin.com/in/trupin/">linkedin.com/in/trupin</a>
				</div>
				<div class="col-md-4 contact">
					<img src="/assets/link/mail.svg" />
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
						<a href="https://github.com/HydroSnow/trupin.dev">trupin.dev sur GitHub</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<?php if ($particles) { ?>
		<script src="/node_modules/particles.js/particles.js"></script>
		<script>
			particlesJS.load('particles', '/assets/particles.json', async function() {
				console.log('callback - particles.js config loaded');
			});
		</script>
	<?php } ?>
</body>

</html>
<!-- t'es moche, petit fouineur -->
