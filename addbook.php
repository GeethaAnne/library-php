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
	include("library/header.php");
?>
<div class="navigation">
 <a href="index.php">ABOUT</a>
                <a href="returnform.php">Return</a>
                <a href="books.php">Borrow</a>
                <a href="addBook.php"> Add Book</a>
                <a href="addMember.php">Add Member</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
	<div class="main">	
		
		<div class="content">
			<div class="node">
			<div class="menu">
				<class="but">|<a href="listofborrowers.php">List of Borrowers</a>| <a href=''>Add Books</a> |  <a href="booklist.php">Book List</a> |
				<br /><br/><hr />
	 	<table cellspacing="6">
		<form class="form" method="POST" action="insertbook.php">
		
		<tr>
			<td>Book Title</td>
			<td><input type="text" name="book_title"></td>
		</tr>
		<tr>
			<td>Book Category</td>
			<td><select name="book_category">
				<?php 
					include("library/connection.php");
					$query =mysql_query("select DISTINCT book_category from books ORDER BY book_category ASC");
						echo "<option>select category</option>";
					while($rs=mysql_fetch_array($query)){
						echo "<option>".$rs['book_category']."</option>";
					}
				?>
		</select></td>
		</tr>
		<tr>
			<td>Author</td>
			<td><input type="text" name="author"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="text" name="status"></td>
		</tr>
		<tr>
				<td></td>
				<td><button name="addbook"><a class="-buttonform" ><span class="-home">Go</span></a></button></td>
		</tr>
		</table><br/>
		
	</div>
	</div>
	  </div>
	  


<div class="sidenav">
		<div class="right-menu">
		<h2>Calendar</h2>
		</div>
	<div class="right-content">
		<?php include("library/calendar.php");?>
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
			Copyright 2012 &#174; <a href="http://webgeekresources.com" target="_blank">webgeekresources.com</a>. All Rights Reserved.
			
		</div>
</footer>
	</div>

</div>

</body>

</html>
