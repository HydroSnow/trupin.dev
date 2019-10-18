<!doctype html>
<html lang="fr-FR">
	<head>
		<title>Alexis Trupin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="icon" type="image/x-icon" href="/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
		<style>
			html, body {
				height: 100%;
				width: 100%;
			}

			body {
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

			#particles-js {
				position: absolute;
				width: 100%;
				height: 100%;

				z-index: 0;
			}

			#content {
				z-index: 1;

				color: white;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div id="particles-js"></div>
		<div id="content" class="p-3 bg-dark border rounded">
			<h1 class="mx-3 mt-3 mb-1">Alexis Trupin</h1>
			<p class="mx-3 mt-1 mb-3 lead">Développeur</p>
			<p class="m-3">
				<a href="https://github.com/HydroSnow"><button type="button" class="btn btn-primary">GitHub</button></a>
				<a href="/portfolio.php"><button type="button" class="btn btn-primary">Portfolio</button></a>
			</p>
			<p class="m-3">trupin.alexis@gmail.com</p>
		</div>
		<script src="/lib/jquery-3.4.1.min.js"></script>
		<script src="/lib/popper-1.15.0.min.js"></script>
		<script src="/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="/lib/particles.js-2.0.0/particles.min.js"></script>
		<script>
			particlesJS.load('particles-js', '/lib/particles.js-2.0.0/particles.json', function() {
				console.log('callback - particles.js config loaded');
			});
		</script>
	</body>
</html>
<!-- t'es moche, petit fouineur -->
