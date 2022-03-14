<?php 
include 'header.php'
	
?>

<!DOCTYPE html>

<html>
<head>
	<title>Change Password</title>
</head>

 <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #3CBC8D;
}
 </style>
<body>
	
	<p> Change Your Password : </p>
	<form method="post" action="../controller/loginCheck.php">
		  <fieldset>
		  <center>
			<table>
				<tr>
					<td>Current Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>New Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Re-New Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td> </td>
					<td><input type="submit" name="Change" value="SUBMIT"></td>
				</tr>
			</table>
			 </center>
		  </fieldset>	
		  </br>
		<a href="home.php">HOME </a> </br>
		<a href="../controller/logout.php">LOGOUT </a>
	</form>
</body>
</html>

<?php 
include 'footer.php'
	
?>