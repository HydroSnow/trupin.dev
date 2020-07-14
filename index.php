<?php // mobile detect
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
		$mobile = true;
	} else {
		$mobile = false;
	}
?>

<?php // disable particles
	if ($mobile == true) {
		$particles = false;
	} else {
		$particles = true;
	}
?>

<?php // assets version for cache cancel
	$ASSETS_VER = 5;
?>

<!doctype html>
<html lang="fr-FR">

<head>
	<title>Alexis Trupin</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Étudiant en Développement" />
	<meta name="theme-color" content="#01021b" />
	<style>
		html {
			scroll-behavior: smooth;
		}

		body {
			margin: 0;
			text-align: center;
			color: #FFF;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			background-color: black;
		}

		header {
			min-height: 100vh;

			padding: 64px 16px;
			box-sizing: border-box;

			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;

			background-position: center center;
			-webkit-background-size: cover;
			background-size: cover;
		}

		header>* {
			z-index: 1;
		}

		h1, h2, h3, h4, p {
			margin: 0;
		}

		h1 {
			font-size: 72px;
			font-weight: bold;
		}

		h2 {
			font-size: 32px;
			font-weight: lighter;
		}

		h3 {
			font-size: 24px;
			font-weight: normal;
		}

		a {
			color: #FFF;
			text-decoration: none;
		}

		a:hover, a:focus {
			color: #CCF;
			text-decoration: none;
		}

		.container {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
		}

		.cardboard {
			padding: 48px;

			flex-grow: 1;

			background-position: center center;
			-webkit-background-size: cover;
			background-size: cover;
		}

		.cardboard>img {
			margin-top: 8px;
			margin-bottom: 8px;
			width: 64px;
		}

		footer {
			padding: 16px;
		}

		footer>* {
			margin: 16px;
		}

		.gandalf, .gandalf>a {
			color: #aaa;
		}
	</style>
	<?php if ($particles) { ?>
		<style>
			@keyframes fadein {
				from { opacity: 0; }
				to { opacity: 1; }
			}

			#particles {
				position: absolute;

				width: 100%;
				height: 100%;

				z-index: 0;

				animation: fadein 10s;
				/* Safari, Chrome and Opera > 12.1 */
				-webkit-animation: fadein 10s;
				/* Firefox < 16 */
				-moz-animation: fadein 10s;
				/* Internet Explorer */
				-ms-animation: fadein 10s;
				/* Opera < 12.1 */
				-o-animation: fadein 10s;
			}
		</style>
	<?php } ?>
</head>

<body>
	<header style="background-image: linear-gradient(#0008, #0008), url('/assets/snow-village.jpg?v=<?= $ASSETS_VER ?>');">
		<?php if ($particles) { ?>
			<div id="particles"></div>
		<?php } ?>
		<h1>Alexis Trupin</h1>
		<h2>Étudiant en Développement</h2>
		<img class="arrow" style="width:75px; margin-top:16px; cursor:pointer;" src="/assets/arrow.png?v=<?= $ASSETS_VER ?>" alt="Vers le bas" onclick="bonjour();" />
	</header>

	<div id="bonjour" style="padding:32px;">
		<h2>Bonjour !</h2>
	</div>

	<div style="padding: 32px 0; background-color: #222;">
		<div style="overflow-x: auto;">
			<img src="/assets/cv/CV_Alexis_Trupin_NA.png?v=<?= $ASSETS_VER ?>" alt="Mon CV">
		</div>
		<p style="margin-top: 12px;"><a href="/assets/cv/CV_Alexis_Trupin_NA.pdf?v=<?= $ASSETS_VER ?>">Télécharger le CV</a></p>
	</div>

	<div class="container">
		<div class="cardboard" style="background-image: linear-gradient(#000A, #000A), url('/assets/cardboard/github-back.jpg?v=<?= $ASSETS_VER ?>');">
			<img src="/assets/cardboard/github.png?v=<?= $ASSETS_VER ?>" alt="Logo GitHub" />
			<h3><a href="https://github.com/HydroSnow">github.com/HydroSnow</a></h3>
		</div>
		<div class="cardboard" style="background-image: linear-gradient(#000A, #000A), url('/assets/cardboard/mail-back.jpg?v=<?= $ASSETS_VER ?>');">
			<img src="/assets/cardboard/mail.png?v=<?= $ASSETS_VER ?>" alt="Logo GitHub" />
			<h3>trupin.alexis@gmail.com</h3>
		</div>
		<div class="cardboard" style="background-image: linear-gradient(#000A, #000A), url('/assets/cardboard/linkedin-back.jpg?v=<?= $ASSETS_VER ?>');">
			<img src="/assets/cardboard/linkedin.png?v=<?= $ASSETS_VER ?>" alt="Logo LinkedIn" />
			<h3><a href="https://www.linkedin.com/in/trupin/">linkedin.com/in/trupin</a></h3>
		</div>
	</div>

	<footer>
		<h2>&copy; 2019, Alexis Trupin</h2>
		<p class="gandalf">Tous droits réservés<br /> <a href="https://github.com/HydroSnow/trupin.dev">github.com/HydroSnow/trupin.dev</a> </p>
		<p class="gandalf">Hébergeur : <a href="https://www.ovh.com/fr/">OVH SAS</a><br /> 2 rue Kellermann, 59100 Roubaix, France</p>
	</footer>

	<script>
		const element = document.getElementById('bonjour');
		function bonjour() {
			element.scrollIntoView(true);
		}
	</script>

	<?php if ($particles) { ?>
		<script src="/node_modules/particles.js/particles.js"></script>
		<script>
			particlesJS.load('particles', '/assets/particles.json?v=<?= $ASSETS_VER ?>', function() {
				console.log('callback - particles.js config loaded');
			});
		</script>
	<?php } ?>
</body>

</html>
<!-- t'es moche, petit fouineur -->