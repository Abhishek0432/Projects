<?php 
	include "connect.php";
	include "publicnav.php";
	$id=$_GET['id'];

	$view="SELECT * from public where email='$email'";
	$res1=mysqli_query($conn,$view);
	while($row2=mysqli_fetch_assoc($res1))
	{
		$fname=$row2['fname'];
		$contact=$row2['contact'];
		$addr=$row2['addr'];
		
	}

	$viewprod="SELECT * from products where pid='$id' ";
	$res2=mysqli_query($conn,$viewprod);
	while($row1=mysqli_fetch_assoc($res2))
	{
		$pname=$row1['pname'];
		$fabric=$row1['fabric'];
		$ptype=$row1['ptype'];
		$rate=$row1['rate'];
		$color=$row1['color'];
		$care=$row1['care'];
		$user=$row1['user'];
		$image=$row1['image'];
		$qty=$row1['qty'];
	}

	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 50px">Product Details</h1>

 		<br><br>
 		<form method="post">
 		<table>
 			<?php 
 				$q1="SELECT * from products where pid='$id'";
 				$rs1=mysqli_query($conn,$q1);
 				while($row=mysqli_fetch_assoc($rs1))
 				{ ?>
 					<div class="image"><img  src="<?php echo $row['image']; ?>" height="150px" width="150px"></div>
 					
 			<tr>
                <th>Product ID</th>
                <td><input type="text" name="pid" value="<?php echo $row['pid']; ?>" readonly></td>
            </tr>
            <tr>
            	<th>Product Name</th>
            	<td><input type="text" name="pname" value="<?php echo $row['pname']; ?>" readonly></td>
            </tr>
            <tr>
            	<th>Fabric</th>
            	<td><input type="text" name="fabric" value="<?php echo $row['fabric']; ?>" readonly></td>
            </tr>
            <tr>
            	 <th>Product Type</th>
            	 <td><input type="text" name="ptype" value="<?php echo $row['ptype']; ?>" readonly></td>
            </tr>
            <tr>
            	<th>Rate</th>
            	 <td><input type="text" name="rate" value="<?php echo $row['rate']; ?>"></td>
            </tr>
            <tr>
            	<th>Select Quantity</th>
            	<td><input type="number" name="selqty"></td>
            </tr>
            <tr>
            	<th>Colour</th>
            	<td><input type="text" name="color" value="<?php echo $row['color']; ?>" readonly></td>
            </tr>
            <tr>
            	 <th>Care</th>
            	 <td><input type="text" name="care" value="<?php echo $row['care']; ?>" readonly></td>
            </tr>
           
 	   
                        
                       

 				<?php }


 			 ?>
 		</table>
        <br>
        <input type="submit" name="cart" value="ADD to Cart">
        </form>
 	</center>
 	<br><br>
 	<?php 
 		if(isset($_POST['cart']))
 		{
 			$selqty=$_POST['selqty'];

 			$finamt=$selqty*$rate;

 			$addcart="INSERT into publiccart values('0','$id','$email','$pname','$fabric','$ptype','$rate','$selqty','$color','$care','$image','$user','$addr','$contact','$finamt') ";
 			$res3=mysqli_query($conn,$addcart);
 			if($res3)
 			{
 				echo "<script>
 				alert('Data Added to Cart');
 				window.location=('publicviewprod.php');
 				</script>";
 			}
 			else
 			{
 				die(mysqli_error($conn));
 				echo "<script>
 				alert('Data Not Added to Cart'); 				
 				</script>";
 			}
 			$finqty=$qty-$selqty;
 		$update="UPDATE products set qty='$finqty' where pid='$id'";
 		$res4=mysqli_query($conn,$update);
 		}

 		




 	 ?>
 </body>
 </html>