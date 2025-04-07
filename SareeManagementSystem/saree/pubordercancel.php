<?php 
	
	include "connect.php";
	$oid=$_GET['oid'];
	$upqty=$_GET['qty'];
	$sid=$_GET['sar_id'];
 ?>

 <?php 
 	$delete="DELETE from publiccart where order_id='$oid' ";
 	$res=mysqli_query($conn,$delete);

 	$q1="SELECT * from products where pid='$sid'";
 	$res1=mysqli_query($conn,$q1);
 	while($row1=mysqli_fetch_assoc($res1))
 	{
 		$qty=$row1['qty'];
 	}
 	$finqty=$qty+$upqty;
 	echo "$finqty";

 	$update="UPDATE products set qty='$finqty' where pid='$sid'";
 	$res2=mysqli_query($conn,$update);

 	if($res2)
 	{
 		echo "<script>
 		alert('Order Cancelled');
 		window.location=('publicvieworder.php');
 		</script>";
 	}
 	else
 	{
 		echo "<script>
 		alert('Order Cancelled failed');
 		window.location=('publicvieworder.php');
 		</script>";
 	}


  ?>