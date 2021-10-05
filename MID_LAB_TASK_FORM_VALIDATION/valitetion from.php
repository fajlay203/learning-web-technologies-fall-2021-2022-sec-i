<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$name = $email = $gender = $dob = $dept = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $dob = test_input($_POST["dob"]);
  $dept = test_input($_POST["dept"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  DOB: <input type="date" name="dob" >
  <br><br>
  DEPT:
			<select name="">
				<option value="">CS</option>
				<option value="">CIS</option>
				<option value="">CSE</option>
				<option value="">SE</option>
			</select>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
//echo "<h2>Information:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $dept;
echo "<br>";
echo $gender;
?>

</body>
</html>