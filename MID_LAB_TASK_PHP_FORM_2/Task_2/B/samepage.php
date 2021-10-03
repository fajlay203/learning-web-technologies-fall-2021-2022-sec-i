<?php 


	
	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['myemail'];
		if($email != ""){
			echo $email;
		}else{
			echo "Null value...";
		}
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