<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />	
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="Harold" /> 
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>

<script language="Javascript" src="js/CalendarControl.js" ></script>
<title>Library System</title>

</head>

<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: login.php');
}
?>

<body>

</div>

<div class="container">	
<?php
	include("library/header.php");
     
echo "<font color='#003300'><strong> Welcome ".$_SESSION['username']."!";
?>
<div class="navigation">
		<a href="index.php">ABOUT</a>
		<a href="reservedlist.php">CHECKOUTS</a>
		<a href="reservedlist.php">HOLDS</a>
		<a href="fines.php">FINES</a>
                <a href="books.php">SEARCH BOOKS</a>
		<a href="userslist.php">USER PROFILE</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
	<div class="main">		
		
		<div class="content">
			<div class="node">
			<div class="menu">

<hr width="625">
<strong><h1> User Profile Information</h1></strong>
<hr width="625">
<br>

<?php
include("library/connection.php");
$username =$_SESSION["username"];
 $sql = mysql_query("select * from user where username='$username'")
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysql_num_rows($sql) > 0) 
{            
	
					
while ($row = mysql_fetch_array($sql))
	{
	echo "<tr>";
	
	echo "<br>FirstName:&nbsp".$row['fname']." </br>";
        echo "<br>Last Name:&nbsp".$row['lname']." </br>";
         echo "<br>Type: &nbsp".$row['type']."</br>";
	echo "<br>Email: &nbsp".$row['email']."</br>";
        echo "<br>Phone:&nbsp".$row['phone']."</br>";
	echo "<br>Username:&nbsp ".$row['username']."</br>";
	echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp EDIT USER </br>";
        echo "<td title ='Edit'><a href=\"edituser.php?id=$row[id]\"><center><img src='img/edit.png'></center></a></td>";
        
}	
}
else
	echo "No User Record form the Database!";
mysql_free_result($sql);

?>
			</table>	
	</div>
	</div>
	  </div>
	  


<div class="sidenav">
		<div class="right-menu">
		<h2>Today's Date</h2>
		</div>
	<div class="right-content">
            <?php
echo  "&nbsp  " . date("Y/m/d") . "<br>"?>


	</div>
	
</div>
	
		<div class="clearer"><span></span></div>

	</div>

	
		<div class="clearer"><span></span></div>
<footer>	
		
	</footer>
	</div>

</div>

</body>

</html>


