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
 	<form method="post">
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
 			<th>Syllabus</th>
 			<td><input type="text" name="cname"><br><br>
 				<input type="text" name="cname"><br><br>
 				<input type="text" name="cname"><br><br></td>
 			<br>
 			
 		</tr>
 		<tr>
 			<th>Materials Required </th>
 			<td><input type="text" name="material"></td>
 		</tr>
 		<tr>
 			<th>Projects </th>
 			<td><input type="text" name="project"></td>
 		</tr>
 	</table>
 	<input style="width: 200px;height: 50px; border-radius: 30px; background-color: brown; color: white;" type="submit" name="add" value="Add course">
 	<br><br>
 	</form>
 </center>
 </body>
 </html>