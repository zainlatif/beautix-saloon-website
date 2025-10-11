<?php
include'../config.php';
if(isset($_GET['ucode'])){
    

    $rat=mysqli_real_escape_string($con,$_POST['rating']);  
    $uq="UPDATE bookinguser SET rating=$rat WHERE code=".$_g['code'];
    if(mysqli_query($con,$uq)){
        $done = "Your have register.. " ;
        echo "<script type='text/javascript'>alert(\"$done\");</script>";
        
    
    }
    else{
        echo mysql_error();
    }
}

?>