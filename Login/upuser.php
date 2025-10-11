<?php
session_start();
include'../config.php';


$aq= " SELECT * FROM user WHERE code =".$_SESSION['ucode'];
$aref = mysqli_query($con,$aq);
$arel=mysqli_fetch_array($aref);
;
if(isset($_POST['Update'])){
   $fname=mysqli_real_escape_string($con,$_POST['fname']); 
   $lname=mysqli_real_escape_string($con,$_POST['lname']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $pass=mysqli_real_escape_string($con,$_POST['pass']);
   $phn=mysqli_real_escape_string($con,$_POST['phone']);
   $adres=mysqli_real_escape_string($con,$_POST['address']);
   
 
   $stq="UPDATE user SET fname='$fname',lname='$lname',email='$email',pass='$pass',phone='$phn',address='$adres' WHERE code=".$_SESSION['ucode'];
   if(mysqli_query($con,$stq)){
    $done = "Your have Update dtata.. " ;
    echo "<script type='text/javascript'>alert(\"$done\");</script>";
    header("location: ../index.php");
	}
	else{
		echo mysql_error();
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

				<form class="login100-form validate-form"  method="post">
					<span class="login100-form-title">
						 Update a User Account
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid First Name">
						<input class="input100" type="text" name="fname" value="<?php echo $arel['fname'];?>" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid First Name">
                    <input class="input100" type="text" name="lname" value="<?php echo $arel['lname'];?>" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid">
						<input class="input100" type="text" name="email" value="<?php echo $arel['email'];?>" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="pass" value="<?php echo $arel['pass'];?>" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone number">
						<input class="input100" type="text" name="phone" value="<?php echo $arel['phone'];?>" placeholder=" Phone Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone number">
                        <textarea name="address" id="" class="input100" cols="30" rows="10" placeholder="Address"><?php echo $arel['address'];?></textarea>
						<span class="symbol-input100">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
					</div>
					
                    
					<div class="container-login100-form-btn">
						
                        <input class="login100-form-btn" type="submit"value='Update' name="Update">
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