<?php 


	
	if(isset($_REQUEST['submit'])){
		$birthday = $_REQUEST['mybirthday'];
		if($birthday != ""){
			echo $birthday;
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
      BirthDay: <input type="date" name="mybirthday" value="<?php if(isset($birthday)){ echo $birthday; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>