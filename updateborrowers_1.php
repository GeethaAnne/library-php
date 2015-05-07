<?php
		include("library\connection.php");
		if(isset($_POST['update'])){
				
				$member_id=$_POST['id'];
				$f_name=$_POST['f_name'];
				$l_name = $_POST['l_name'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$username = $_POST['username'];
				$password= $_POST['password'];
				$type = $_POST['type'];
				
                                
				$sql="UPDATE user set fname='$f_name',lname='$l_name',phone='$phone',email='$email', 
				username='$username', password='$password',type='$type' 
				where id='$member_id'";
				mysql_query($sql) or die('Error');
				header("Location: listofborrowers_1.php");
			}
			?>
