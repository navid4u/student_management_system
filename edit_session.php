<!DOCTYPE html>
<html>
<head>
<title>Students</title>
</head>
<style type="text/css">
body{
margin: 0;
padding: 0
}
tr {
  border-bottom: 1px solid #ddd;
}


</style>
<body>

<table style="position: absolute;">

<th><a href="index.php"><img  src="home.gif" width="90" height="88" alt=""/></a></th>
      <th><a href="add_payment.php"><img    width="90" height="88" src="payment.gif" width="178" height="180" alt=""/></a></th>
      <th><a href="add_session.php"><img    width="90" height="88" src="sessions.gif" width="178" height="180" alt=""/></a></th>
      <th><a href="index.php"><img   width="90" height="88" src="students.gif" width="178" height="180" alt=""/></a></th> 
</tr> </table>
<table width="100%"  border="0" height="116px" background="banner.gif">     
<tr>



</table>
	<br>

	<h2 align="center">Edit Sessions</h2>
	<form method="POST" action="edit_sessions_code.php?id=<?php echo $id; ?>">
    <br>


    <table width="66%" border="1" cellspacing="10" cellpadding="30" align="center">
  <tbody>
    <tr>
      <td><label>Date:</label></td>
      <td><input type="text" value="<?php echo $row['date']; ?>" name="date"></td>
    </tr>
    <tr>
      <td><label>Place:</label></td>
      <td><input type="text" value="<?php echo $row['place']; ?>" name="place"></td>
    </tr>
    <tr>
      <td> <label>Time:</label></td>
      <td> <input type="text" value="<?php echo $row['time']; ?>" name="time"></td>
    </tr>
     
  </tbody>
</table>



	
       
        <br>
        <table width="40%" border="0" cellspacing="30" cellpadding="30" align="center">
<tr>
		<td align="center"> <input type="submit" name="submit">
        <br>
		<a href="add_session.php">Back</a>
        <br> </td>
</tr>

</div>
	</form>
</body>
</html>