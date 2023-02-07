

<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `students` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit students</title>
</head>
<body>
    
<style type="text/css">
body{
margin: 0;
padding: 0
}
</style>
<img src="banner.gif" style="width: 100%" />
<br>

	<h2 align="center">Edit Students</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <br>


    <table width="66%" border="1" cellspacing="10" cellpadding="30" align="center">
  <tbody>
    <tr>
      <td><label>Name:</label></td>
      <td><input type="text" value="<?php echo $row['name']; ?>" name="name"></td>
    </tr>
    <tr>
      <td><label>Age:</label></td>
      <td><input type="text" value="<?php echo $row['age']; ?>" name="age"></td>
    </tr>
    <tr>
      <td> <label>Time:</label></td>
      <td> <input type="text" value="<?php echo $row['time']; ?>" name="time"></td>
    </tr>
    <tr>
      <td><label>Expected sessions:</label></td>
      <td> <input type="text" value="<?php echo $row['expected_sessions']; ?>" name="expected_sessions"></td>
    </tr>
    <tr>
      <td><label>Purpose:</label></td>
      <td> <input type="text" value="<?php echo $row['purpose']; ?>" name="purpose"></td>
    </tr>
    <tr>
      <td><label>Information:</label></td>
      <td> <input type="text" value="<?php echo $row['information']; ?>" name="age"></td>
    </tr>
  </tbody>
</table>



	
       
        <br>
        <table width="40%" border="0" cellspacing="30" cellpadding="30" align="center">
<tr>
		<td align="center"> <input type="submit" name="submit">
        <br>
		<a href="index.php">Back</a>
        <br> </td>
</tr>

</div>
	</form>
</body>
</html>