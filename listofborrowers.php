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

|  <a href="booklist.php">Book List</a> |
<br>
<br>
<hr width="600">
<strong><h1>Books Borrowed</h1></strong>
<hr width="600">
<br>
			<?php
include("library/connection.php");
 $sql = mysql_query("select * from borrowers")
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysql_num_rows($sql)) 
{            
	echo "<table border='1' cellspacing='0' cellpadding='10' class='table' width='600'>";
	echo "<td>ID Number</td>";
	echo "<td>Name</td>";
	
	echo "<td>Date Borrow</td>";
	echo "<td>Date will Return</td>";
	echo "<td>Book Title</td>";
	
	
	
	echo "<tr>";
		

		}
else
	echo "No Borrowers Record from the Database!";				
while ($row = mysql_fetch_array($sql))
	{
	echo "<tr>";
	echo "<td>".$row['id_number']."</td>";
	echo "<td>".$row['name']."</td>";
	
	echo "<td>".$row['date_borrow']."</td>";
	echo "<td>".$row['date_will_return']."</td>";
	echo "<td>".$row['book_title']."</td>";
	
	
}			 
mysql_free_result($sql);

?>

</form>
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
echo  "<strong> &nbsp Today is : </strong> 11/25/2014  "  ?>


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






   
   






