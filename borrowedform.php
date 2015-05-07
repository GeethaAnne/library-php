<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />	
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
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
	include("header.php");
        echo "<font color='#003300'><strong> Welcome ".$_SESSION['username']."!";
?>
<div class="navigation">
		<a href="index.php">ABOUT</a>
		<a href="reservedlist.php">RESERVED LIST</a>
		<a href="returnbook.php">RETURN BOOK</a>
		<a href="books.php">BOOKS</a>
		<a href="userslist.php">USERS</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
	<div class="main">		
		
		<div class="content">
			
			<div class="node">
			<div class="menu">
	<class="but">|<a href="listofborrowers.php">List of Borrowers</a>|
	<br>
	<br>
<hr width="600">
<strong><h1>Borrow Form</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="borrowedbookprocess.php" method="POST">
    <tr>
	<td><label>Member ID<label></td>
	<td><input type="text" name="member_id"></td>
        <td><input type="text" name="book_id" value="<?php echo $_GET['book_id'];?>"></td>
	
    </tr>
    <tr>
		
	<td><button name="borrowbook"><a class="-buttonform" ><span class="-home">Go</span></a></button></td>
        <td></td>
    </tr>
</form>
</table>


	</div>
	</div>
	  </div>
	  


<div class="sidenav">
		<div class="right-menu">
		<h2>Calendar</h2>
		</div>
	<div class="right-content">
		
</table>
</td>
</tr>

</table>


	</div>
	
</div>
	
		<div class="clearer"><span></span></div>

	</div>

	
		<div class="clearer"><span></span></div>
<footer>	
		<div class="copyright">
			<!--
			Copyright 2012 &#174; <a href="http://webgeekresources.com" target="_blank">webgeekresources.com</a>. All Rights Reserved.
			-->
			</div>
	</footer>
	</div>

</div>
</body>

</html>






   
   

