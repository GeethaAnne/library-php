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
	<div class="main">		
		
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
		
		<div class="content">
			<div class="node">
			<div class="menu">
<!--<font color=red>Note: 1 Reservation at a time, Duplicate Student Id will not Inserted into the Reservation</font>-->
<br>
<br>
<hr width="600">
<strong><h1>Holds on the Account</h1></strong>
<hr width="600">
<br>
			<?php
include("library/connection.php");
 $sql = mysql_query("select * from reserve_books")
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysql_num_rows($sql) > 0) 
{            
	echo "<table border='1' cellspacing='0' cellpadding='10' class='table' width='600'>";
	echo "<td>Student ID</td>";
	echo "<td>Name of the student</td>";

	echo "<td>Date To be Picked up</td>";
	
	
	echo "<td colspan='1'>Cancel</td>";
	echo "<tr>";
		}
else
	echo "No Reserved Book from the Database!";		
while ($row = mysql_fetch_array($sql))
	{
	echo "<tr>";
	echo "<td>".$row['id_number']."</td>";
	echo "<td>".$row['name']."</td>";
	
	echo "<td>".$row['date_tobe_borrow']."</td>
	
	

	<td title ='Cancel'><a href=\"deletereserved.php?id_number=$row[id_number]\"><center><img src='img/delete.png'></center></a></td>";
	
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
echo  "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 11/25/2014 " ?>


	</div>
	
</div>
	
		<div class="clearer"><span></span></div>

	</div>

	
		<div class="clearer"><span></span></div>
<footer>	
		
	</div>

</div>

</body>

</html>






   
   






