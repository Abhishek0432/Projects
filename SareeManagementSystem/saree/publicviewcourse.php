<?php 
	include "connect.php";
	include "publicnav.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
	th,td
	{
		padding:20px;
	}
	td input
	{
		width: 150px;
		height: 40px;
		border-radius: 10px;
	}
	select
	{
		width: 200px;
		height: 40px;
		border-radius: 10px;
	}
</style>
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
 				<th>Download syllabus</th>
 				<th>Short Video</th>
 				<th style="text-align: center;" colspan="2">Long Video</th>
 				<th colspan="2">Advanced Video</th>
 				
 			</tr>
 			<?php 
 				$q1="SELECT * from addcourse";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{
 						$cid=$row['course_id'];
 				 ?>
 					<tr>
 						<td><?php echo $row['course_id']; ?></td>
 						<td><?php echo $row['course_name']; ?></td>
 						<td><?php echo $row['course_desc']; ?></td>
 						<td><?php echo $row['course_fees']; ?></td>
 						<td><?php echo $row['course_fees']; ?></td>
 						<td><input type="button" value="Download" onclick="window.location='pdf.php?details=<?php echo $row['details']; ?>'"></td>
 						<td><input type="button" value="Short Video" onclick="window.location='shortvideo.php?cid=<?php echo $row['course_id']; ?>'">
 						</td>
 						<td><input type="button" value="payment" onclick="window.location='longvideo.php?cid=<?php echo $row['course_id']; ?>'">
 						</td>
 						<td><input type="button" value="View Video" onclick="window.location='viewlong.php?cid=<?php echo $row['course_id']; ?>'">
 						</td>
 						<td><input type="button" value="Payment " onclick="window.location='advancevideo.php?cid=<?php echo $row['course_id']; ?>'">
 						</td>
 						<td><input type="button" value="View Advanced Video" onclick="window.location='viewadvance.php?cid=<?php echo $row['course_id']; ?>'">
 						</td>
 						
 						

 					</tr>

 				<?php }


 			 ?>
 		</table>
 		<br><br><br>
 	</center>
 
 </body>
 </html>