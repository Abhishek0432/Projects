<?php 
	include "connect.php";
	include "musnav.php";
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<center>
 		<h1 style="margin-top: 50px;">Upload Video</h1>
 		<br><br>
 		<form method="post" action="" enctype="multipart/form-data">
 			<table>
 				<tr>
 					<th>Video Name</th>
 					<td><input type="text" name="v_name"></td>
 				</tr>
 				<tr>
 					<th>Video Descpription</th>
 					<td><textarea name="descp"></textarea></td>
 				</tr>
 				
 				
 				<tr>
		 			<th>Upload Video </th>
		 			<td><input type="file" name="fileToUpload"></td>
 				</tr>
 			</table>
 			<input style="width: 200px;height: 50px; border-radius: 30px; background-color: brown; color: white;" type="submit" name="add" value="Add course">

 		</form>
 	</center>
 	<?php 
 	
 	if(isset($_POST['add']))
	{
		$v_name=$_POST['v_name'];		
		$descp=$_POST['descp'];
    	
		$dbfilename='';
  	
		

		include 'connect.php';
  		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	var_dump($target_file);
	echo "imageFileType ".$imageFileType;
 //Check if image file is a actual image or fake image
	if(isset($_POST['add'])){

	$check = filesize($_FILES["fileToUpload"]["tmp_name"]);
     if($check !== false) {
         
          $uploadOk = 1;
      } else {
          echo "File is an pdf.";
          $uploadOk = 0;
      }
  }
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "avi"  ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $dbfilename=$target_dir .basename($_FILES["fileToUpload"]["name"]);

    } else {
        echo "Sorry, there was an error uploading your file.".mysqli_error($conn);
    }
}
$query="INSERT into addvideo values('0','$v_name','$cid','$ctype','$descp','$dbfilename')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "<script type='text/javascript'>
 					alert('Data Added');
 					window.location=('view.php');
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