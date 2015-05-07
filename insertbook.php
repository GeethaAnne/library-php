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
		<a href="logout.php">LOGOUT</a>>
		<div class="clearer"><span></span></div>
	</div>
<?php
			
    			
include('library\connection.php');


				$book_id=$_POST['book_id'];
				$book_title = $_POST['book_title'];
				$book_category = $_POST['book_category'];
				$status = $_POST['status'];
				$author = $_POST['author'];
				
$query ="INSERT INTO books (book_id,book_title,book_category,status,author) VALUES
('$book_id', '$book_title','$book_category','$status','$author')";

mysql_query($query);
if($query){
   
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Book Added Successfuly!!!! | <a href='booklist.php'>Book List</a>";
    
        
}
else{
    echo "Try again";
}
						
			
?>
		
	  
