<?php 
	include 'header.php'
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JS Example</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>	
<body>
     <center>

	<br>
	<div class="container" style="width:900px;">
   <h2 align="center">JSON Data Search Ber</h2>
	<input type="text" size="100" id="name" name="name" value="" onkeyup="search()">
	<input type="button" name="" value="Search" onclick="search()">

	<div id="div1">
		
	</div>
	</br>
	<a href="home.php">Back </a> |
	</center>

	<script type="text/javascript" src="searchScript.js"></script>
</body>
</html>