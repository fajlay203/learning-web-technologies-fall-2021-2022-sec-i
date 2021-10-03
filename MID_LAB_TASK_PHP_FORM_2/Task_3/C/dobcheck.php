<?php 

	
	$birthday = $_REQUEST['mybirthday'];


	if($birthday != ""){
		echo $birthday;
	}else{
		echo "Null value...";
	}

?>