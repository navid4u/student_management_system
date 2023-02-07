<!DOCTYPE html>
<html>
<head>
<title>Students</title>
</head>
<link href="Style.css" rel="stylesheet">

<body>

<table style="position: absolute;">

<th><a href="index.php"><img  src="home.gif" width="90" height="88" alt="HOME"/></a></th>
      <th><a href="add_payment.php"><img    width="90" height="88" src="payment.gif" width="178" height="180" alt=" PAYMENT"/></a></th>
      <th><a href="add_session.php"><img    width="90" height="88" src="sessions.gif" width="178" height="180" alt="ADD SESSIONS"/></a></th>
      <th><a href="index.php"><img   width="90" height="88" src="students.gif" width="178" height="180" alt="STUDENTS"/></a></th> 
</tr> </table>
<table width="100%"  border="0" height="116px" background="banner.gif">     
<tr>



</table>
	<br>

	
	<h1 align="center" style="text-decoration: ;"> List of Students  </h1>
	<div>
		<table    class="styled-table">
			<thead>
				<th>Name</th>
				<th>Age</th>
                <th class="active-row">Time</th>
                <th>Expected sessions</th>
                <th>Purpose</th>
                <th>Other information</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `students`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							 
							<td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $row['expected_sessions']; ?></td>
                            <td><?php echo $row['purpose']; ?></td>
                            <td><?php echo $row['information']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    <br>
    <div>
    <table border="0" width="86%" align="center" height="100" style="background-color: beige">
			<thead>
		<form method="POST" action="add.php">
            <tr>
        <th>
             <label>Name:     </label> <br> <input type="text" name="name"></th> 
             
        <th><label>Age:      </label><br> <input type="text" name="age"></th> </tr>
        <tr>
        <th><label>Time:      </label><br> <input type="text" name="time"></th>
        <th><label>Expected sessions:    </label><br> <input type="text" name="expected_sessions"></th> </tr>
        <th><label>Purpose:    </label><br> <input type="textarea" name="purpose"></th>
        <th><label>Other information:   </label><br> <input type="text" name="information"></th>
<br>
    </thead>
<table width="86%" align="center" height="50">
	<br>
<tr width="86%" align="center"> <td> <input class="sbutton" type="submit" name="add" align="middle" value="Add a new student to the list"> 



</td></tr>

</table>        
<h4 align="center">





<?php
	include('conn.php');

	$result= mysqli_query($conn,"SELECT * FROM students" );

	
	$count= mysqli_num_rows($result);
	
	echo "The total number of your students is $count";
	
	
	?> </h4>
	 
	<h4 align="center">
		<?php

	$result2= mysqli_query($conn,"SELECT * FROM sessions" );

	
	$count2= mysqli_num_rows($result2);
	
	echo "The total number of the sesssion you have held is $count2";
	
	

	
	?></h4>
</table>



       

		</form>
       


	</div>
	
	<img src="footer.png" style="width: 100%" />


</body>

</html>