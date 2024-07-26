<?php
//Short songs in array
$short_songs = array(
	array(
		'name'       => 'Metallica - Master of Puppets',
		'file'       => 'Master of Puppets.mp3',
		'duration_1' => 1500,
		'duration_2' => 3500,
	),
	array(
		'name'       => 'Michael Jackson - Smooth Criminal',
		'file'       => 'Smooth Criminal.mp3',
		'duration_1' => 1000,
		'duration_2' => 3000,
	),
	array(
		'name'       => 'Nightwish - Nemo',
		'file'       => 'Nemo.mp3',
		'duration_1' => 1150,
		'duration_2' => 2500,
	),
	array(
		'name'       => 'PSY - Gangnam Style',
		'file'       => 'Gangnam Style.mp3',
		'duration_1' => 1150,
		'duration_2' => 2500,
	),
	array(
		'name'       => 'Slipknot - Psychosocial',
		'file'       => 'Psychosocial.mp3',
		'duration_1' => 3000,
		'duration_2' => 6000,
	),
	array(
		'name'       => 'System of a Down - B.Y.O.B',
		'file'       => 'B.Y.O.B.mp3',
		'duration_1' => 750,
		'duration_2' => 2500,
	),
	array(
		'name'       => 'Turmion Kätilöt - Hades',
		'file'       => 'Hades.mp3',
		'duration_1' => 1150,
		'duration_2' => 3500,
	),
	array(
		'name'       => 'Amorphis - House of Sleep',
		'file'       => 'House of Sleep.mp3',
		'duration_1' => 1000,
		'duration_2' => 3000,
	),
	array(
		'name'       => 'Britney Spears - Baby One More Time',
		'file'       => 'Baby One More Time.mp3',
		'duration_1' => 1500,
		'duration_2' => 3500,
	),
	array(
		'name'       => 'Linkin Park - Numb',
		'file'       => 'Numb.mp3',
		'duration_1' => 4000,
		'duration_2' => 5100,
	),
	array(
		'name'       => 'The White Stripes - Seven Nation Army',
		'file'       => 'Seven Nation Army.mp3',
		'duration_1' => 1100,
		'duration_2' => 3200,
	),
	array(
		'name'       => 'Muse - Uprising',
		'file'       => 'Uprising.mp3',
		'duration_1' => 2900,
		'duration_2' => 5000,
	),
	array(
		'name'       => 'My Chemical Romance - Welcome to the Black Parade',
		'file'       => 'Welcome to the Black Parade.mp3',
		'duration_1' => 1150,
		'duration_2' => 4500,
	),
	array(
		'name'       => 'Lady Gaga - Bad Romance',
		'file'       => 'Bad Romance.mp3',
		'duration_1' => 900,
		'duration_2' => 3500,
	),
	array(
		'name'       => 'Gorillaz - Feel Good Inc.',
		'file'       => 'Feel Good Inc..mp3',
		'duration_1' => 2500,
		'duration_2' => 6750,
	),
	array(
		'name'       => 'Marilyn Manson - Sweet Dreams ( Are Made Of This )',
		'file'       => 'Sweet Dreams ( Are Made Of This ).mp3',
		'duration_1' => 4400,
		'duration_2' => 5500,
	),
	array(
		'name'       => 'Rage Against the Machine - Killing In the Name',
		'file'       => 'Killing In the Name.mp3',
		'duration_1' => 2000,
		'duration_2' => 15000,
	),
	array(
		'name'       => 'Queens of the Stone Age - No One Knows',
		'file'       => 'No One Knows.mp3',
		'duration_1' => 1000,
		'duration_2' => 3000,
	),
	array(
		'name'       => 'Aqua - Barbie Girl',
		'file'       => 'Barbie Girl.mp3',
		'duration_1' => 3300,
		'duration_2' => 4700,
	),
	array(
		'name'       => 'A-ha - Take On Me',
		'file'       => 'Take On Me.mp3',
		'duration_1' => 750,
		'duration_2' => 2000,
	),
	array(
		'name'       => 'Eiffel 65 - Blue (Da Ba Dee)',
		'file'       => 'Blue (Da Ba Dee).mp3',
		'duration_1' => 2200,
		'duration_2' => 3500,
	),
	array(
		'name'       => 'Rick Astley - Never Gonna Give You Up',
		'file'       => 'Never Gonna Give You Up.mp3',
		'duration_1' => 300,
		'duration_2' => 1600,
	),
);

//Counter
$counter = 1;

//Render array
foreach ( $short_songs as $song ) {
	?>
	<div class="song">
		<div class="count">
			<p><?php echo $counter; ?> / <?php echo count( $short_songs ); ?></p>
		</div>

		<div class="player">
			<audio controls preload="auto">
				<source src="music/<?php echo $song['file']; ?>" type="audio/mpeg">
			</audio> 
		</div>

		<div class="buttons">
			<button class="short-button" data-duration="<?php echo $song['duration_1']; ?>">Lyhyt #1</button>
			<button class="short-button" data-duration="<?php echo $song['duration_2']; ?>">Lyhyt #2</button>
		</div>

		<div class="answer">
			<a href="#">Näytä vastaus</a>
			<p><?php echo $song['name']; ?></p>
		</div>
	</div>
	<?php
	++$counter;
}
