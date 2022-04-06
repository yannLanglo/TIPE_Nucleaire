<!DOCTYPE html>
<html>

	<head>
		<title>Carte</title>
	<link rel="stylesheet" href="carte.css">
	</head>

<body>

	<?php

		$ville=$_GET["ville"];
		$bombe=$_GET["bombe"];
		$image=$ville.'_'.$bombe.'.png';

		print '<img src="photo/'.$image.'"/>';
	?>

	<p> Modifier les paramètres de recherches : <a href='page2.html'>ICI</a></p>

</body>
</html>