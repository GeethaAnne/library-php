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
				<class="but">|<a href="listofborrowers.php">List of Borrowers</a> | <a href='booklist.php'>Book List</a>
				<br /><br/><hr />
	 	<table cellspacing="6">
		<form class="form" method="POST">
		<tr>
		<td>Category: </td>
		<td><select name="category" onchange="this.form.submit();">
				<?php 
					include("library/connection.php");
					$query =mysql_query("select DISTINCT book_category from books ORDER BY book_category ASC");
						echo "<option>select category</option>";
					while($rs=mysql_fetch_array($query)){
						echo "<option>".$rs['book_category']."</option>";
					}
				?>
		</select></td>
		</table><br/>
		<?php

    		 if (isset($_POST['category'])) { 
			echo "<table border=1 id='tab' width='100%' cellpadding=0 cellspacing=0";
			$categ = $_POST['category'];
			$locate =mysql_query("select * from books where book_category like '%$categ%'");
		
			echo "<tr>";
			echo "<th>bookid</th>";
			echo "<th>book title</th>";
			echo "<th>category</th>";
			
			echo "<th>status</th>";
                        echo "<th>author</th>";
			echo "<th>Borrow</th>";
			echo "<th>Hold</th>";
			echo "</tr>";

			while($rows=mysql_fetch_array($locate)){
				echo "<tr>";
				echo "<td>".$rows['book_id']."</td>";
				echo "<td>".$rows['book_title']."</td>";
				echo "<td>".$rows['book_category']."</td>";
				
				echo "<td>".$rows['status']."</td>";
                                echo "<td>".$rows['author']."</td>";
				echo "<td title=Borrow><a href='borrowedform.php?book_id=".$rows['book_id']."'><center><img src='img/brow.png'></center></a></td>";
				echo "<td title=Hold><a href='reservedform.php?book_id=".$rows['book_id']."'><center><img src='img/reserved.png'></center></a></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
				
	
		?>
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
<!--<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>-->

