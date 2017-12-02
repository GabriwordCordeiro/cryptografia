<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.green-light_green.min.css" />
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<meta name="Theme-Color" content="">
	<iframe width="0" height="0" src="https://www.youtube.com/embed/NkKKmblqttw?start=64&rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
	<title>Complete</title>
</head>
	<body>
		
<?php

	$text = $_POST['box'];

	$text = md5($text);

	$text = sha1($text);


	echo "<center>A criptografia está completa.</center>";	
	echo "<br>";
	echo "<hr>";

	if ($text == sha1(md5($_POST['box']))) {
		echo "<br><center><b>";
		echo "Texto original: "; echo $_POST['box']; echo "</b>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "Texto criptografado: "; echo "<b>"; echo $text; echo "</b>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "Em MD5: "; echo "<b>"; echo md5($_POST['box']). "."; echo "</b>";
		echo "<br>";
		echo "<br>";
		echo "Em SHA1: "; echo "<b>"; echo sha1($_POST['box']). "."; echo "</b>";

	}else{
		echo "No, o texto não foi criptografado";
		echo "</center>";
	}
	echo "<hr>";
?>
	</body>
</html>	
