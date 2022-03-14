<?php 
	include 'header.php'
?>

<html>
<head>
	<title>Create New User </title>
	<link rel="stylesheet" href="../model/style.css">
	<script type="text/javascript">
    function validate(){
    var name= document.forms["myForm"]["username"].value;
    if (name == "") {
   alert("Name must be filled out");
   return false;
   }

  var password= document.forms["myForm"]["password"].value;
  if (password == "") {
			   alert("password must be filled out");
			  return false;
			}
  var email= document.forms["myForm"]["email"].value;
  if (email == "") {
			   alert("Email must be filled out");
			 return false;
			}
}
 </script>
</head>
<body>
	
	
	<form name="myForm" action="../controller/addUser.php" onsubmit="return validate()" method="post">
		<fieldset>
			<legend>Create New</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td> <td><input type="hidden" name="id" value="<?=$user['id']?>"></td> 
					
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
		<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>
	</form>
</body>
</html>