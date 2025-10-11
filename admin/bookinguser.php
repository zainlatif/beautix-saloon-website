<?php
include'../config.php';
session_start();
$q="SELECT * FROM bookinguser where ucode=".$_SESSION['ucode'];
$ref=mysqli_query($con,$q);
// if(isset($_POST['Enter'])){
//     $rat=mysqli_real_escape_string($con,$_POST['rating']);  
//     $uq="UPDATE bookinguser SET rating=$rat WHERE code=".$_GET['ucode'];
//     if(mysqli_query($con,$uq)){
//         $done = "Your have register.. " ;
//         echo "<script type='text/javascript'>alert(\"$done\");</script>";
        
    
//     }
//     else{
//         echo mysql_error();
//     }
// }

if(isset($_POST['Enter'])){
                                    
    $rat=mysqli_real_escape_string($con,$_POST['rating']);  
    $uq="UPDATE bookinguser SET rating=$rat WHERE code=".$_POST['Enter'];
    if(mysqli_query($con,$uq)){
        $done = "Thanks For Rating" ;
        echo "<script type='text/javascript'>alert(\"$done\");</script>";
        
    
    }
    else{
        echo mysql_error();
    }
}
?>





<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BeautySpot</title>
    <meta name="description" content="BeautySpot">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->




        
        <div class="container-fluid bg-lit h-100">
                 <div class="row mb-5">
                 </div>
                    
        <div class="row bg-lit">              
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header cl-color">
                        <strong class="card-title tx-color" >Booking List</strong>
                        
                    </div>
                    <div class="card-body cl-color">
                    <table class="table tl-color">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Saloon Name</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Submit</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                            <?php 
                            
                            
                            while($rel=mysqli_fetch_array($ref)){
                                // user name get
                                $uq="SELECT * FROM user where code=".$rel['ucode'];
                                $uref=mysqli_query($con,$uq);
                                $urel=mysqli_fetch_array($uref);
                                 
                                //saloon name get
                                $salq="SELECT * FROM salooonuser where code=".$rel['salcode'];
                                $salref=mysqli_query($con,$salq);
                                $salrel=mysqli_fetch_array($salref);
                                
                                //service name get
                                $ssq="SELECT * FROM saloonservice where code=".$rel['sercode'];
                                $ssref=mysqli_query($con,$ssq);
                                $ssrel=mysqli_fetch_array($ssref);
                                
                                

                                ?>  
                                <tr>
                                <form method="post">
                                    <th scope="row"><?php echo $rel['code']; ?></th>
                                    <td><?php echo $urel['fname']; ?></td>
                                    <td ><?php echo $salrel['salname']; ?></td>
                                    <td><?php echo $ssrel['sername']; ?></td>
                                    <td><?php echo $rel['date']; ?></td>
                                    <td><?php echo $rel['time']; ?></td>
                                    <td><select name="rating" class="browser-default custom-select custom-select-md mb-6 bg-black">
                                        <option <?php if($rel['rating'] == 1){echo "selected"; }?> value="1" >1</option>
                                        <option <?php if($rel['rating'] == 2){echo "selected"; }?> value="2" >2</option>
                                        <option <?php if($rel['rating'] == 3){echo "selected"; }?> value="3" >3</option>
                                        <option <?php if($rel['rating'] == 4){echo "selected"; }?> value="4" >4</option>
                                        <option <?php if($rel['rating'] == 5){echo "selected"; }?> value="5" >5</option>
                                    </select> 
                                    </td>
                                    <td>
                                    <button type="submit" name="Enter" value="<?php echo $rel['code']; ?>" class="btn tx-color cl-color">Update</button>
                                    <!-- <input  type="submit" name="Enter" value="ENTER" class="btn btn-danger">  -->
                                    </td>
                                    </form>
                                </tr>
                                <?php 
                                
                                
                            }
                            
                               
                                
                                ?>
                            </tbody>
                          
                        </table>
                    </div>
                </div>
            </div>
        </div>

                <!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

        <?php include"footer.php"?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
</html>
