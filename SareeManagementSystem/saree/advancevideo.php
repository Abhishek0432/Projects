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
 	<br><br>
 	<center>

 		<h1><u>Make Payment</u></h1>
 		<br><br>
 		<form method="post">
 	<table>
 		<?php 
 			$q1="SELECT * from public where email='$email' ";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{
 					$name=$row['fname'];
 					$contact=$row['contact'];

 				} 

 				$q2="SELECT * from addcourse where course_id='$cid'and course_type='advance' ";
 				($rs2=mysqli_query($conn,$q2));
 				
 					while($row1=mysqli_fetch_assoc($rs2))
 				{
 					$cname=$row1['course_name'];
 					$amount=$row1['course_fees'];
 				}
 				?>
 		<tr>
 			<th>Participant Name</th>
 			<td><?php echo $name; ?></td>
 		</tr>
 		<tr>
 			<th>Participant Contact</th>
 			<td><?php echo $contact; ?></td>
 		</tr>
 		<tr>
 			<th>Participant Email</th>
 			<td><?php echo $email; ?></td>
 		</tr>
 		<tr>
 			<th>Course  Name</th>
 			<td><?php echo  $cname;?></td>
 		</tr>
 		<tr>
 			<th>Course  Fees</th>
 			<td><?php echo  $amount;?></td>
 		</tr>
 		<tr>
 			<th>Card Number</th>
 			<td><input type="text" name="cnum"></td>
 		</tr>
 		<tr>
 			<th>CVV number</th>
 			<td><input type="password" name="cvv"></td>
 		</tr>
 		
 	</table>
 	<input type="submit" name="payment" value="Make Payment">
 	</form>
 	</center>
 	<br><br><br>
 	<?php  
 		if(isset($_POST['payment']))
 		{
 			$q3="INSERT into payment values('0','$email','$name','$contact','$cid','$cname','$amount') ";
 			$rs3=mysqli_query($conn,$q3);

 			if($rs3)
 			{
 				echo "<script type='text/javascript'>
 					alert('Data Added');
 					window.location=('publicviewcourse.php');
 					</script>";
 			}
 			else
 			{
 				echo "<script type='text/javascript'>
 					alert('Payment failed'); 					
 					</script>";
 					die(mysqli_error($conn));
 			}
 		}
	
 	

 	?>
 
 </body>
 </html>