<?php
	include('conn.php');
	$id=$_GET['id'];
 
    $name=$_POST['name'];
    $age=$_POST['age'];
    $time=$_POST['time'];
    $expected_sessions=$_POST['expected_sessions'];
    $purpose=$_POST['purpose'];
    $information=$_POST['information'];

 
	mysqli_query($conn,"update `students` set name='$name', age='$age', time='$time', expected_sessions= '$expected_sessions', purpose= '$purpose', information='$information' where id='$id'");
	header('location:index.php');


    
?>