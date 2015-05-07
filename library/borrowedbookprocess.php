<?php
	include('connection.php');
	$id_num = $_POST['id_num'];
	$name = $_POST['name'];
	
	$date_borrow = $_POST['date_borrow'];
	$date_will_return = $_POST['date_will_return'];
	$book_title = $_POST['book_title'];
	

	
		$query="INSERT INTO borrowers (id_number,name, date_borrow, date_will_return, book_title ) VALUES ('$id_num','$name','$date_borrow', '$date_will_return', '$book_title')";
		mysql_query($query);
		if($query){
			header("Location:../listofborrowers.php");
		}
?>
