<?php 
	include "connect.php";
	include "adminnav.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 50px">Delivery Details</h1>
 		<br><br>
 		<table border="1px collapse">
 			<tr>
 				<th>First Name</th>
 				<th>Last Name</th>
                <th>Gender</th>
 				<th>Address</th>
 				<th>Contact</th>
 				<th>Email</th>
 				
 			</tr>
 			<?php 
 				$q1="SELECT * from delivery";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						<td><?php echo $row['fname']; ?></td>
 						<td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['addr']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['email']; ?></td>
 						

 					</tr>

 				<?php }


 			 ?>
 		</table>
 	</center>
 
 </body>
 </html>