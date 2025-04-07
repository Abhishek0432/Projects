<?php 
	session_start();
	include "mainnav.php";

 ?>

	<center>
		<h1>Login</h1>
		<form method="post" action="">
			<table>
				<tr>
					<th>Email</th>
					<td><input type="email" name="uname" required></td>
				</tr>
				<tr>
					<th>Password</th>
					<td><input type="password" name="pass" required></td>
				</tr>
				<tr>
					<th>Select User</th>
					<td>
					<select name="user">
						<option>---Select---</option>
						<option value="admin">Admin</option>
						<option value="public">Public</option>
						<option value="dist">Distributors</option>
						<option value="mgmt">Management</option>	
						<option value="bank">Bank</option>
					</select>
					</td>
				</tr>
			</table>
			<input style="width: 180px; height: 40px; border-radius: 30px;background-color: black; color: white;" type="submit" name="login">
			<br><br>
			<a href="reg.php"><h4>Click Here for Registration</h4> </a>
			<br><br>
			<a href="forgotpass.php"><h4>Forgot Password</h4> </a>
		</form>
	</center>
	<br><br><br>
	
	<?php 
	include "connect.php";
	if(isset($_POST['login']))
	{
		$username=$_POST['uname'];
		$pass=$_POST['pass'];
		$user=$_POST['user'];

		if($user=='admin')
		{
			$query="SELECT * from admin where username='$username' and password='$pass' ";
			$result=mysqli_query($conn,$query);
			$data=mysqli_fetch_array($result);

			if($data)
			{
				echo "<script type='text/javascript'>
				alert('Login Success');
				window.location=('adminindex.php');
				</script>";
			}
			else
			{
				echo "<script type='text/javascript'>
				alert('Login Failed');
				window.location=('login.php');
				</script>";
			}
		}

		else if($user=='public')
			{
			$query="SELECT * from public where email='$username' and pass='$pass' ";
			$result=mysqli_query($conn,$query);
			$data=mysqli_fetch_array($result);

			if($data)
			{	
				$_SESSION['email']=$username;
				echo "<script type='text/javascript'>
				alert('Login Success');
				window.location=('publicindex.php');
				</script>";
			}
			else
			{
				echo "<script type='text/javascript'>
				alert('Login Failed');
				window.location=('login.php');
				</script>";
			}
		}

		else if($user=='dist')
			{
			$query="SELECT * from dist where email='$username' and pass='$pass' ";
			$result=mysqli_query($conn,$query);
			$data=mysqli_fetch_array($result);

			if($data)
			{	
				$_SESSION['email']=$username;
				echo "<script type='text/javascript'>
				alert('Login Success');
				window.location=('distindex.php');
				</script>";
			}
			else
			{
				echo "<script type='text/javascript'>
				alert('Login Failed');
				window.location=('login.php');
				</script>";
			}
		}

		

		else if($user=='bank')
			{
			$query="SELECT * from bank where username='$username' and password='$pass' ";
			$result=mysqli_query($conn,$query);
			$data=mysqli_fetch_array($result);

			if($data)
			{
				echo "<script type='text/javascript'>
				alert('Login Success');
				window.location=('bankindex.php');
				</script>";
			}
			else
			{
				echo "<script type='text/javascript'>
				alert('Login Failed');
				window.location=('login.php');
				</script>";
			}
		}
		else if($user=='mgmt')
			{
			$query="SELECT * from mgmt where email='$username' and pass='$pass' ";
			$result=mysqli_query($conn,$query);
			$data=mysqli_fetch_array($result);

			if($data)
			{
				$_SESSION['email']=$username;
				echo "<script type='text/javascript'>
				alert('Login Success');
				window.location=('mgmtindex.php');
				</script>";
			}
			else
			{
				echo "<script type='text/javascript'>
				alert('Login Failed');
				window.location=('login.php');
				</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>
				alert('Select Correct User');
				window.location=('login.php');
				</script>";
		}

		
	}




	 ?>