<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h1>Welcome to Bob!</h1>
	<table style="width:100%">
	<a href="profile.html">Profile </a> | 
	<a href="changepass.html">Change Password </a> |
	<a href="logout.php">logout </a>
	</table>
</body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>


