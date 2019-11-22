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

<?php // mobile_detect load
	require_once("vendor/mobile_detect/Mobile_Detect.php");
	$detect = new Mobile_Detect;
?>

<?php // disable particles
	if (!isset($_COOKIE["particles"])) {
		if (!$detect->isMobile() && !$detect->isTablet()) {
			setcookie("particles", 1);
			$particles = true;
			echo("<!-- auto-detect: particles enabled -->");
		} else {
			setcookie("particles", 0);
			$particles = false;
			echo("<!-- auto-detect: particles disabled -->");
		}
	} else {
		if ($_COOKIE["particles"] == 1) {
			$particles = true;
			echo("<!-- particles enabled -->");
		} else {
			$particles = false;
			echo("<!-- particles disabled -->");
		}
	}
?>

<!doctype html>
<html lang="fr-FR">

<head>
	<title>Alexis Trupin</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="<?= $description ?>" />
	<meta name="theme-color" content="#01021b" />
	<link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
	<?php if ($particles) { ?> <link rel="stylesheet" type="text/css" href="/assets/css/particles.css" /> <?php } ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/cardboard.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/footer.css" />
</head>

<body>
	<div class="modal fade" id="mail-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">E-Mail</h5>
			</div>
			<div class="modal-body">
				<a href="mailto:trupin.alexis@gmail.com" target="new">trupin.alexis@gmail.com</a>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
	</div>

	<header class="py-5 white-links">
		<?php if ($particles) { ?> <div id="particles"></div> <?php } ?>

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

		<h1 style="font-size:5rem;">Alexis Trupin</h1>
		<p class="lead mb-3" style="font-size:2rem;"><?= $description ?></p>
		<a href="#1">
		    <img style="width:50px;" src="/assets/arrow.png" alt="Vers le bas" />
		</a>
	</header>
	<section class="py-5 bg-white white-links" id="1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-1">
					<a href="https://github.com/HydroSnow" target="new" class="cardboard cardboard-github">
						<img src="/assets/cardboard/github.png" alt="Logo GitHub" />
						<div>
							<h3>GitHub<h3>
						</div>
					</a>
				</div>
				<div class="col-lg-6 p-1">
					<a href="https://www.linkedin.com/in/trupin/" target="new" class="cardboard cardboard-linkedin">
						<img src="/assets/cardboard/linkedin.png" alt="Logo LinkedIn" />
						<div>
							<h3>LinkedIn<h3>
						</div>
					</a>
				</div>
				<div class="col-lg-6 p-1">
					<a href="/CV_Trupin_V3.pdf" target="new" class="cardboard cardboard-cv">
						<img src="/assets/cardboard/cv.png" alt="Icône CV" />
						<div>
							<h3>CV<h3>
						</div>
					</a>
				</div>
				<div class="col-lg-6 p-1">
					<a href="https://portfolio.trupin.dev/" target="new" class="cardboard cardboard-portfolio">
						<img src="/assets/cardboard/portfolio.png" alt="Logo GitHub" />
						<div>
							<h3>Portfolio<h3>
						</div>
					</a>
				</div>
				<div class="col-lg-6 p-1">
					<a href="#" onclick="$('#mail-modal').modal(); return false;" class="cardboard cardboard-mail">
						<img src="/assets/cardboard/mail.png" alt="Logo GitHub" />
						<div>
							<h3>E-Mail<h3>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<footer class="bg-dark white-links">
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
					<img src="/assets/aqua.png" style="width:100px;" alt="Fille d'anime qui crie" />
				</div>
				<div class="col-md-4 info">
					<h4>Copyright</h4>
					<p>
						<?= $copy_year ?> &copy; Alexis Trupin</a>,
						<a href="https://github.com/HydroSnow/trupin.dev">trupin.dev sur GitHub</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha256-x3YZWtRjM8bJqf48dFAv/qmgL68SI4jqNWeSLMZaMGA=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>
	<?php if ($particles) { ?>
		<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js" integrity="sha256-icjghcPaibMf1jv4gQIGi5MeWNHem2SispcorCiCfSg=" crossorigin="anonymous"></script>
		<script>
			particlesJS.load('particles', '/assets/particles.json', async function() {
				console.log('callback - particles.js config loaded');
			});
		</script>
	<?php } ?>
</body>

</html>
<!-- t'es moche, petit fouineur -->
