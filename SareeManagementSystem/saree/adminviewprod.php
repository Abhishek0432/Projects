<?php 
	include "connect.php";
	include "adminnav.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
    <style type="text/css">
        .image {
    width: 100%;
    height: 100%;    
}

.image img {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
    -moz-transition: all 1s ease; /* Firefox */
    -ms-transition: all 1s ease; /* IE 9 */
    -o-transition: all 1s ease; /* Opera */
    transition: all 1s ease;
}

.image:hover img {
    -webkit-transform:scale(3.25); /* Safari and Chrome */
    -moz-transform:scale(3.25); /* Firefox */
    -ms-transform:scale(3.25); /* IE 9 */
    -o-transform:scale(3.25); /* Opera */
     transform:scale(3.25);
}
    </style>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 50px">Product Details</h1>
 		<br><br>
 		<table border="1px collapse">
 			<tr>
                <th>Product ID</th>
 				<th>Product Name</th>
 				<th>Fabric</th>
                <th>Product Type</th>
 				<th>Rate</th>
 				<th>Quantity</th>
 				<th>Colour</th>
                <th>Care</th>
                <th>User</th>
                <th>Image</th>
 				
 			</tr>
 			<?php 
 				$q1="SELECT * from products";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<tr>
 						<td><?php echo $row['pid']; ?></td>
 						<td><?php echo $row['pname']; ?></td>
                        <td><?php echo $row['fabric']; ?></td>
                        <td><?php echo $row['ptype']; ?></td>
                        <td><?php echo $row['rate']; ?></td>
                        <td><?php echo $row['qty']; ?></td>
                        <td><?php echo $row['color']; ?></td>
                        <td><?php echo $row['care']; ?></td>
                        <td><?php echo $row['user']; ?></td>
 						
                        <td><div class="image"><img src="<?php echo $row['image']; ?>" height="100px" width="100px"></div></td>

 					</tr>

 				<?php }


 			 ?>
 		</table>
        <br><br><br>
 	</center>
 
 </body>
 </html>