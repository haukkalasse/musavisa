<?php
//Theme songs in array
$theme_songs = array(
	array(
		'name'          => 'Star Wars Intro',
		'file_standard' => 'Star Wars Intro.mp3',
		'file_reverse'  => 'Star Wars Intro Reverse.mp3',
	),
	array(
		'name'          => 'The Avengers',
		'file_standard' => 'The Avengers.mp3',
		'file_reverse'  => 'The Avengers Reverse.mp3',
	),
	array(
		'name'          => 'Harry Potter - Hedwig\'s Theme',
		'file_standard' => 'Hedwigs Theme.mp3',
		'file_reverse'  => 'Hedwigs Theme Reverse.mp3',
	),
	array(
		'name'          => 'X-Files',
		'file_standard' => 'X Files.mp3',
		'file_reverse'  => 'X Files Reverse.mp3',
	),
	array(
		'name'          => 'Terminator',
		'file_standard' => 'Terminator.mp3',
		'file_reverse'  => 'Terminator Reverse.mp3',
	),
	array(
		'name'          => 'Indiana Jones',
		'file_standard' => 'Indiana Jones.mp3',
		'file_reverse'  => 'Indiana Jones Reverse.mp3',
	),
	array(
		'name'          => 'Batman - The Dark Knight',
		'file_standard' => 'The Dark Knight.mp3',
		'file_reverse'  => 'The Dark Knight Reverse.mp3',
	),
	array(
		'name'          => 'Dune - Gom Jabbar',
		'file_standard' => 'Gom Jabbar.mp3',
		'file_reverse'  => 'Gom Jabbar Reverse.mp3',
	),
	array(
		'name'          => 'Breaking Bad',
		'file_standard' => 'Breaking Bad.mp3',
		'file_reverse'  => 'Breaking Bad Reverse.mp3',
	),
	array(
		'name'          => 'X-Men \'97',
		'file_standard' => 'X-Men 97.mp3',
		'file_reverse'  => 'X-Men 97 Reverse.mp3',
	),
	array(
		'name'          => 'Spider-Man The Animated Series',
		'file_standard' => 'Spider-Man The Animated Series.mp3',
		'file_reverse'  => 'Spider-Man The Animated Series Reverse.mp3',
	),
	array(
		'name'          => 'Stranger Things',
		'file_standard' => 'Stranger Things.mp3',
		'file_reverse'  => 'Stranger Things Reverse.mp3',
	),
	array(
		'name'          => 'Mandalorian',
		'file_standard' => 'Mandalorian.mp3',
		'file_reverse'  => 'Mandalorian Reverse.mp3',
	),
	array(
		'name'          => 'Futurama',
		'file_standard' => 'Futurama.mp3',
		'file_reverse'  => 'Futurama Reverse.mp3',
	),
	array(
		'name'          => 'Game of Thrones',
		'file_standard' => 'Game of Thrones.mp3',
		'file_reverse'  => 'Game of Thrones Reverse.mp3',
	),
	array(
		'name'          => 'Robocop',
		'file_standard' => 'Robocop.mp3',
		'file_reverse'  => 'Robocop Reverse.mp3',
	),
	array(
		'name'          => 'James Bond',
		'file_standard' => 'James Bond.mp3',
		'file_reverse'  => 'James Bond Reverse.mp3',
	),
);

//Counter
$counter = 1;

//Render array
foreach ( $theme_songs as $song ) {
	?>
	<div class="song">
		<div class="count">
			<p><?php echo $counter; ?> / <?php echo count( $theme_songs ); ?></p>
		</div>
		
		<div class="player">
			<p>Takaperin</p>
			<audio controls preload="auto">
				<source src="reverse/<?php echo $song['file_reverse']; ?>" type="audio/mpeg">
			</audio> 
		</div>

		<div class="player">
			<p>Alkuperäinen</p>
			<audio controls preload="auto">
				<source src="themes/<?php echo $song['file_standard']; ?>" type="audio/mpeg">
			</audio> 
		</div>

		<div class="answer">
			<a href="#">Näytä vastaus</a>
			<p><?php echo $song['name']; ?></p>
		</div>
	</div>
	<?php
	++$counter;
}
