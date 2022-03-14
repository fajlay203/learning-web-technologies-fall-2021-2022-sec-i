<?php
//delete.php

include('../model/database_connection.php');

if(isset($_POST["image_id"]))
{
 $file_path = '../files/' . $_POST["image_name"];
 if(unlink($file_path))
 {
  $query = "DELETE FROM my_property WHERE image_id = '".$_POST["image_id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>