<?php 
include 'header.php'
	
?>

<html>
<head>
	<title>Contact Us</title>
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

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
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
	<form method="post" action="../controller/contactCheck.php">
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