<?php

include('../model/database_connection.php');

if(count($_FILES["image"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
 {
  $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));
  $query = "INSERT INTO enquiry(images) VALUES ('$image_file')";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}


?>