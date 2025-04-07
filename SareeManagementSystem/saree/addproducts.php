<?php 

	include "adminnav.php";
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
		<h1> Add Products</h1>
		<br>
		<form method="post" action="" enctype="multipart/form-data" >
			<table>
				<tr>
					<th>Product Name</th>
					<td><input type="text" name="pname" required pattern="^[A-Za-z ]+$"></td>
				</tr>

				<tr>
					<th>Fabric</th>
					<td><input type="text" name="fabric" required    pattern="^[A-Za-z ]+$" ></td>
				</tr>

				<tr>
					<th>Product Type</th>
					<td><input type="text" name="ptype" required pattern="^[A-Za-z ]+$"></td>		
				</tr>

				<tr>
					<th>Rate</th>
					<td><input type="text" name="rate" required></td>
				</tr>
				
				<tr>
					<th>Quantity</th>
					<td><input type="number" name="qty" required></td>
				</tr>

				<tr>
					<th>Colour</th>
					<td><input type="text" name="color" required pattern="^[A-Za-z ]+$"></td>
				</tr>

				<tr>
					<th>Care</th>
					<td><input type="text" name="care" required></td>
				</tr>

				<tr>
					<th>Upload Image</th>
					<td><input type="file" name="fileToUpload" required></td>
				</tr>

				<tr>
					<th>Select User</th>
					<td>
					<select name="user">
									
						<option value="public">Public</option>
						<option value="dist">Distributors</option>	
						
						
					</select>
					</td>
				</tr>
				
			</table>
			<input style="width: 180px; height: 40px; border-radius: 30px;background-color: black; color: white;" type="submit" name="login">
			<br><br>
			
		</form>
	</center>
	<br><br><br>
	<?php 
 	
 	if(isset($_POST['login']))
	{
		$pname=$_POST['pname'];	
		$fabric=$_POST['fabric'];
		$ptype=$_POST['ptype'];
		$rate=$_POST['rate'];
		$qty=$_POST['qty'];
		$color=$_POST['color'];
		$care=$_POST['care'];	
		$user=$_POST['user'];		
  		$dbfilename='';
  	
		include 'connect.php';
	$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
var_dump($target_file);
echo "imageFileType ".$imageFileType;
 //Check if image file is a actual image or fake image
if(isset($_POST['login'])){

$check = filesize($_FILES["fileToUpload"]["tmp_name"]);
	   if($check !== false) {
	        //echo "File is not an image - " . $check["mime"] . ".";
	        //echo "<script type='text/javascript'>alert('File is not an image - " . $check["mime"] . "');
    //</script>";
	        $uploadOk = 1;
	    } else {
	        echo "File is an image.";
	        $uploadOk = 0;
	    }
	}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] >700000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        	  		$dbfilename=$target_dir .basename($_FILES["fileToUpload"]["name"]);

    } else {
        echo "Sorry, there was an error uploading your file.".mysqli_error($conn);
    }
}
$query="INSERT into products values('0','$pname','$fabric','$ptype','$rate','$qty','$color','$care','$dbfilename','$user')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "<script type='text/javascript'>
 					alert('Data Added'); 					
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
 
	