<?php
session_start();
include'../config.php';


$aq= " SELECT * FROM salooonuser WHERE code =".$_SESSION['scode'];
$aref = mysqli_query($con,$aq);
$arel=mysqli_fetch_array($aref);
;
if(isset($_POST['Update'])){
	$sname=mysqli_real_escape_string($con,$_POST['sname']); 
	$loc=mysqli_real_escape_string($con,$_POST['location']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$pass=mysqli_real_escape_string($con,$_POST['pass']);
	$phn=mysqli_real_escape_string($con,$_POST['phone']);
	$city=mysqli_real_escape_string($con,$_POST['city']);
 
   $stq="UPDATE salooonuser SET salname='$sname',city='$city' ,location='$loc',email='$email',pass='$pass',phone='$phn' WHERE code=".$_SESSION['scode'];
   if(mysqli_query($con,$stq)){
    $done = "Your have Update dtata.. " ;
    echo "<script type='text/javascript'>alert(\"$done\");</script>";
    header("location: login.php");
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


                <form class="login100-form validate-form" enctype="multipart/form-data"  method="post">
					<span class="login100-form-title">
						 Update a Account
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid  Name">
						<input class="input100" type="text" name="sname" value="<?php echo $arel['salname'];?>" placeholder="Saloon Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid Loction">
                        <input class="input100" type="text" name="location" value="<?php echo $arel['location'];?>" placeholder="location">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone number">
						<input class="input100" type="text" name="city" value="<?php echo $arel['city'];?>" placeholder="City">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                        <i class="fa fa-building"></i>
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