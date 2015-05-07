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
<title>Library Management System</title>

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
<?php if ($_SESSION['username'] == 'administrator') { ?>
<div class="navigation">
		<a href="index.php">ABOUT</a>
                <a href="returnform.php">Return</a>
                <a href="books.php">Borrow</a>
                <a href="addBook.php"> Add Book</a>
                <a href="addMember.php">Add Member</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
<?php }else{ ?>

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
<?php } ?>
	<div class="main">		
		
		<div class="content">
			
			
				
                                  
	<?php
        $image=	"img\l2.jpg";
        echo "<img src=".$image." Style=width:630px;height:250px; >"
        ?>
            <?php
				
                              $str = "Hello, <br> Welcome! \n This is a simple and user-friendly ONLINE LIBRARY SYSTEM designed by Geetha and Layla <br> Users are facilitated to : <br> ** Process their book requests <br> ** Borrow or hold books <br> ** Review their reading history <br> ** View the fine details <br> ** many more great features!";
echo "<font color='yellow'>$str</font>";
 echo "<font color='#000066'><br>Have a nice day!</font>";
	  			
 ?>                
	
	
	  </div>
	  

<!--
<div class="sidenav">
		<div class="right-menu">
		<h2>Today is:</h2>
		</div>
	<div class="right-content">
-->
		<?php
echo  "<strong> &nbsp Today is : </strong> 11/25/2014  "  ?>

        </div>
	
	
</div>
	
		<div class="clearer"><span></span></div>

	</div>

	
		<div class="clearer"><span></span></div>

	</div>

</div>

</body>

</html>


