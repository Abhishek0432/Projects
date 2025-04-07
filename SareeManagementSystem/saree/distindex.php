<?php 
	include "distnav.php";
	include "connect.php";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<style type="text/css">
 		th,td
 		{
 			padding: 20px;
 			color: black;
 			font-size: 15px;
 		}
 	</style>
 </head>
 <body>
 	<center>
 		<br><br>
 		<h1>My Profile</h1>
 		<table>
 			<?php 
 				$profile="SELECT * from dist where email='$email'";
 				$disp=mysqli_query($conn,$profile);
 				while ($row=mysqli_fetch_assoc($disp)) 
 					{?>
 					<tr>
 						<th> First Name</th>
 						<td><?php echo $row['fname']; ?></td>
 				
 					</tr>

 					<tr>
 						<th> Last Name</th>
 						<td><?php echo $row['lname']; ?></td>
 				
 					</tr>

 					<tr>
 						<th> Gender</th>
 						<td><?php echo $row['gender']; ?></td>
 				
 					</tr>


 					<tr>
 						<th>Address</th>
 						<td><?php echo $row['addr']; ?></td>
 				
 					</tr>

 					<tr>
 						<th>Contact</th>
 						<td><?php echo $row['contact']; ?></td>
 				
 					</tr>

 					<tr>
 						<th>Email</th>
 						<td><?php echo $row['email']; ?></td> 				
 					</tr>
 				<?php }


 			 ?>
 			
 		</table>
 		<br><br><br>
 	</center>
 </body>
 </html>