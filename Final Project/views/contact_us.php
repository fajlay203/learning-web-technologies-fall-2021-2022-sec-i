<?php 
include 'header.php'
	
?>

<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="../model/style.css">
	<script type="text/javascript">
    function validate(){
    var username= document.forms["myForm"]["username"].value;
    if (username == "") {
   alert("Name must be filled out");
   return false;
   }

  var number= document.forms["myForm"]["number"].value;
  if (number == "") {
			   alert("Number must be filled out");
			  return false;
			}
  var email= document.forms["myForm"]["email"].value;
  if (email == "") {
			   alert("Email must be filled out");
			 return false;
			}
	var meassage= document.forms["myForm"]["meassage"].value;
  if (meassage == "") {
			   alert("meassage must be filled out");
			 return false;
			}		
}
 </script>
</head>
<style>
input[type=number], select { width: 100%; padding: 12px 20px; margin: 8px 0;
  display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;
}
</style>
<body>
	<form name="myForm" action="../controller/contactCheck.php" onsubmit="return validate()" method="post">
		<fieldset>
			<legend>Contact Us</legend>
			<table>
				<tr>
					<td>NAME:</td>
					<td><input type="text" name="username" value=""></td>
					<span class="error">
				</tr>
				<tr>
					<td>PHONE NO:</td>
					<td><input type="number" name="number" value=""></td>
				</tr>
				<tr>
					<td>EMAIL:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>SUBJECT:</td>
					<td><input type="text" name="subject" value=""></td>
				</tr>
				<tr>
					<td>MEASSAGE:</td>
					<td><input type="text" name="meassage" value=""></td>
				</tr>
				
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
		</fieldset>
		
	</form>
	
</body>
</html>

<?php 
include 'footer.php'
	
?>