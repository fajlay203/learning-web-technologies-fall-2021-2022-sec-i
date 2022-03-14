<?php
	include 'header.php'
?>


<!DOCTYPE html>
<html>
<head>
<title>My Account</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>My Account</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Password</th>
    <th>Comfirm Password</th>
	<th>Email</th>
	<th>User Type</th>
  </tr>
  <tr>
    <td>Fajalay</td>
    <td>123</td>
    <td>123</td>
	<td>fajlay203.@gamil.com</td>
	<td>Property Owner</td>
  </tr>
  <tr>
    <td>Rabbi</td>
    <td>456</td>
    <td>456</td>
	<td>fajlay204.@gamil.com</td>
	<td>Property Owner</td>
  </tr>
  
</table>
   	<a href="home.php"> HOME</a>
</body>
</html>

<?php
	include 'footer.php'
?>