<?php 
	include "adminnav.php";
 ?>

 <head>
 	
 	<style type="text/css">
	th,td
	{
		padding:20px;
	}
	select
	{
		width: 200px;
		height: 40px;
		border-radius: 10px;
	}
</style>
 </head>

	<center>
		<br>
		<h1> Add Management Details</h1>
		<br>
		<form method="post" action="">
			<table>
				<tr>
					<th>First Name</th>
					<td><input type="text" name="fname" required pattern="^[A-Za-z ]+$" title="Only Characters"></td>
				</tr>

				<tr>
					<th>Last Name</th>
					<td><input type="text" name="lname" required pattern="^[A-Za-z ]+$" title="Only Characters"></td>
				</tr>

				<tr>
					<th>Gender</th>
					<td>
						<select name="gender">
							
							<option value="male">Male</option>
							<option value="female">Female</option>
							
						</select>
					</td>
				</tr>
				
				<tr>
					<th>Address</th>
					<td><input type="text" name="addr" required></td>
				</tr>
				
				<tr>
					<th>Contact</th>
					<td><input type="text" name="contact" required pattern="[6-9]{1}[0-9]{9}"></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="email" name="email" required></td>
				</tr>
				
				<tr>
					<th>Password</th>
					<td><input type="password" name="pass" required pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" title="Enter password consisting of 1 character, 1 digit and 1 special symbol with min length 8"></td>
				</tr>
			</table>
			<input style="width: 180px; height: 40px; border-radius: 30px;background-color: black; color: white;" type="submit" name="reg">
			<br><br>
			
		</form>
	</center>
	<br><br><br>
	<?php 
 	
 	if(isset($_POST['reg']))
	{
		$fname=$_POST['fname'];	
		$lname=$_POST['lname'];		
		$addr=$_POST['addr'];
		$gender=$_POST['gender'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];		
		$pass=$_POST['pass'];		
  	
		$insert="INSERT into mgmt values('$fname','$lname','$gender','$addr','$contact','$email','$pass') ";
		$res=mysqli_query($conn,$insert);

		if($res)
		{
			echo "<script>
			alert('Data Added Successfully');

			</script>";
		}
		else
		{
			echo "<script>
			alert('Something went wrong');

			</script>";
		}

	}






  ?>
 
	