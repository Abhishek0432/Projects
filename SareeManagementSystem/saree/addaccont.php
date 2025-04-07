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
 	<br><br><br>
 	<h1>ADD Account Details</h1>
 	<form method="post" action="" enctype="multipart/form-data">
 	<table>
 		<tr>
 			<th> Name</th>
 			<td><input type="text" name="cname"></td>
 		</tr>

 		<tr>
 			<th>Account Number</th>
 			<td><input type="text" name="accnum" pattern="[0-9]{11}" title="11 digits "></td>
 		</tr>

 			
 			
 		
 		
 	</table>
 	<input style="width: 200px;height: 50px; border-radius: 30px; background-color: brown; color: white;" type="submit" name="add" value="Add Account">
 	<br><br>
 	</form>
 </center>
 <?php 
 	
 	if(isset($_POST['add']))
	{
		$name=$_POST['name'];		
		$accnum=$_POST['accnum'];
		

		

		
$query="INSERT into addaccdet(name,accnum) values('$name','$accnum')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "<script type='text/javascript'>
 					alert('Data Added');
 					window.location=('bankviewacc.php');
 					</script>";
		}
		else
		{
			echo "<script type='text/javascript'>
 					alert('data not added');
 					
 					</script>";
 					die(mysqli_error($conn));
		}

	}






  ?>
 </body>
 </html>