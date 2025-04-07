<?php 

	include "mainnav.php";
	include "connect.php";

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
		<h1> Registration</h1>
		<br>
		<form method="post" action="">
			<table>
				<tr>
					<th>First Name</th>
					<td><input type="text" name="fname" required></td>
				</tr>

				<tr>
					<th>Last Name</th>
					<td><input type="text" name="lname" required></td>
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
					<td><input type="text" name="addrtext" required></td>
				</tr>
				
				<tr>
					<th>Contact</th>
					<td><input type="text" name="contact" required></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<th>Select User</th>
					<td>
					<select name="user">
						<option>---Select---</option>				
						<option value="public">Public</option>
						<option value="dist">Distributors</option>	
						
						
					</select>
					</td>
				</tr>
				<tr>
					<th>Password</th>
					<td><input type="password" name="pass" required></td>
				</tr>
			</table>
			<input style="width: 180px; height: 40px; border-radius: 30px;background-color: black; color: white;" type="submit" name="login">
			<br><br>
			<a href="login.php"> <h4>Click Here for Login</h4></a>
		</form>
	</center>
	<br><br><br>
	<?php 
 	
 	if(isset($_POST['login']))
	{
		$fname=$_POST['fname'];	
		$lname=$_POST['lname'];
		$gender=$_POST['gender'];
		$addrtext=$_POST['addrtext'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$user=$_POST['user'];
		$pass=$_POST['pass'];		
  	
		if($user=='public')
		{
		
		$query="INSERT into public values('$fname','$lname','$gender','$addrtext','$contact','$email','$pass')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "<script type='text/javascript'>
 					alert('Data Added');
 					window.location=('login.php');
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

		if($user=='dist')
		{
		
		$query="INSERT into dist values('$fname','$lname','$gender','$addrtext','$contact','$email','$pass')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "<script type='text/javascript'>
 					alert('Data Added');
 					window.location=('login.php');
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

		

	}






  ?>
 
	