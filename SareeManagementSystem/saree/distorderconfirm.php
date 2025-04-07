<?php 
	include "connect.php";
	include "distnav.php";
	$oid=$_GET['oid'];

	$view="SELECT * from dist where email='$email'";
	$res1=mysqli_query($conn,$view);
	while($row2=mysqli_fetch_assoc($res1))
	{
		$fname=$row2['fname'];
		$contact=$row2['contact'];
		$addr=$row2['addr'];
		
	}

	$viewprod="SELECT * from publiccart where order_id='$oid' ";
	$res2=mysqli_query($conn,$viewprod);
	while($row1=mysqli_fetch_assoc($res2))
	{
		$saree_id=$row1['saree_id'];
		$email=$row1['email'];
		$pname=$row1['pname'];
		$fabric=$row1['fabric'];
		$ptype=$row1['ptype'];
		$rate=$row1['rate'];
		$qty=$row1['qty'];
		$color=$row1['color'];
		$care=$row1['care'];
		$image=$row1['image'];
		$user=$row1['user'];
		$user_addr=$row1['user_addr'];
		$user_contact=$row1['user_contact'];
		$finamt=$row1['finamt'];	
		
	}

	$q1="INSERT into confirmorder values('0','$oid','$saree_id','$email','$pname','$fabric','$ptype','$rate','$qty','$color','$care','$image','$user','$user_addr','$user_contact','$finamt') ";
	$res3=mysqli_query($conn,$q1);

	$q1="DELETE from publiccart where order_id='$oid'";
	$res3=mysqli_query($conn,$q1);
	if($res3)
	{
		echo "<script>
		alert('Order Confirmed');
		window.location=('distviewconfirm.php');
		</script>";
	}
	else
	{
		echo "<script>
		alert('Order not Confirmed');		
		</script>";
	}
 ?>

 