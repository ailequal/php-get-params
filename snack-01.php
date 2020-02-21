
<!-- snack-01 -->
<!-- Stampare una stringa verde se la variabile password passata in GET è uguale
 a “Boolean”, altrimenti stampare una stringa rossa. -->

<?php
	$psw = $_GET['pwd'];
	if ($psw === 'Boolean') {
		$class = 'correct';
		$message = 'Correct password.';
	} else {
		$class = 'incorrect';
		$message = 'Incorrect password.';
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
		.correct {
			color: green;
		}
		.incorrect {
			color: red;
		}
	</style>
	<title>snack-01 - php-get-params</title>
</head>
<body>
	<h1>snack-01 - php-get-params</h1>
	<h2 class='<?php echo $class ?>'><?php echo $message ?></h2>
</body>
</html>