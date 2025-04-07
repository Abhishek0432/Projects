<?php 
	include "connect.php";
	include "mainnav.php";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<style type="text/css">
 		tr,td
 		{
 			padding: 20px;
 		}
 	</style>
 </head>
 <body>
 	<center>
 		<br><br>
 		<h1>Enter registered Email ID</h1>
 		<form method="post">
 			<table>
 				<tr>
 					<th> Enter Email ID</th>
 					<td><input type="email" name="email"></td>
 				</tr>
                <tr>
                    <th>Select User</th>
                    <td>
                    <select name="user">
                        <option>---Select---</option>
                        
                        <option value="public">Public</option>
                        <option value="dist">Distributors</option>
                        <option value="mgmt">Management</option>    
                        <option value="bank">Bank</option>
                    </select>
                    </td>
                </tr>
               
 			</table>
 			<input type="submit" name="submit" value="Submit">
 		</form>
 	</center>
 </body>
 </html>
 <?php 

    include "connect.php";
    if(isset($_POST['submit']) & !empty($_POST['submit']))
    {
        $username=$_POST['email'];
        //$pass=$_POST['pass'];
        $user=$_POST['user'];

        if($user=='public')
        {
            $query="SELECT pass from public where email='$username'  ";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)) {
                $pass=$row['pass'];

                $to = "$username";
                $subject = "$pass";
                $matter = "$pass";
                $headers = "From:futuretechkirti@gmail.com\r\n";

                if (mail($to, $subject, $matter, $headers)) {
                echo "Email successfully sent to $to...";
                } else {
                            echo "Email sending failed...";
            }

                
            }

            
        }

        

        else if($user=='dist')
            {
            $query="SELECT pass from dist where email='$username'  ";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)) {
                $pass=$row['pass'];

                $to = "$username";
                $subject = "$pass";
                $matter = "$pass";
                $headers = "From:futuretechkirti@gmail.com\r\n";

                if (mail($to, $subject, $matter, $headers)) {
                echo "Email successfully sent to $to...";
                } else {
                            echo "Email sending failed...";
            }

                
            }
        }

        

        
        else if($user=='mgmt')
            {
            $query="SELECT pass from mgmt where email='$username'  ";
            $result=mysqli_query($conn,$query);
           while($row=mysqli_fetch_assoc($result)) {
                $pass=$row['pass'];

                $to = "$username";
                $subject = "$pass";
                $matter = "$pass";
                $headers = "From:futuretechkirti@gmail.com\r\n";

                if (mail($to, $subject, $matter, $headers)) {
                echo "Email successfully sent to $to...";
                } else {
                            echo "Email sending failed...";
            }

                
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