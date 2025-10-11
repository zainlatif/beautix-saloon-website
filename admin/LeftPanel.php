<?php 
// session_start();
?>

<aside id="left-panel" class="left-panel ">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../Login/upsaloon.php"><i class="menu-icon fa fa-scissors"></i><?php echo $_SESSION['salname'] ?></a>
                    </li>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children "><a class="dropdown-toggle" href="index.php">Booking</a></li>
                    <li class="menu-item-has-children "><a class="dropdown-toggle" href="addstylist.php">Add Stylist</a></li>
                    <li class="menu-item-has-children "><a class="dropdown-toggle" href="addservice.php">Service Table</a></li>
                    <li class="menu-item-has-children "><a class="dropdown-toggle" href="../logout.php">Logout</a></li>
                    

                    <!-- /.menu-title -->

                    

                    <!-- /.menu-title -->
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>