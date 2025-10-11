<?php
	session_start();
	include'../config.php';
   
   
   if(isset($_POST['Login'])) {
      // username and password sent from form 
	  $admin_name="ad@ad.com";
	  $admin_pass="123";
	  
	  
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
	  
	  if($email == $admin_name && $mypassword == $admin_pass ){
		header("location: ../admin/admin.php");
	  }

	  else{
		  $ar = "Please check your Email or Password";
		echo "<script type='text/javascript'>alert(\" $ar\");</script>";  
	  }



      $uq = "SELECT * FROM user WHERE email = '$email' and pass = '$mypassword'";
      $uresult = mysqli_query($con,$uq);
	  $urow = mysqli_fetch_array($uresult);
	  if(isset($urow['fname'])){
      if(isset($urow['email'])){
		$_SESSION['ucode'] = $urow['code'];
		 $_SESSION['uname'] = $urow['fname'];
		 $ar = $_SESSION['uname'];
         
		 echo "<script type='text/javascript'>alert(\" $ar\");</script>";
		 header("location: ../index.php");
      }else {
         $error = "Your Login Name or Password is invalid";

         echo "<script type='text/javascript'>alert(\"$error\");</script>";
	  }}

	  $sta="Activited";
	  $q = "SELECT * FROM salooonuser WHERE email = '$email' and pass = '$mypassword' and status = '$sta'";
      $result = mysqli_query($con,$q);
	  $row = mysqli_fetch_array($result);
	  if(isset($row['email'])){
      if(isset($row['email'])){
     	
		 $_SESSION['salname'] = $row['salname'];
		 $_SESSION['scode'] = $row['code'];
         
		 header("location: ../admin/index.php");
		
      }else {
         $error = "Your Login Name or Password is invalid";

         echo "<script type='text/javascript'>alert(\"$error\");</script>";
      }}
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

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						 Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
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
					
					<div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" value='Login' name="Login">
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
						Create For
						</span>
						<a class="txt2" href="signupusersaloon.php">
							Saloon Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
						Create For
						</span>
						<a class="txt2" href="signupuser.php">
							 User Account
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