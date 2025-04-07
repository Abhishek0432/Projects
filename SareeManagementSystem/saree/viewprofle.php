<?php 
	include "publicnav.php";
	include "connect.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<center>
 		<table>
            <br><br>
            <h1>My Profile</h1>
 			<?php 
 			$q1="SELECT * from public where email='$email' ";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 			<tr>
 				<th>First Name</th>
 				<td><?php echo $row['fname']; ?></td>
 			</tr>
 			<tr>
 				<th>Last Name</th>
 				<td><?php echo $row['lname']; ?></td>
 			</tr>
 			<tr>
 				<th>Gender </th>
 				<td><?php echo $row['gender']; ?></td>
 			</tr>
 			<tr>
 				<th>Address </th>
 				<td><?php echo $row['addr']; ?></td>
 			</tr>
 			
 			<tr>
 				<th>Contact </th>
 				<td><?php echo $row['contact']; ?></td>
 			</tr>
 			<tr>
 				<th>Email </th>
 				<td><?php echo $row['email']; ?></td>
 			</tr>

 			

 		<?php } ?>
 		</table>
 	</center>
 
 </body>
 </html>