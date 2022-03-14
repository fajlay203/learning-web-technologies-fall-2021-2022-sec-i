
<?php 

	require_once('db.php');
	
	
	function addUser($user){
		$con = getConnection();
		$sql = "insert into contact values('', '{$user["username"]}', '{$user["number"]}', '{$user["email"]}', '{$user["subject"]}', '{$user["meassage"]}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>	