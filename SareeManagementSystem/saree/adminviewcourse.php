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
 		<h1 style="margin-top: 50px">Course Details</h1>
 		<br><br>
 		<table border="1px collapse">
 			<tr>
 				<th>Course ID</th>
 				<th>Course Name</th>
 				<th>Course Description</th>
 				<th>Long Term Fees</th>
 				<th>Course Details</th>
 				<th>Add Videos</th>
 			</tr>
 			<?php 
 				$q1="SELECT * from addcourse";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						<td><?php echo $row['course_id']; ?></td>
 						<td><?php echo $row['course_name']; ?></td>
 						<td><?php echo $row['course_desc']; ?></td>
 						<td><?php echo $row['course_type']; ?></td>
 						<td><?php echo $row['course_fees']; ?></td>
 						<td><?php echo $row['details'] ?></td>
 						<td><input type="button" value="Upload Video" onclick="window.location='addvideo.php?cid=<?php echo $row['course_id']; ?> & ctype=<?php echo $row['course_type']; ?>' "></td>

 					</tr>

 				<?php }


 			 ?>
 		</table>
 	</center>
 
 </body>
 </html>