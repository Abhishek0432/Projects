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
 		<h1 style="margin-top: 120px;">Course Videos</h1>
 		<table>

 		
 	
 	<?php 
 		$q1="SELECT * from addvideo";
 		$rs1=mysqli_query($conn,$q1);
 		while($row=mysqli_fetch_assoc($rs1))
 		{ ?><tr><td>
 			<video width="300" height="200" controls>
	<source src="<?php echo $row['c_video']; ?>" type="video/mp4">
	</video> </td>
	<td style="font-size: 20px;">Video Name: <?php echo $row['video_name']; ?>
		<br><br> Video Description: <?php echo $row['video_desc']; ?>
	</td>
	</tr>

 		<?php }

 	 ?>
 	</table>
 	</center>
 
 </body>
 </html>