<?php // mobile detect
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
		$mobile = true;
	} else {
		$mobile = false;
	}
?>

<?php // disable particles
	if (isset($_COOKIE["particles"]) == false) {
		if ($mobile == true) {
			setcookie("particles", 0);
			$particles = false;
			echo("<!-- auto-detect: particles disabled -->");
		} else {
			setcookie("particles", 1);
			$particles = true;
			echo("<!-- auto-detect: particles enabled -->");
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
	<meta name="description" content="Étudiant en Développement" />
	<meta name="theme-color" content="#01021b" />
	<link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css" />
	<?php if ($particles) { ?>
		<link rel="stylesheet" type="text/css" href="/assets/css/particles.css" />
	<?php } ?>
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
		<h1>Alexis Trupin</h1>
		<h2>Étudiant en Développement</h2>
		<a href="#1">
		    <img class="arrow" style="width:75px;" src="/assets/arrow.png" alt="Vers le bas" />
		</a>
	</header>

	<div class="black" id="1">
		<h3>Bonjour !</h3>
	</div>

	<div style="overflow-x: auto;">
		<canvas id="pdf-canvas"></canvas>
	</div>

	<section>
		<div class="cardboard" style="background-image: url('/assets/cardboard/github-back.jpg');">
			<div class="cb-cont">
				<img src="/assets/cardboard/github.png" alt="Logo GitHub" />
				<h4><a href="https://github.com/HydroSnow">github.com/HydroSnow</a></h4>
			</div>
		</div>
		<div class="cardboard" style="background-image: url('/assets/cardboard/mail-back.jpg');">
			<div class="cb-cont">
				<img src="/assets/cardboard/mail.png" alt="Logo GitHub" />
				<h4>trupin.alexis@gmail.com</h4>
			</div>
		</div>
		<div class="cardboard" style="background-image: url('/assets/cardboard/linkedin-back.jpg');">
			<div class="cb-cont">
				<img src="/assets/cardboard/linkedin.png" alt="Logo LinkedIn" />
				<h4><a href="https://www.linkedin.com/in/trupin/">linkedin.com/in/trupin</a></h4>
			</div>
		</div>
	</section>

	<footer class="black">
		<h3>&copy; 2019, Alexis Trupin</a></h3>
		<p><a href="https://github.com/HydroSnow/trupin.dev">github.com/HydroSnow/trupin.dev</a></p>
	</footer>

	<?php if ($particles) { ?>
		<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js" integrity="sha256-icjghcPaibMf1jv4gQIGi5MeWNHem2SispcorCiCfSg=" crossorigin="anonymous"></script>
		<script>
			particlesJS.load('particles', '/assets/particles.json', async function() {
				console.log('callback - particles.js config loaded');
			});
		</script>
	<?php } ?>
	
	<script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.3.200/build/pdf.min.js" integrity="sha256-J4Z8Fhj2MITUakMQatkqOVdtqodUlwHtQ/ey6fSsudE=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.3.200/build/pdf.worker.min.js" integrity="sha256-I4o8kJ5QIxAoP9x72OUugvB1Jjl5trc9XlE2LPJ5o5o=" crossorigin="anonymous"></script>
	<script>
		// Loaded via <script> tag, create shortcut to access PDF.js exports.
		var pdfjsLib = window['pdfjs-dist/build/pdf'];

		// The workerSrc property shall be specified.
		pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

		// Asynchronous download of PDF
		var loadingTask = pdfjsLib.getDocument('/assets/CV-Alexis-Trupin.pdf');
		loadingTask.promise.then(function(pdf) {
			console.log('PDF loaded');
			
			// Fetch the first page
			var pageNumber = 1;
			return pdf.getPage(pageNumber)
		}).then(function(page) {
			console.log('Page loaded');
			
			var scale = 1.5;
			var viewport = page.getViewport({scale: scale});

			// Prepare canvas using PDF page dimensions
			var canvas = document.getElementById('pdf-canvas');
			var context = canvas.getContext('2d');
			canvas.height = viewport.height;
			canvas.width = viewport.width;

			// Render PDF page into canvas context
			var renderContext = {
				canvasContext: context,
				viewport: viewport
			};
			var renderTask = page.render(renderContext);
			return renderTask.promise;
		}).then(function () {
			console.log('Page rendered');
		}).catch(function (reason) {
			// PDF loading error
			console.error(reason);
		});
	</script>
</body>

</html>
<!-- t'es moche, petit fouineur -->
