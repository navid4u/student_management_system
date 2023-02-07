<!DOCTYPE html>
<html>
<head>
<title>Sessions</title>
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
    <h2 align="center"> Add a session </h2>
    <br>
	<div>
		<table  class="styled-table">
			<thead>
				<th>Student</th>
				<th>Place</th>
                <th>Time</th>
                <th>Date</th>
				<th> Homework </th>
               
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
                
					$query=mysqli_query($conn,"select * from `sessions`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							 
							<td><?php echo $row['student_id']; ?> </td>
                            <td><?php echo $row['place']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $row['date']; ?></td>
							<td><?php echo $row['homework']; ?></td>
                      
							<td>
                            <a class="sbutton"  href="edit_session.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a class="sbutton" href="delete_session.php?id=<?php echo $row['id']; ?>">Delete</a>
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
    <table border="0" width="36%" align="center" height="100">
			<thead>
		<form method="POST" action="add_session_code.php">
            <tr>
        <th>
             <label>Student's Name:     </label> <br>
            
            
            <?php 
if($r_set = $conn->query("SELECT * from students")){

    echo "<select id=name name=student_id class='form-control' style='width:100px;'>";
    while ($row = $r_set->fetch_assoc()) {
    echo "<option value=$row[id]>$row[name]</option>";
       
    }
    echo "</select>";
   
    }else{
    echo $connection->error;
    }

?>
            
            
            
            
            </th> 
             
			<tr><th><label>Place:      </label><br> <input type="text" name="place"></th></tr>
			<tr><th><label>Time:      </label><br> <input type="text" name="time"></th></tr>
		<tr><th><label>Homework:    </label><br> <input type="text" style="height:100px" name="homework"></th></tr> 
        <th><label>Date:    </label><br> <input type="text" name="date"></th> </tr>
		
        
    </thead>
<table width="86%" align="center" height="80">
	<br>
<tr width="86%" align="center"> <td> <input class="sbutton" type="submit" name="add" align="middle" value="Add a new session">  </td></tr>

</table>        
        
</table>



       

		</form>


		
<br>

	</div>


	<table width="86%" align="center" height="10">

<h1 align="center"> List of sessions </h1>

</table>
	<table  class="styled-table">
		<thead>
			<th>Student ID</th>
			<th>Name</th>
			<th>Place of the class</th>
			<th>Date </th>
			<th>The time it was held</th>
			<th>Homework</th>
		</thead>
		<tbody>
		<?php
			include('conn.php');
			$query=mysqli_query($conn,"select * from `students` left join sessions on students.id=sessions.student_id");
			while($row=mysqli_fetch_array($query)){
				?>
					<tr>
					<td><?php echo $row['student_id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['place']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo $row['time']; ?></td>
					<td><?php echo $row['homework']; ?></td>
					</tr>
				<?php
			}
		?>
 
		</tbody>
	</table>

<br>
<img src="footer.png" style="width: 100%" />
</body>
</html>