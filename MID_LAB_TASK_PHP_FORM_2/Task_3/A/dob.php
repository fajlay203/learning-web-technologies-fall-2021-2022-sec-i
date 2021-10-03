<?php 

	
	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['mybirthday'];
		
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		BirthDay: <input type="date" name="mybirthday" value="<?php if(isset($date)){ echo $date; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>