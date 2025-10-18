<?php
   session_start();
   include'config.php'; 

?>

<?php
$q="SELECT * FROM salooonuser";
$ref=mysqli_query($con,$q);
?>

<!doctype html>
<html lang="en">

  <head>
    <title>Beautix </title>
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

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php">Beautix</a> 
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"> </span></a></span>

              

              <?php
              include 'header.php'
              ?>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.4" style="background-image: url('images/e2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">More Than Just A Haircut</h1>
              <p>Cosmetics are substances or products used to enhance or alter the appearance of the face or fragrance and texture of the body. </p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-years">
              <img src="images/s3.jpg" alt="Image" class="img-fluid">
              <div class="year">
                <span>3 <span>years in <br>excellent service</span></span>
              </div>
            </div>

          </div>
          <div class="col-lg-5 ml-auto pl-lg-5 text-center">
            <h6 class="scissors text-center">Welcome to Beautix</h6>
            <p class="mb-5 lead"> Many cosmetics are designed for use of applying to the face, hair, and body.</p>
            <p><a href="#" class="btn btn-primary">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Differnt Saloon -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors  text-center">Our Shops</h3>

            <p class="text-center">
              <a href="#" class="btn btn-primary custom-prev">Prev</a>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel d-flex">
            <?php while($rel=mysqli_fetch_array($ref)){?>
              <div class="item-1 h">
                <img src="upload/<?php echo $rel['image'];?>"  style="height:250px;" alt="upload/dummy.jpg" class="img-fluid">
                <div class="item-1-contents">
                  <h3><?php echo $rel['salname'];?></h3>
                  <h4 style="color:black;"> Location :  </h4>
                  <span > <?php echo $rel['location'];?></span>
                  <h4 style="color:black;"> Rating :  </h4>
                  <?php
                  $rq="SELECT AVG(rating) as bookrating FROM bookinguser WHERE salcode=".$rel['code'];
                  $rref=mysqli_query($con,$rq);
                  $rrel=mysqli_fetch_array($rref);
                  ?>

                  <span > <?php if(ceil($rrel['bookrating']) == 0){echo "No Rating";}else{echo ceil($rrel['bookrating']);}?></span>
                  <span style="display:block;margin-top:10%;alignitem:center;"><a href="
                  <?php  if(isset($_SESSION['ucode'])){?>
                  services.php?dcode=<?php echo $rel['code'];
                  }else{?>
                     Login/login.php
                  <?php }
                  ?>" class="btn btn-primary">More Detial</a></span>
                </div>
                
              </div>
            <?php }?>
             

              

            </div>
            
          </div>  
        </div>
      </div>
    </div>



    


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">More Hair Styles</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
          </div>
        </div>
        <div class="row hair-style">
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/f2.jpg" alt="Image placeholder">
              <h2>Beard Shaving</h2>
              <span>$50.00 only</span>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/f1.jpg" alt="Image placeholder">
              <h2>Crew Cut</h2>
              <span>$50.00 only</span>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/f2.jpg" alt="Image placeholder">
              <h2>Beard Trim</h2>
              <span>$50.00 only</span>
            </a>
          </div>
          
        </div>
      </div>
    </div>
    <!-- END section -->

    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/f2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">More Services</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-bald"></span>
              </span>
              <div class="service-1-contents">
                <h3>Hair Cut</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-beard"></span>
              </span>
              <div class="service-1-contents">
                <h3>Facial &amp; Body Care</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-scissors"></span>
              </span>
              <div class="service-1-contents">
                <h3>Massages</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-hair-spray"></span>
              </span>
              <div class="service-1-contents">
                <h3>Hair Cut</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-hair"></span>
              </span>
              <div class="service-1-contents">
                <h3>Facial &amp; Body Care</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-barber-shop"></span>
              </span>
              <div class="service-1-contents">
                <h3>Massages</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="scissors text-center">Our Top Client Says</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <div class="d-flex v-card align-items-center mb-4">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Mike Fisher</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <div class="d-flex v-card align-items-center mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Jean Stanley</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <div class="d-flex v-card align-items-center mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Katie Rose</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-white">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="scissors text-center">Our Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="#">
                <img style="height:181px !important; width:290px;" src="images/bs10.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="#">
                <img style="height:181px !important; width:290px;"   src="images/s3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="#">
                <img style="height:181px !important; width:290px;" src="images/e1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/se1.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">Quality Haircut</h2>
            <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
            <p><a href="#" class="btn btn-primary">Contact Us Now</a></p>
          </div>
        </div>
      </div>
    </div>

    

    <?php
              include 'footer.php'
              ?>

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

      <!-- Gemini Chatbot Widget Start -->
<style>
  #gemini-chatbot-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 9999;
    background: #c74d5aff;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    font-size: 30px;
    cursor: pointer;
  }
  #gemini-chatbot-window {
    display: none;
    position: fixed;
    bottom: 100px;
    right: 30px;
    width: 320px;
    max-height: 420px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 16px rgba(0,0,0,0.25);
    z-index: 10000;
    flex-direction: column;
    overflow: hidden;
  }
  #gemini-chatbot-header {
    background: #dc3545;
    color: #fff;
    padding: 10px;
    font-weight: bold;
    text-align: center;
  }
  #gemini-chatbot-messages {
    padding: 10px;
    height: 250px;
    overflow-y: auto;
    font-size: 15px;
    background: #f8f9fa;
  }
  #gemini-chatbot-input {
    display: flex;
    border-top: 1px solid #eee;
  }
  #gemini-chatbot-input input {
    flex: 1;
    border: none;
    padding: 10px;
    font-size: 15px;
    outline: none;
  }
  #gemini-chatbot-input button {
    background: #dc3545;
    color: #fff;
    border: none;
    padding: 0 18px;
    cursor: pointer;
  }
