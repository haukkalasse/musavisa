<?php
$version = '1.0.0';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sipuli Musavisa</title>
		<meta name="description" content="Petteri-Bingo">
		<meta name="robots" content="noindex, nofollow">
		<link rel="icon" href="img/icon-32.png" sizes="32x32">
		<link rel="icon" href="img/icon-192.png" sizes="192x192">
		<link rel="apple-touch-icon" href="img/icon-180.png"><!-- 180x180-->
		<meta name="msapplication-TileImage" content="img/icon-270.png"><!-- 270x270-->

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="style.css?v=<?php echo $version; ?>" />
	</head>
	<body>

		<header class="top">
			<div class="top__header">
				<img src="img/onion.svg" alt="Sibale">
				<h1>Sipulivisa</h1>
			</div>
		</header>

		<section class="content">
			<div class="content__area">

				<div class="content__area__section">
					<div class="directions">
						<h2>Lyhyt alku</h2>
						<p>Kappale pitää arvata lyhyestä pätkästä alusta. Jokaisesta kappaleesta on kaksi eri mittaista versiota. Jos kummastakaan ei arvata oikein, aloitetaan soittamaan kappaletta kokonaan.</p>
					</div>

					<div class="songs">
						<?php require_once 'inc/short-songs.php'; ?>
					</div>
				</div>

			</div>
		</section>

		<script src="jquery-3.7.1.min.js" defer=""></script>
		<script src="scripts.js?v=<?php echo $version; ?>" defer=""></script>
	</body>
</html>
