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
	include("library\header.php");
?>
	<div class="main">		
		
		
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
<?php
	include("library\connection.php");
	//selecting data from records based on id
	$query = "SELECT * FROM user where id='".$_GET['id']."'";
	//initializing result as a query
	$result = mysql_query($query);
	//display records from records table 
	while($rows = mysql_fetch_array($result))
	{	
		
		$id = $rows['id'];
		$f_name = $rows['fname'];
		$l_name = $rows['lname'];
		$phone = $rows['phone'];		
		$email = $rows['email'];		
		$username = $rows['username'];		
		$password= $rows['password'];		
		$type= $rows['type'];		
					
	}	
?>
<hr width="600">
<strong><h1>Edit member's information</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="updateborrowers_1.php?member_id=<?php echo $id?>" method="POST">
	<tr>
	<td>Member id</td>
	<td><input type="text" name="id" value='<?php echo $id?>' required readonly></td>
	</tr>
	<tr>
	<td>First Name</td>
	<td><input type="text" name="f_name" value='<?php echo $f_name?>' required></td>
	</tr>
        <tr>
	<td>Last Name</td>
	<td><input type="text" name="l_name" value='<?php echo $l_name?>' required></td>
	</tr>
        <tr>
	<td>Phone</td>
	<td><input type="text" name="phone" value='<?php echo $phone?>' required></td>
	</tr>
        <tr>
	<td>Email</td>
	<td><input type="text" name="email" value='<?php echo $email?>' required></td>
        </tr>
        <tr>
	<td>Username</td>
	<td><input type="text" name="username" value='<?php echo $username?>' required></td>
	</tr>
        <tr>
	<td>Password</td>
	<td><input type="text" name="password" value='<?php echo $password?>' required></td></tr>
	<tr>
	<td>User Type</td>
	<td><select name="type">
		<option value='<?php echo $type?>'><?php echo $type?></option>
		<option value='<?php echo $type?>'>------</option>
		<option value="STUDENT">Student</option>
		<option value="STAFF">Staff</option>
		
	</select>
        </td> </tr>
    <tr>
        <td><button name="update"><a class="-buttonform" ><span class="">Go</span></a></button></td>
    </tr> 
	
	</form>
	</table>

	</div>
	</div>
	  </div>
	  


<<div class="sidenav">
		<div class="right-menu">
		<h2>Today's Date</h2>
		</div>
	<div class="right-content">
            <?php
echo  "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 11/25/2014 " ?>


	</div>
	
</div>	
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
