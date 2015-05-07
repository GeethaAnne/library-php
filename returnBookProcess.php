<?php
	include('connection.php');
	
	$book_id = $_GET['book_id'];
        $return_date = $_GET['return_date'];
        $currentDate = date("Y/m/d");
        
      
			
	$datediff = floor(strtotime($return_date)/(60*60*24)) - floor(strtotime($currentDate)/(60*60*24));
        
        if($datediff>0){
            $fine = 1*$datediff;
        }else{
            $fine = 0;
        }
	$fineSql="update borrow_service set fine = '$fine' where book_id = '$book_id'";
        mysql_query($fineSql);
        
        
	
        
        
         $sqlReturnDate = mysql_query("Update borrow_service set return_date = now()");
        mysql_query($sqlReturnDate);
	
       
        
        $updateBookSql = mysql_query("UPDATE books SET status='Available' WHERE book_id='$book_id'");
        mysql_query($updateBookSql);
        
        if($updateBookSql){
			echo "Book has retuned Successfuly | <a href='booklist.php'>Book List</a>";
		}      
?>
