
<?php
			
    			
include('library\connection.php');


				$f_name=$_POST['f_name'];
				$l_name = $_POST['l_name'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$username = $_POST['username'];
				$password= $_POST['password'];
				$type = $_POST['type'];
$query ="INSERT INTO user (f_name,l_name,email,phone,type, username,password) VALUES
('$f_name', '$l_name','$phone','$email','$username','$password','$type')";

if(mysql_query($query)){
    
    echo "Member Added Successfuly | <a href='listofborrowers.php'>Member List</a>";
}
else{
    echo "Try again";
}
						
			
?>
		
	  
