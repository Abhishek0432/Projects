<?php 
	include "connect.php";
	include "publicnav.php";
	$cid=$_GET['cid'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 		<style type="text/css">
 			th,td
 			{
 				padding: 25px;
 			}
 			th
 			{
 				text-align: center;
 			}
 		</style>

 </head>
 <body>
 	<center>
 	<table>
 		<tr>
 			<th>Video ID</th>
 			<th>Video Name</th>
 			<th>Videos </th>
 		</tr>
 		<?php 
 			$q2="SELECT * from payment where cust_email='$email' and c_id='$cid'";
 			if($rs2=mysqli_query($conn,$q2))
 			{
 				while($row2=mysqli_fetch_assoc($rs2))
 				{
 					$cid=$row2['course_id'];
 				}	


 		 ?>
 			<?php 
 				$q1="SELECT * from addvideo where c_id='$cid' and video_type='long'" ;
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 				<tr>
 					<td><?php echo $row['video_id']; ?></td>
 					<td><?php echo $row['video_name']; ?></td>
 					<td>
 					<video width="300" height="200" controls>
					<source src="<?php echo $row['c_video']; ?>" type="video/mp4">
					</video> </td>
 				</tr>

 			<?php }
 		}
 		else
 		{
 			echo "<script type='text/javascript'>
 			alert('Video doesnot exist');
 			window.location=('publicviewcourse.php');
 			</script>";
 		}

 		 ?>
 	</table>
 	</center>
 
 </body>
 </html>