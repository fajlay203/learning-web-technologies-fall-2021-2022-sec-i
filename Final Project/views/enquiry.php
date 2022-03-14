<?php 
	include 'header.php'
?>


<!DOCTYPE html>  
<html>  
    <head>  
        <title> Insert Multiple Images into Mysql Database using PHP</title>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		<script src=""></script> 
<style>
        h1 {
  border: 2px solid black;
  outline: #4CAF50 solid 10px;
  margin: auto;  
  padding: 20px;
  text-align: center;
}
/* Style the footer */
footer {
  background-color: #00004d;
  padding: px;
  text-align: center;
  color: white;
}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

</style>
    
    </head>  
    <body>  
	<fieldset>
	 <legend>Enqiry</legend>
		<table>
        <br /><br />  
        <div class="container">  
   <h1 align="center">Insert Images or Files for Enquiry </h1>  
            <br />  
            <form method="post" id="upload_multiple_images" enctype="multipart/form-data">
                <input type="file" name="image[]" id="image" multiple accept=".jpg,.png,.txt,.docx,.pdf,.gif" />
                <br />
                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
            </form>
            <br />  
            <br />
			 </fieldset>
			 </table>
   
            <div id="images_list"></div>
             
        </div> 
		<footer>
    <p>copyright:FR Real Estate.co,2021</p>
  </footer>
	  	
   </body>  
</html>  
<script>  
$(document).ready(function(){

    load_images();

    function load_images()
    {
        $.ajax({
            url:"../controller/fetch_images.php",
            success:function(data)
            {
                $('#images_list').html(data);
            }
        });
    }
 
    $('#upload_multiple_images').on('submit', function(event){
        event.preventDefault();
        var image_name = $('#image').val();
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
            $.ajax({
                url:"../controller/insert.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('#image').val('');
                    load_images();
                }
            });
        }
    });
 
});  
</script>