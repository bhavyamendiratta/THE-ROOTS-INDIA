<?php


  if(isset($_POST['send'])){
      $name=$_POST['name'];
      
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';
          $mail = new PHPMailer\PHPMailer\PHPMailer;
          $mail->IsSMTP(); // enable SMTP
          $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
          $mail->SMTPAuth = true; // authentication enabled
          $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
          $mail->Host = "smtp.gmail.com";
          $mail->Port = 587; // or 587
          $mail->IsHTML(true);
          $mail->Username = "noreplyprabhjot@gmail.com";
          $mail->Password = "NOREPLYprabhjot";
          $mail->SetFrom("noreplyprabhjot@gmail.com","prabhjotsingh.co.in");
          $mail->Subject = $name;
          $mail->Body ="<h4>First Name: $name</h4><br>
                        <h4>Email: $email</h4><br>
                        <h4>Subject: $subject</h4><br>
                        <h4>Message: $message</h4>";
          $mail->AddAddress("prabhjotsinghahluwalia@gmail.com","Prabhjot Singh");
           if(!$mail->Send()) {
              echo "Mailer Error: " . $mail->ErrorInfo;
           }
          header("location:index.php"); 
          }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>THE ROOTS INDIA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=roboto:300,300i,400,400i,700,700i|Roboto:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
          
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
   <style type="text/css">



#floating-button{
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: #db4437;
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
}

.plus{
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 55px;
  font-size: 38px;
  font-family: 'Roboto';
  font-weight: 300;
  animation: plus-out 0.3s;
  transition: all 0.3s;
}

#container-floating{
  position: fixed;
  width: 70px;
  height: 70px;
  bottom: 30px;
  right: 1px;
  z-index: 999;
}

#container-floating:hover{
  height: 400px;
  width: 90px;
}

#container-floating:hover .plus{
  animation: plus-in 0.15s linear;
  animation-fill-mode: forwards;
}

.edit{
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  display: block;
  right: 0;
  padding: 0;
  opacity: 0;
  margin: auto;
  line-height: 65px;
  transform: rotateZ(-70deg);
  transition: all 0.3s;
  animation: edit-out 0.3s;
}

#container-floating:hover .edit{
  animation: edit-in 0.2s;
   animation-delay: 0.1s;
  animation-fill-mode: forwards;
}

