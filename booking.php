<?php       
session_start(); 

include'config.php';                       
  $sq="SELECT * FROM saloonservice where code=".$_GET['mcode'];
  $sref=mysqli_query($con,$sq);
  $srel=mysqli_fetch_array($sref);

  $q="SELECT * FROM salooonuser where code=".$_GET['dcode'];
  $ref=mysqli_query($con,$q);
  $rel=mysqli_fetch_array($ref);

  $serq="SELECT * FROM stylist where scode=".$_GET['dcode'];
  $seref=mysqli_query($con,$serq);

  $uq="SELECT * FROM user where code=".$_SESSION['ucode'];
  $uref=mysqli_query($con,$uq);
  $urel=mysqli_fetch_array($uref);

  if(isset($_POST['submit'])){
    $ucode=$urel['code']; 
    $salcode=$rel['code'];
    $sercode=$srel['code'];
    $date=mysqli_real_escape_string($con,$_POST['date']);
    $timee=mysqli_real_escape_string($con,$_POST['tim']);
  //   echo "<script type='text/javascript'>alert(\"$timee\");</script>";
  //   if($timee==""){
  //     $done = "Thanks for Booking ";
  //   echo "<script type='text/javascript'>alert(\"$date\");</script>";
  //  }
    $q="INSERT INTO bookinguser( ucode, salcode, sercode, date, time) VALUES ('$ucode','$salcode','$sercode','$date','$timee')";
    if(mysqli_query($con,$q)){
     $done = "Thanks for Booking ";
     echo "<script type='text/javascript'>alert(\"$done\");</script>";
     header('location:index.php');
 
   }
    else{
     echo mysql_error();
      }
      }
  
?>    

<!DOCTYPE html>
<html>
    <head>
   <title>BeautySpot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>


      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html" class="tx-color">Beauty Spot</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              <?php include'header.php'?>
            </div>

            
          </div>
        </div>

      </header>

      <div class="site-section bg-light" id="contact-section">
        <div class="container">
          
          <div class="row">
            <div class="col-lg-8 mb-5">
<form method='post'>
              <div class="cl-back p-3 p-md-5">
                <h3 class="text-black mb-4 cl-color">BOOKING FOR SALOON</h3>
                <ul class="list-unstyled footer-link">
                  <li class="d-block mb-3">
                    <span class="d-block cl-color">Service Name:</span>
                    <span></span><?php echo $srel['sername'];?></li>
                  <li class="d-block mb-3"><span class="d-block cl-color">Price:</span><span><?php echo $srel['serprice'];?></span></li>
                  <li class="d-block mb-3"><span class="d-block cl-color">Choose Stylist:</span>
                  <span>
                   <select class="browser-default custom-select custom-select-md mb-6">
                     <?php while($serel=mysqli_fetch_array($seref)){ ?>
                      <option value="<?php echo $serel['code'];?>"><?php echo $serel['stname'];?></option>
                     
                     <?php }?>
                    </select>
                  </span>
                </li>
                <li class="d-block mb-3"><span class="d-block cl-color">Date:</span>
                  <span>
                  <input id="datepicker" required value="" placeholder="Select Date" name="date" width="276" />
                    <script>
                    $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4',
                        
                  
                  
                    });
                </script>
                              </span>
                </li>
                <li class="d-block mb-12"><span class="d-block cl-color">Time:</span>
                  <span style='display:flex;'>
                  <div class="md-form md-outline">
                    <input name='tim' required type="time" id="default-picker" class="form-control" placeholder="Select time">
                    <label for="default-picker">Open Time 8:00 Am To 10:00 Pm </label>
                  </div>
                  </span>
                </li>
                </ul>
                <input class="btn btn-primary" type="submit" value='Confirm' name="submit" >
              </div>


</form>

            </div>
            <div class="col-lg-4 ml-auto">
              <div class="cl-back p-3 p-md-5">
                <h3 class="cl-color mb-4"><?php echo $rel['salname'];?></h3>
                <ul class="list-unstyled footer-link">
                  <li class="d-block mb-3">
                    <span class="d-block cl-color">Address:</span>
                    <span><?php echo $rel['location'];?></span></li>
                  <li class="d-block mb-3"><span class="d-block cl-color">Phone:</span><span><?php echo $rel['phone'];?></span></li>
                  <li class="d-block mb-3"><span class="d-block cl-color">Email:</span><span><?php echo $rel['email'];?></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
    </body>
</html>