</style>

<button id="gemini-chatbot-btn" title="Chat with us">💬</button>
<div id="gemini-chatbot-window">
  <div id="gemini-chatbot-header">Beautix</div>
  <div id="gemini-chatbot-messages"></div>
  <form id="gemini-chatbot-input">
    <input type="text" placeholder="Ask me anything..." autocomplete="off" required />
    <button type="submit">Send</button>
  </form>
</div>

<script>
  const btn = document.getElementById('gemini-chatbot-btn');
  const win = document.getElementById('gemini-chatbot-window');
  btn.onclick = () => win.style.display = win.style.display === 'block' ? 'none' : 'block';
  document.addEventListener('click', e => {
    if (!win.contains(e.target) && e.target !== btn) win.style.display = 'none';
  });

  const form = document.getElementById('gemini-chatbot-input');
  const input = form.querySelector('input');
  const messages = document.getElementById('gemini-chatbot-messages');

  function appendMsg(text, from) {
    const div = document.createElement('div');
    div.style.margin = '8px 0';
    div.style.textAlign = from === 'user' ? 'right' : 'left';
    div.innerHTML = `<span style="background:${from==='user'?'#dc3545':'#e9ecef'};color:${from==='user'?'#fff':'#222'};padding:6px 12px;border-radius:16px;display:inline-block;max-width:80%;">${text}</span>`;
    messages.appendChild(div);
    messages.scrollTop = messages.scrollHeight;
  }

  form.onsubmit = async function(e) {
    e.preventDefault();
    const userMsg = input.value.trim();
    if (!userMsg) return;
    appendMsg(userMsg, 'user');
    input.value = '';
    appendMsg('...', 'bot');
    try {
      // ✅ Send message to your PHP backend instead of Google directly
      const res = await fetch('ai.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ user_message: userMsg })
      });
      const data = await res.json();
      messages.lastChild.remove();
      appendMsg(data.bot_message || 'Sorry, I could not understand.', 'bot');
    } catch (err) {
      messages.lastChild.remove();
      appendMsg('Error connecting to AI.', 'bot');
    }
  };
</script>
<!-- Gemini Chatbot Widget End -->

  </body>

</html>

