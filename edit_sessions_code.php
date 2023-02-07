<?php
	include('conn.php');
	$id=$_GET['student_id'];
 
    $place=$_POST['place'];
    $date=$_POST['date'];
    $time=$_POST['time'];


 
	mysqli_query($conn,"update `sessions` set place='$place', date='$date', time='$time' where student_id='$id'");
	header('location:add_sessions.php');


    
?>