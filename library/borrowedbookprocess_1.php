<?php
	include('connection.php');
	$member_id = $_POST['member_id'];
	$book_id = $_POST['book_id'];
        
         $sqlCount = mysql_query("select count(*) from used_service u,service s where u.member_id = '$member_id' and s.service_name='borrow' and s.service_id = u.service_id");
         $count = mysql_fetch_row($sqlCount);
         
        
	
        $typeSql = mysql_query("select type from member where member_id='$member_id'");
        $data = mysql_fetch_row($typeSql);
     

        
        if($data[0] === "Student"){
            $returnDate=Date('y:m:d', strtotime("+21 days"));
            $maxBorrow = 5;
            
        }  else {
            $returnDate=Date('y:m:d', strtotime("+28 days"));
            $maxBorrow = 7;
        }
       
        if( $data[0] === "Student" && $count[0] >$maxBorrow){
            echo "Student cannot borrow more than 5 books | <a href='booklist.php'>Book List</a>";
        }
        
        if( $data[0] === "Faculty" && $count[0] >$maxBorrow){
            echo "Faculty cannot borrow more than 7 books | <a href='booklist.php'>Book List</a>";
        }
        $sql = mysql_query("Insert into Service (service_name,library_id) values ('borrow',1)");
        mysql_query($sql);      
        
        $borrowServiceSql = mysql_query("Insert into borrow_service(service_id,book_id,issue_date,return_date)
                                               Values(LAST_INSERT_ID(),'$book_id',now(),'$returnDate')");
        mysql_query($borrowServiceSql);
        
        $usedServiceSql = mysql_query("Insert into used_service( member_id,service_id) values ( '$member_id',LAST_INSERT_ID())");
        mysql_query($usedServiceSql);
        
        $updateBookSql = mysql_query("UPDATE books SET status='Unavailable' WHERE book_id='$book_id'");
        mysql_query($updateBookSql);
        
        if($updateBookSql){
			echo "Book has retuned Successfuly | <a href='booklist.php'>Book List</a>";
		}         
?>
