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
 		<h1 style="margin-top: 50px">Participant Details</h1>
 		<br><br>
 		<table border="1px collapse">
 			<tr>
 				<th>Course ID</th>
 				<th>Course Name</th>
 				<th>Participant Name</th>
 				<th>Participant Email</th>
 				<th>Participant Contact</th>
 				
 			</tr>
 			<?php 
 				$q1="SELECT * from payment";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						<td><?php echo $row['course_id']; ?></td>
 						<td><?php echo $row['course_name']; ?></td>
 						<td><?php echo $row['cust_name']; ?></td>
 						<td><?php echo $row['cust_email']; ?></td>
 						<td><?php echo $row['cust_contact']; ?></td>
 						

 					</tr>

 				<?php }


 			 ?>
 		</table>
 	</center>
 
 </body>
 </html>