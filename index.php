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
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet"> 
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

				<div class="music">
					<audio controls>
						<source src="music/Master of Puppets.mp3" type="audio/mpeg">
					</audio> 

					<div class="buttons">
						<button class="music-button" data-duration="1500">Lyhyt #1</button>
						<button class="music-button" data-duration="3500">Lyhyt #2</button>
					</div>
				</div>

				<div class="music">
					<audio controls>
						<source src="music/Nemo.mp3" type="audio/mpeg">
					</audio> 

					<div class="buttons">
						<button class="music-button" data-duration="1150">Lyhyt #1</button>
						<button class="music-button" data-duration="2500">Lyhyt #2</button>
					</div>
				</div>
			</div>
		</section>

		<script src="jquery-3.7.1.min.js" defer=""></script>
		<script src="scripts.js?v=<?php echo $version; ?>" defer=""></script>
	</body>
</html>
