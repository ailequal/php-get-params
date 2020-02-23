
<!-- snack-04 -->
<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il
 nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
	echo 'hello world';
?>

<?php
	$email = "pattrick@tutorialspoint.com";
	// Validate email
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo("$email is a valid email address");
	}
	else{
		echo("$email is not a valid email address");
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
	</style>
	<title>snack-04 - php-get-params</title>
</head>
<body>
	<h1>snack-04 - php-get-params</h1>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut fugiat ullam neque maxime quod ratione ipsam labore corrupti quidem vel. Modi cum sequi id mollitia iusto quo illo ad facilis.</p>
</body>
</html>