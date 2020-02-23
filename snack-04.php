
<!-- snack-04 -->
<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il
 nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

 <?php
// data from pastebin.com
$db = [
	'teachers' => [
		[
			'name' => 'Michele',
			'lastname' => 'Papagni'
		],
		[
			'name' => 'Fabio',
			'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
			'name' => 'Roberto',
			'lastname' => 'Marazzini'
		],
		[
			'name' => 'Federico',
			'lastname' => 'Pellegrini'
		]
	]
];

// extract teachers
$teachers = $db['teachers'];
for ($i = 0; $i < count($teachers); $i++) { 
	// every teacher is $teacher$i, so like $teacher0, $teacher1 and so on...
	${'teacher' . $i} = $teachers[$i];
}

// extract pm
$pms = $db['pm'];
for ($i = 0; $i < count($pms); $i++) { 
	// every pm is $pm$i, so like $pm0, $pm1 and so on...
	${'pm' . $i} = $pms[$i];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		* {
			boxsizing: borderbox;
			margin: 0;
			padding: 0;
		}
		.teachers {
			background-color: grey;
		}
		.pm {
			background-color: green;
		}
	</style>
	<title>snack-04 - php-get-params</title>
</head>
<body>
	<h1>snack-04 - php-get-params</h1>
	<div class="teachers">
		<h2>$teacher0</h2>
		<p>
			<?php echo $teacher0['name'], ' ', $teacher0['lastname']; ?>
		</p>
		<h2>$teacher1</h2>
		<p>
			<?php echo $teacher1['name'], ' ', $teacher1['lastname']; ?>
		</p>
	</div>
	<div class="pm">
	<h2>$pm0</h2>
		<p>
			<?php echo $pm0['name'], ' ', $pm0['lastname']; ?>
		</p>
		<h2>$pm1</h2>
		<p>
			<?php echo $pm1['name'], ' ', $pm1['lastname']; ?>
		</p>
	</div>
</body>
</html>