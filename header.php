<nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li class="active tx-color"><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="about.php" class="nav-link tx-color">About</a></li>  
                  <li><a href="contact.php" class="nav-link tx-color">Contact</a></li>
                <?php 
                          
                            if(isset( $_SESSION['uname'])){
                                $username = $_SESSION['uname'];
                                $ucode = $_SESSION['ucode'];
                                    echo "
                                    <li><a href='Login/upuser.php' class='nav-link tx-color'>$username</a></li>
                                    <li><a href='admin/bookinguser.php' class='nav-link tx-color'>My Booking</a></li>
                                    <li><a href='logout.php' class='nav-link tx-color'>Logout</a></li>";
                            }else{
                                
                         ?> 
                  <li><a href="Login/login.php" class="nav-link tx-color">Login</a></li>
                  
                  <?php } ?>
                </ul>
              </nav>