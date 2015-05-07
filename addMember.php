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
?>
	<div class="main">		
		
		<div class="navigation">
		<a href="index.php">ABOUT</a>
                <a href="returnform.php">Return</a>
                <a href="books.php">Borrow</a>
                <a href="addBook.php"> Add Book</a>
                <a href="addMember.php">Add Member</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
		
		<div class="content">
			<div class="node">
			<div class="menu">
	<button name="listofborrowers" class="but">|<a href="listofborrowers_1.php">List of Borrowers</a>|</button>
	<br>
	<br>

<hr width="600">
<strong><h1>Add member's information</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="insertMember.php" method="POST">
	
	<tr>
	<td>First Name</td>
	<td><input type="text" name="f_name" required></td>
	</tr>
        <tr>
	<td>Last Name</td>
	<td><input type="text" name="l_name" required></td>
	</tr>
        <tr>
	<td>Phone</td>
	<td><input type="text" name="phone" required></td>
	</tr>
        <tr>
	<td>Email</td>
	<td><input type="text" name="email"  required></td>
        </tr>
        <tr>
	<td>Username</td>
	<td><input type="text" name="username" required></td>
	</tr>
        <tr>
	<td>Password</td>
	<td><input type="text" name="password" required></td></tr>
	<tr>
	<td>User Type</td>
	<td><select name="type">
		<option value="STUDENT">Student</option>
		<option value="STAFF">Faculty</option>
		
	</select>
        </td> </tr>
    <tr>
        <td><button name="add"><a class="-buttonform" ><span class="">Go</span></a></button></td>
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