@keyframes edit-in{
    from {opacity: 0; transform: rotateZ(-70deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

@keyframes edit-out{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(-70deg);}
}

@keyframes plus-in{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(180deg);}
}

@keyframes plus-out{
    from {opacity: 0; transform: rotateZ(180deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

.nds{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: fixed;
  right: 40px;
  z-index: 300;
  transform:  scale(0);
  cursor: pointer;
}

.nd1{
  background: 
  right: 1px;
  bottom: 120px;
  animation-delay: 0.2s;
    animation: bounce-out-nds 0.3s linear;
  animation-fill-mode:  forwards;
}



.nd4{
  background: 
  right: 1px;
  bottom: 240px;
  animation-delay: 0.1s;
    animation: bounce-out-nds 0.1s linear;
  animation-fill-mode:  forwards;
}



@keyframes bounce-nds{
    from {opacity: 0;}
    to {opacity: 1; transform: scale(1);}
}

@keyframes bounce-out-nds{
    from {opacity: 1; transform: scale(1);}
    to {opacity: 0; transform: scale(0);}
}

#container-floating:hover .nds{
  
  animation: bounce-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

#container-floating:hover .nd3{
  animation-delay: 0.08s;
}
#container-floating:hover .nd4{
  animation-delay: 0.15s;
}
#container-floating:hover .nd5{
  animation-delay: 0.2s;
}

.letter{
  font-size: 23px;
  font-family: 'Roboto';
  color: white;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0;
  top: 0;
  bottom: 0;
  text-align: center;
  line-height: 40px;
}

.reminder{
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
  line-height: 40px;
}

.profile{
  border-radius: 50%;
  width: 40px;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
  right: 1px;
}
@media only screen and (max-width: 375px) {
  .myslides {
    height: 210px;
  }
}
.myslides{
  height: 719px;
}
</style>

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

       <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro" class="scrollto"><img src="logo1.png" class="img-fluid"></a>
        
        
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>

          <li class="active"><a href="#intro"><b>Home</b></a></li>
          <li><a href="#about"><b>About Us</b></a></li>
          <li><a href="#services"><b>Work</b></a>
           
          </li>
         
          <li><a href="journey.html"><b>Journey</b></a></li>
          
          <li><a href="#portfolio"><b>Gallery</b></a></li>
          
          <li><a href="#contact"><b>Contact Us</b></a></li>

        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
   <body id="page">
     

  <!--==========================
    Intro Section
  ============================-->


  <main id="main">

    <!--==========================
      About Us Section
    ============================-->


    <!--==========================
      Services Section
    ============================-->

        <!--==========================
      Clients Section
    ============================-->

        <!--==========================
      Clients Section
-->

    <!--==========================
      Why Us Section
    ============================--><!--
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Journey</h3>
          <p>Theatre, one of America’s leading not-for-profit theatres, is a nationally recognized performing arts company lead by Artistic Director Richard Coxand Managing Director Bradley Grosh. Home to a Resident Company of actors, the Theatre creates a wide-ranging repertoire and innovative productions of classics, neglected modern plays, and premieres. Theatre All New, the initiative to commission and develop new work year round, features the Theatre All New Festival each season presenting workshops and readings of new plays and musicals in process
.
A recipient of the Special Tony Award for Outstanding Regional Theatre, the Alley has brought productions to Broadway, 40 American cities including New York’s Lincoln Center and internationally to Berlin, Paris, and St. Petersburg throughout its 69 year history.

Theatre underwent a $46.5 million building renovation in 2014-2015 season, the first major improvements since the building opened in 1968. With more than 500 performances in 2015-2016, the Alley will produce more performances than all other performing arts organizations in the Houston Theater District combined.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">Corporis dolorem</h5>
                <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab inventore officiis aut voluptatibus.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Voluptates dolores</h5>
                <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Eum ut aspernatur</h5>
                <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in non nemo ex. </p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>-->
<!--
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
          </div>
  
        </div>

      </div>
    </section>-->
        <section id="portfolio" class="section-bg1" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Upcoming Events</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
           
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="website/adhyyan/4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="adhyyan.html">Event 1(date)</a></h4>
                
                <div>
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="website/bp/3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="bp.html">Event 2(date)</a></h4>
                
                <div>
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="website/ey/2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="ey.html">Event 3(date)</a></h4>
                
                <div>
                 
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="website/ge/3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="ge.html">Event 4(date)</a></h4>
                
                <div>
                 
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="website/pwc/2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="pwc.html">Event 5</a></h4>
                
                <div>
                  
                  
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="website/ba/4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="ba.html">Event 6</a></h4>
               
                <div>
              
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="website/med/4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="med.html">Event 6</a></h4>
               
                <div>
                  
                  
                </div>
              </div>
            </div>
          </div>
          

          

          

          

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Portfolio Section
    ============================-->
  

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3></h3>
            <p></p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4></h4>
            
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            
            

            <div class="social-links">
              <a href="https://twitter.com/therootsindia_?s=08" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/therootsindiaofficial" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/therootsindiaofficial/" class="instagram"><i class="fa fa-instagram"></i></a>
              
              <a href="https://www.youtube.com/channel/UCHprYSRCTY-Y9ZUIolzuLxA?&ab_channel=TheRootsSociety" class="youtube"><i class="fa fa-youtube"></i></a>
            </div>

          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>The Roots India</strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- #footer -->

    <div id="container-floating">

  
  <div class="nd4 nds" data-toggle="tooltip" data-placement="left" data-original-title="contract@gmail.com"><img class="reminder">
    <p class="letter"><a href="mailto:prabhjotsinghahluwalia@gmail.com?subject=&amp;body=Hey%20Prabhjot"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a></p>
  </div>
  <div class="nd1 nds" data-toggle="tooltip" data-placement="left" data-original-title="Edoardo@live.it"><img class="reminder">
    <p class="letter"><a href="https://api.whatsapp.com/send?phone=919654773334&amp;text=Hi%20Prabhjot"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a></p>
  </div>

  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
    <p class="plus"><i class="fa fa-phone" aria-hidden="true"></i></p>
    <img class="edit" src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>

</div>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
