
<!-- snack-02 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi
 che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto
 è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php
	$name = $_GET['name'];
	$email = $_GET['email'];
	$age = $_GET['age'];
	$message = 'Access denied';

	if (strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
		$message = 'Access granted';
	}

	// // name must be longer than three letters
	// if (strlen($name) > 3) {
	// 	echo 'Name OK';
	// } else {
	// 	echo 'Name BAD';
	// }
	// // email must have a dot and an at
	// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// 	echo 'Email OK';
	// } else {
	// 	echo 'Email BAD';
	// }
	// // age must be a number
	// if (is_numeric($age)) {
	// 	echo 'Age OK';
	// } else {
	// 	echo 'Age BAD';
	// }
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
	<title>snack-02 - php-get-params</title>
</head>
<body>
	<h1>snack-02 - php-get-params</h1>
	<h2><?php echo $message ?></h2>
</body>
</html>