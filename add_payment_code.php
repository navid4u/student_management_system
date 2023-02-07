<?php
	include('conn.php');
 
	$student_id=$_POST['student_id'];
    $money=$_POST['money'];
    $date=$_POST['date'];
    
 
	mysqli_query($conn,"insert into `payment` (student_id,money,date) values ('$student_id','$money', '$date')");
	header('location:add_payment.php');
 
?>