<?php
	include('connection.php');
	$id_num = $_POST['id_num'];
	$name = $_POST['name'];
	
	$date_tobe_borrow = $_POST['date_tobe_borrow'];
	$book_title = $_POST['book_title'];
	

	

		$query="INSERT INTO reserve_books (id_number,name,date_tobe_borrow, book_title ) VALUES ('$id_num','$name', '$date_tobe_borrow', '$book_title')";
		mysql_query($query);
		if($query){
			header("Location:../reservedlist.php");
		}
?>
