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
		 <a href="listofborrowers.php">CHECKOUTS</a>
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
	 
	<br>
<hr width="600">
<strong><h1>Hold Request Form</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="library/reservedformprocess.php" method="POST">
	<td><label>Student ID<label></td>
	<td><input type="text" name="id_num" required ></td>
	<tr>
	<td>Name of the Student</td>
	<td><input type="text" name="name" required></td>
	
	<tr>
	<tr>
	
	<tr>
	<td>Date To be Picked up</td>
	<td><input type="date" name="date_tobe_borrow" required></td>
	
	
	<tr>
		<td>
	<td><button name="borrowbook"><a class="-buttonform" ><span class="-home">Go</span></a></button></td>
	<tr>
	<td>
	<?php
	/*
		if(isset($_POST['borrowbook'])){
		if(empty($id_num) && empty($name) && empty($course) && empty($year) && empty($section) && empty($date_borrow) && empty($date_will_return) && empty($book_title) && empty($no_copies)){
			
		}
		else
			header("Location: library/borrowedbookprocess.php");
	}
	*/?>
	</td>
	</form>
	</table>

<script>
function addDate(){
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();

if (document.getElementById('date').value == ''){
document.getElementById('date').value = day + '-' + month + '-' + year;
}
}
</script>
<body onload="addDate();">
	</div>
	</div>
	  </div>
	  


<div class="sidenav">
		<div class="right-menu">
		<h2>Today's Date</h2>
		</div>
	<div class="right-content">
            <?php
echo  "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 11/25/2014 " ?>


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










	

   
   

