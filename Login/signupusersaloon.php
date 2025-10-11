<?php
include'../config.php';
if(isset($_POST['Submit'])){
   $sname=mysqli_real_escape_string($con,$_POST['sname']); 
   $loc=mysqli_real_escape_string($con,$_POST['location']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $pass=mysqli_real_escape_string($con,$_POST['pass']);
   $phn=mysqli_real_escape_string($con,$_POST['phone']);
   $city=mysqli_real_escape_string($con,$_POST['city']);
   $img=$_FILES["images"];
   $file_name= $_FILES["images"]['name'];
   $file_type=$_FILES['images']['type'];
   $file_tem_loc=$_FILES['images']['tmp_name'];
   $file_store="../upload/".$file_name;
   move_uploaded_file($file_tem_loc,$file_store);

   $mq = "SELECT * FROM salooonuser WHERE email='$email' or phone='$phn' ";
   $ret = mysqli_query($con,$mq);
   $row = mysqli_fetch_array($ret); 
   
   $umq = "SELECT * FROM user WHERE email='$email' or phone='$phn' ";
   $uret = mysqli_query($con,$umq);
   $urow = mysqli_fetch_array($uret); 

   if(!(isset($row['email']) || isset($row['phone']) || isset($urow['email']) || isset($urow['phone'])) ){
   $q="INSERT INTO salooonuser(salname, city, location,email, pass, phone,image) VALUES ('$sname','$city','$loc','$email','$pass','$phn','$file_name')";
   if(mysqli_query($con,$q)){
    $done = "Your have register.. ";
    echo "<script type='text/javascript'>alert(\"$done\");</script>";
	}
	else{
	echo mysql_error();
	}
	}
	else{
		$done = "Enter the valid Phone no or Email";
    echo "<script type='text/javascript'>alert(\"$done\");</script>";
	}

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/saloon.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" enctype="multipart/form-data"  method="post">
					<span class="login100-form-title">
						 Create a Account
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid  Name">
						<input class="input100" type="text" name="sname" placeholder="Saloon Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid Loction">
                    <input class="input100" type="text" name="location" placeholder="location">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone number">
						<input class="input100" type="text" name="city" placeholder="City">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                        <i class="fa fa-building"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone number">
						<input class="input100" type="Number" name="phone" placeholder=" Phone Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>
                	
					<div class="wrap-input100 validate-input" data-validate = "Valid Image">
						<input type="file" name="images"class="input100" id=""  required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-pic" aria-hidden="true"></i>
						</span>
                    </div>
                    
					<div class="container-login100-form-btn">
						
                        <input class="login100-form-btn" type="submit"value='Submit' name="Submit">
					</div>

					<div class="text-center p-t-12">
                    <a class="txt2" href="login.php">
							Already account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>