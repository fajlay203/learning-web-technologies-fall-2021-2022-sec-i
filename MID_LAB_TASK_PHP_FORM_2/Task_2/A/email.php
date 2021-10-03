<?php 

	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myemail'];
		
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		Username: <input type="email" name="myemail" value="<?php if(isset($email)){ echo $name; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>