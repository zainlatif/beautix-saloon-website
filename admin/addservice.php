<?php
session_start();
include'../config.php';

if(isset($_GET["dcode"]))
{
  $dcode=$_GET["dcode"];
 echo $dq="DELETE FROM saloonservice WHERE  code=$dcode";
    if(mysqli_query($con,$dq)){
      header("location:addservice.php");
      
    }
    else{
        echo mysql_error();
    }
}


if(isset($_POST['submit'])){
   $name=mysqli_real_escape_string($con,$_POST['sename']); 
   $price=mysqli_real_escape_string($con,$_POST['seprice']);
   $scode=$_SESSION['scode'];
   $img=$_FILES["images"];
   $file_name= $_FILES["images"]['name'];
   $file_type=$_FILES['images']['type'];
   $file_tem_loc=$_FILES['images']['tmp_name'];
   $file_store="../upload/".$file_name;
   move_uploaded_file($file_tem_loc,$file_store);

   $stq="INSERT INTO saloonservice( scode, sername, serprice,image) VALUES ('$scode','$name','$price','$file_name')";
   if(mysqli_query($con,$stq)){
    $done = "Service Will be Added.. " ;
    echo "<script type='text/javascript'>alert(\"$done\");</script>";

}
else{
    echo mysql_error();
}
     }




$q="SELECT * FROM saloonservice WHERE scode=".$_SESSION['scode'];
$ref=mysqli_query($con,$q);



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
<?php include'Leftpanel.php';?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include 'header-main.php';?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <?php
                if(isset($alert)){
                    echo "<div class='alert alert-success'>$alert</div>";
                    unset($alert);
                }
             ?>
           
            
        </div>



        
        <div class="content">
                 
                    
        <div class="row center">              
            <div class="col-lg-4">
                <div class="card">
                    
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center tx-color">Add Your Service</h3>
                                </div>
                                <hr>
                                <form action="" method="post" class="validate-form" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="cc-payment"  class="control-label tx-color mb-1">Service Name</label>
                                        <input id="cc-payment" required="required" data-validate = "Enter Some text" name="sename" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="">
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label tx-color mb-1">Service Price</label>
                                        <input id="cc-payment" required="required" data-validate = "Enter Some text" name="seprice" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label tx-color mb-1">Choose Image</label>
                                        <input type="file" name="images" class="form-control tx-color" id=""  required>
                                        <span class="help-block field-validation-valid tx-color" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    
                                    <div>
                                    <input type="submit" value="Submit" name="submit" class="btn btn-lg cl-color tx-color btn-block">
                                       
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div> <!-- .card -->

            </div>



            <div class="col-lg-8">
                <div class="card cl-color">
                    <div class="card-header">
                        <strong class="card-title tx-color" >Services Detail</strong>
                    </div>
                    <div class="card-body">
                        <table class="table tl-color navi">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Saloon Name</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                            <?php while($rel=mysqli_fetch_array($ref)){
                                 
                                // //saloon name get
                                $salq="SELECT * FROM salooonuser where code=".$_SESSION['scode'];
                                $salref=mysqli_query($con,$salq);
                                $salrel=mysqli_fetch_array($salref);
                                
                                
                                ?>  
                                <tr>
                                    <th scope="row"><?php echo $rel['code']; ?></th>
                                    <td> <img class="user-avatar rounded-circle" style="width:50px; height:50px" src="../upload/<?php echo $rel['image']; ?>" alt="no image" srcset=""> </td>
                                    <td><?php echo $salrel['salname']; ?></td>
                                    <td><?php echo $rel['sername']; ?></td>
                                    <td><?php echo $rel['serprice']; ?></td>
                                    <td><a href="updateser.php?ucode=<?php echo $rel['code'];?>"><i style="font-size:20px;" class="fa fa-edit"></i></a></td>
                                    <td><a href="addservice.php?dcode=<?php echo $rel['code'];?>">
                                    <i style="font-size:20px;" class="fa fa-trash"></i></a></td>
                                    
                                    
                                </tr>
                                <?php } ?>
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
