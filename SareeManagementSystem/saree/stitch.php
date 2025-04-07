<?php 
	include "connect.php";
	include "adminnav.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <center>
 	<br><br><br>
 	<h1>ADD Course Details</h1>
 	<form method="post" action="" enctype="multipart/form-data">
 	<table>
 		<tr>
 			<th>Course Name</th>
 			<td><input type="text" name="cname"></td>
 		</tr>
 		<tr>
 			<th>Course Description</th>
 			<td><input type="text" name="cdescp"></td>
 		</tr>
 		
 		
 		<tr>
 			<th>Long Term Fees</th>
 			<td><input type="text" name="fees"></td>
 		</tr>
 		<tr>
 			<th>Upload Course Details</th>
 			<td><input type="file" name="fileToUpload"></td>
 		</tr>
 	</table>
 	<input style="width: 200px;height: 50px; border-radius: 30px; background-color: brown; color: white;" type="submit" name="add" value="Add course">
 	<br><br>
 	</form>
 </center>
 <?php 
 	
 	if(isset($_POST['add']))
	{
		$cname=$_POST['cname'];		
		$cdescp=$_POST['cdescp'];
    	$fees=$_POST['fees'];
		$dbfilename='';
  	

		

		include 'connect.php';
  		$target_dir = "upload/";
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
if($imageFileType != "pdf" ) {
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
$query="INSERT into addcourse values('0','$cname','$cdescp','$fees','$dbfilename')";
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