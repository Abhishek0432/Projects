<?php 
	include "connect.php";
	include "banknav.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 50px">Bank Details</h1>
 		<br><br>
 		<table border="1px collapse">
 			<tr>
 				
 				<th> Name</th>
 				<th>Account Number</th>
 				<th>Transaction</th>
 				<th>Date</th>
 				<th>From</th>
 			</tr>
 			<?php 
 				$q1="SELECT * from addaccdet";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						
 						<td><?php echo $row['name']; ?></td>
 						<td><?php echo $row['accnum']; ?></td>
 						<td><?php echo $row['amount']; ?></td>
 						<td><?php echo $row['tdate']; ?></td>
 						<td><?php echo $row['fwhom'] ?></td>
                    </tr>
 				<?php }

 			 ?>

 		</table>
        <br><br>
 	</center>
 
 </body>
 </html>