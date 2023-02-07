<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `sessions` where id='$id'");
	header('location:add_session.php');
?>