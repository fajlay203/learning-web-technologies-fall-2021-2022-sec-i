<?php 


	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$comfirmpassword = $_POST['comfirmpassword'];
		$email 		= $_POST['email'];
	

		if($username != ""){
			if($password != ""){ 
				if($comfirmpassword !=""){
					if($email !=""){
						
							
					        $myfile = fopen('../model/user.txt', 'a');
				            $myuser = $username."|".$password."|".$email."\r\n";
					        fwrite($myfile, $myuser);
					        fclose($myfile);

					        header('location:../views/login.html');
				        
			        }else{
				    echo "invalid email....";
			        }
		        }else{
			    echo "invalid comfirmpassword....";
		        }
		    }else{
			echo "invalid password....";
	        }
	    }else{
	    echo "invalid username....";
	    }
	}
	
     
?>