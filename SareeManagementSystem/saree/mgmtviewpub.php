<?php 
	include "connect.php";
	include "mgmtmenu.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 50px">Public Details</h1>
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
 				$q1="SELECT * from public";
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
                <br><br><br>
 	</center>
 
 </body>
 </html>