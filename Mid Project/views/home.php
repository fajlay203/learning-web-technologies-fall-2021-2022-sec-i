<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>home page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #8080ff;
  padding:px;
  text-align: center;
  font-size: 30px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 25%;
  height: 500px; /* only for demonstration, should be removed */
  background: #ccccff;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 75%;
  background-color: #e6ffe6;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #00004d;
  padding: px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
  
}
</style>
</head>
<body>

<img src="../images/logo.jpg" alt="LOGO" width="100" height="80">
 <h1 style="background-color:powderblue;">FR Real Estate.co</h1>



<header>
  <h2>Property Owner</h2>
</header>

<section>
  <nav>
    <ul>
	<fieldset>
    Chick Your:
	<a href="my_account.php">ACCOUNT </a> </br>
	chick Your:
	<a href="properties.html">UNDER CONSTRUCTION PROJECT </a>  </br>
	Chick Your:
	<a href="my_properties.html">MY PROJECT</a>  </br>
	Add:
	<a href="add_property.html"> PROPERTY</a>  </br>
	Edit:
	<a href="edit_profile.html">PROFILE</a>  </br>
	Change Your:
	<a href="change_password.php">PASSWORD</a>  </br>
	</fieldset>
	</br>
	<fieldset>
	Have To Know: </br>
	<a href="search_property.html">SEARCH</a>  </br>
	<a href="enquiry.php">ENQUIRY</a>  </br>
	</fieldset>
	</br>
	<fieldset>
	Company Information: </br>
	<a href="about.php">ABOUT US</a>  </br>
	<a href="contact_us.php">CONTACT US</a>  </br>
	</fieldset>
	</br>
	<a href="../controller/logout.php"> <button class="button">LOGOUT</button> </a>
	
	
	
    </ul>
  </nav>
  
   <article>
    <h1>FR Real Estate</h1>
    <p>
       Aftabnagor, Block C, House 22, Rampura , Dhaka.
       PhoneNo: 01xxxxxxxx
       Email: fajlay.203@gmail.com </p>
   
   </article>
 </section>

  <footer>
    <p>copyright:FR Real Estate.co,2021</p>
  </footer>

</body>
</html>

<?php
	}else{
		header('location: ../views/login.html');
	}
?>