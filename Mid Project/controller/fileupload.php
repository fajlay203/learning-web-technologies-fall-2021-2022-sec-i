<?php 

	$des = "../upload_file/".$_FILES["myfile"]["name"];

	$src = $_FILES["myfile"]["tmp_name"];

	if(move_uploaded_file($src, $des)){
		echo "YES! uplode compeleted..";
	}else{
		echo "SORRY! uplode filed..";
	}
?>