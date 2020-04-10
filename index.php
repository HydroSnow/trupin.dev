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
	require_once("vendor/Mobile_Detect.php");
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
	<title>Accueil | Alexis Trupin</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="<?= $description ?>" />
	<meta name="theme-color" content="#01021b" />
	<link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
	<?php if ($particles) { ?> <link rel="stylesheet" type="text/css" href="/assets/css/particles.css" /> <?php } ?>
</head>

<body>
	<header>
		<div id="particles-switch">
			<?php if ($particles) { ?>
				<p><a id="disable-particles" href="#">Désactiver les particules</a></p>
				<script>
					document.getElementById("disable-particles").onclick = function() {
						document.cookie = "particles=0";
						document.location.reload(false);
						return false;
					}
				</script>
			<?php } else { ?>
				<p><a id="enable-particles" href="#">Activer les particules</a></p>
				<script>
					document.getElementById("enable-particles").onclick = function() {
						document.cookie = "particles=1";
						document.location.reload(false);
						return false;
					}
				</script>
			<?php } ?>
		</div>
		<?php if ($particles) { ?> <div id="particles"></div> <?php } ?>
		<img style="width:250px; margin-bottom:24px;" src="/assets/hy.png" alt="Logo Alexis Trupin" />
		<h1>Alexis Trupin</h1>
		<a href="#1">
		    <img style="width:75px;" src="/assets/arrow.png" alt="Vers le bas" />
		</a>
	</header>

	<div class="black" id="1">
		<h2><?= $description ?></h2>
	</div>

	<section>
		<div class="cardboard" style="background-image: url('/assets/cardboard/github-back.jpg');">
			<a href="https://github.com/HydroSnow">
				<img src="/assets/cardboard/github.png" alt="Logo GitHub" />
				<div>
					<h3>GitHub<h3>
				</div>
			</a>
		</div>
		<div class="cardboard" style="background-image: url('/assets/cardboard/portfolio-back.jpg');">
			<a href="https://portfolio.trupin.dev/">
				<img src="/assets/cardboard/portfolio.png" alt="Logo GitHub" />
				<div>
					<h3>Portfolio<h3>
				</div>
			</a>
		</div>
		<div class="cardboard" style="background-image: url('/assets/cardboard/hydrosnow-back.jpg');">
			<a href="https://www.hydrosnow.dev/">
				<img src="/assets/cardboard/hydrosnow.png" alt="Logo Internet" />
				<div>
					<h3>HydroSnow<h3>
				</div>
			</a>
		</div>
		<div class="cardboard" style="background-image: url('/assets/cardboard/cv-back.jpg');">
			<a href="/CV_Trupin_V3.pdf">
				<img src="/assets/cardboard/cv.png" alt="Icône CV" />
				<div>
					<h3>Mon CV<h3>
				</div>
			</a>
		</div>
		<div class="cardboard" style="background-image: url('/assets/cardboard/mail-back.jpg');">
			<a href="/mail.php">
				<img src="/assets/cardboard/mail.png" alt="Logo GitHub" />
				<div>
					<h3>E-Mail<h3>
				</div>
			</a>
		</div>
		<div class="cardboard" style="background-image: url('/assets/cardboard/linkedin-back.jpg');">
			<a href="https://www.linkedin.com/in/trupin/">
				<img src="/assets/cardboard/linkedin.png" alt="Logo LinkedIn" />
				<div>
					<h3>LinkedIn<h3>
				</div>
			</a>
		</div>
	</section>

	<footer class="black">
		<h4><?= $copy_year ?> &copy; Alexis Trupin</a> - <a href="https://github.com/HydroSnow/trupin.dev">trupin.dev sur GitHub</a></h4>
	</footer>

	<?php if ($particles) { ?>
		<script src="/vendor/particles.min.js"></script>
		<script>
			particlesJS.load('particles', '/assets/particles.json', async function() {
				console.log('callback - particles.js config loaded');
			});
		</script>
	<?php } ?>
</body>

</html>
<!-- t'es moche, petit fouineur -->
