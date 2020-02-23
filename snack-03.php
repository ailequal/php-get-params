
<!-- snack-03 -->
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo. -->

<?php
	$lorem = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut fugiat ullam neque maxime quod ratione ipsam labore corrupti quidem vel. Modi cum sequi id mollitia iusto quo illo ad facilis.';
	// dived the $lorem into little paragraphs with the dot
	$array_lorem = (explode('. ', $lorem));
	for ($i = 0; $i < count($array_lorem); $i++) {
		if ($i === 0) {
			$string0 = $array_lorem[$i];
			$string0 .= '.'; // add missing dot
		} elseif ($i === 1) {
			$string1 = $array_lorem[$i];
			$string1 .= '.'; // add missing dot
		} elseif ($i === 2) {
			$string2 = $array_lorem[$i];
		}
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
	<title>snack-03 - php-get-params</title>
</head>
<body>
	<h1>snack-03 - php-get-params</h1>
	<p><?php echo $string0 ?></p>
	<p><?php echo $string1 ?></p>
	<p><?php echo $string2 ?></p>
</body>
</html>