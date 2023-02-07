<?php
	include('conn.php');
 
	$student_id=$_POST['student_id'];
    $place=$_POST['place'];
    $time=$_POST['time'];
    $date=$_POST['date'];
	$homework=$_POST['homework'];
    
 
	mysqli_query($conn,"insert into `sessions` (student_id,place,time,date,homework) values ('$student_id','$place', '$time', '$date', '$homework')");
	header('location:add_session.php');
 
?>