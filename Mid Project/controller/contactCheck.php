<?php 


	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$number 	= $_POST['number'];
		$email = $_POST['email'];
		$subject 		= $_POST['subject'];
		$meassage		= $_POST['meassage'];
		

		if($username != ""){
			if($number != ""){ 
				if($email !=""){
					if($subject !=""){
						if($meassage !=""){
						
							
					        $myfile = fopen('../model/contactRequest.txt', 'a');
				            $myuser = $username."|".$number."|".$email."|".$subject."|".$meassage."\r\n";
					        fwrite($myfile, $myuser);
					        fclose($myfile);

					        //header('location:../views/login.html');
				        
			            }else{
				        echo "invalid massage....";
			            }
		            }else{
			        echo "invalid subject....";
		            }
		        }else{
			    echo "invalid email....";
	            }
	        }else{
	        echo "invalid number....";
	        }
		}else{
	        echo "invalid username....";
	        }	
	}else{
	echo "submited !....";
	}	

	
     
?>