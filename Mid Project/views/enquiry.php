<?php 
	include 'header.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enqueue</title>
</head>
<h2>Upload your NID for security verification :</h2>
<body>

		<form method="POST" action="../controller/fileupload.php" enctype="multipart/form-data">
			<fieldset>
				Document: <input type="file" name="myfile"/>
				<input type="submit" name="submit" value="Submit"/>
			</fieldset>
		</form>
</body>
</html>

<?php 
include 'footer.php'
	
?>