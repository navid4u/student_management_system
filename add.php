<?php
	include('conn.php');
 
	$name=$_POST['name'];
    $age=$_POST['age'];
    $time=$_POST['time'];
    $expected_sessions=$_POST['expected_sessions'];
    $purpose=$_POST['purpose'];
    $information=$_POST['information'];
 
	mysqli_query($conn,"insert into `students` (name,age,time,expected_sessions,purpose,information) values ('$name','$age', '$time', '$expected_sessions', '$purpose', '$information')");
	header('location:index.php');
 
?>