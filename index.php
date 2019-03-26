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
  <link href="logo.jpg" rel="icon">
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

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
       <div style="max-height:30%; max-width:30%;"></div>
      </div>

      <div class="intro-info">
        <h2 >Explore   Experience   Experiment   Express   Empower</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Register</a>
          <a href="#services" class="btn-services scrollto">Our Work</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Welcome</h3>
          
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>The Roots is an initiative which provides a platform for creative representation of emotions through art.It aims at building an alternative channel free from the routinied social stagnancy, making minds imagine.
              It not only promotes all art forms but also validates the artist and his/her expression. The roots thereby extends its vision to make a change in people's life using theatrics, exploring the realm of the corporate and having work experience with different academic institutions,theatre groups and companies. Implicating the key of five E's- Experiment, Explore, Experience, Express and Empower-It delves into the inner self of a professional to accomplish the outer, strengthening the learning and the consequent growth of individuals.
            </p>

            


          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="logo.png" class="img-fluid" alt="" height="300px" width="300px">
          </div><!--
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
             Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>-->
          </div>
          
        </div>

      
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Work</h3>
          
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s"><a href="service/tre.html"><div>
            <div class="box" style="background: url(tre.jpg) center center no-repeat; background-size: cover;">
            </div><div style="margin-top: -30px; color:#A0A0A0;font-size: 20px;"><b><center>Training and Enhancement</center></b></div></div></a>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s"><a href="service/tas.html"><div>
            <div class="box" style="background: url(tas.png) center center no-repeat; background-size: cover;">
              
            </div><div style="margin-top: -30px; color:#A0A0A0;font-size: 20px;"><b><center>Theatre and Acting Studio</center></b></div></div></a>
          </div>
          

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s"><a href="service/ccs.html"><div>
            <div class="box" style="background: url(ccs.png) center center no-repeat; background-size: cover;">
              
            </div><div style="margin-top: -30px; color:#A0A0A0;font-size: 20px;"><b><center>Creative Content Studio</center></b></div></div></a>
          
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s"><a href="service/pa.html"><div>
            <div class="box" style="background: url(pa.jpg) center center no-repeat; background-size: cover;">
              
            </div><div style="margin-top: -30px; color:#A0A0A0;font-size: 20px;"><b><center>Platform for Artists</center></b></div></div></a>
          
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s"><a href="service/ihp.html"><div>
            <div class="box" style="background: url(ihp.jpg) center center no-repeat; background-size: cover;">
              
            </div>
          <div style="margin-top: -30px; color:#A0A0A0;font-size: 20px;"><b><center>In-house Productions</center></b></div></div></a>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s"><a href="service/trc.html"><div>
            <div class="box" style="background: url(trc.jpg) center center no-repeat; background-size: cover;">
              
            </div>
          <div style="margin-top: -30px; color:#A0A0A0;font-size: 20px;"><b><center>The Roots Casting</center></b></div></div></a>
          

        </div>

      </div></div>
    </section><!-- #services -->
        <!--==========================
      Clients Section
    ============================-->
   <section id="testimonials" class="section-bg1">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="ss.jpeg" class="testimonial-img" alt="">
                <h3>Sania Saifi</h3>
                <h4>Poet and Author</h4>
                <p>
                  Learning from Prabhjot Sir has been so much fun and creative since the very
beginning. He gives much space to experiments that the artist working with
him feels liberated. I've learned alot on both personal and professional levels
from him and would like to keep learning more and more. He has given a 
better direction to me as an Artist through his own unique way to looking at
things.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="aa.jpg" class="testimonial-img" alt="">
                <h3>Ayush Awasthi</h3>
                <h4>Digital Analyst</h4>
                <p>
                  Prabhjot Singh is a wonderful, talented, intuitive and inspiring person. He will
trick you, click you and help you just to take out what you need to have in you.
I have worked on multiple projects with him in past 3 years. And perhaps the
most important thing is that I now consider him to be a friend. Prabhjot really
cares about me and others.
You’ll love working with him!
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="IMG_6830.jpg" class="testimonial-img" alt="">
                <h3>Chandresh</h3>
                <h4>Owner,Riderz Planet</h4>
                <p>
                  We worked with the Roots team during Auto Expo 2018. They aligned
themselves with our goal to perform a small street play, 'Sadak Paar' in the
expo arena to spread awareness for road safety and avoiding road rash. The
entire team worked with great dedication and gained huge applause and
appreciation. We are extremely grateful to them for arranging a meaningful
play within a short time span and delivering with high professionalism. A
special thanks to Prabhjot for all the commendable efforts.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="nn.jpg" class="testimonial-img" alt="">
                <h3>Nimish Nanda</h3>
                <h4>Theatre Student</h4>
                <p>
                  Since the inception of my professional theatre career, Prabhjot Sir has always been there as friend, guide and trainer. Through various workshops, discussions and informal conversations, he has imparted his knowledge and artistically empowered many innumerable people, including me. He knows how to unclutter the complex theatrical concepts and make the learners understand them in simpler terms. The passion with which he is working rigorously to make theatre accesible to everyone is commendable!
The theatricality in his personality and performativity in his actions make him a complete package of theatrical expertise.
                </p>
              </div>
    
              

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->
        <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Collaborations</h3>
          <p></p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl/ey.png" title="Ernst & Young" data-placement="bottom" data-toggle="tooltip" alt="Ernst & Young" class="img-fluids d-block mx-auto">
            </div>
          </div>
          
         
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl/ge.jpg" title="General Electronics" data-placement="bottom" data-toggle="tooltip" alt="General Electronics" class="img-fluids d-block mx-auto">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl/wizcraft.jpg" title="Wizcraft" data-placement="bottom" data-toggle="tooltip" alt="Wizcraft" class="img-fluids d-block mx-auto">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/inc.jpeg" title="Indian National Congress" data-placement="bottom" data-toggle="tooltip" alt="INC" class="img-fluids d-block mx-auto">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl/sharda.png" title="Sharda University" data-placement="bottom" data-toggle="tooltip" alt="Sharda University" class="img-fluids d-block mx-auto">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/ba.jpg" title="Bajaj  Allianz" data-placement="bottom" data-toggle="tooltip" alt="Bajaj  Allianz" class="img-fluids d-block mx-auto">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/pwc.jpg" title="PWC" data-placement="bottom" data-toggle="tooltip" alt="PWC" class="img-fluids d-block mx-auto">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/c.jpg" title="The University of Chicago" data-placement="bottom" data-toggle="tooltip" alt="The University of Chicago" class="img-fluids d-block mx-auto">
            </div>
          </div>
        
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl/cambridge.jpg" title="Cambridge School" data-placement="bottom" data-toggle="tooltip" alt="Cambridge School" class="img-fluids d-block mx-auto">
            </div>
          </div>
         
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/flipkart.jpg" title="Flipkart" data-placement="bottom" data-toggle="tooltip" alt="Flipkart" class="img-fluids d-block mx-auto">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl/tfi.jpg" title="Teach for India" data-placement="bottom" data-toggle="tooltip" alt="Teach for India" class="img-fluids d-block mx-auto">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl/genpact.png" title="Genpact" data-placement="bottom" data-toggle="tooltip" alt="Genpact" class="img-fluids d-block mx-auto">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl/du.jpg" title="Delhi University" data-placement="bottom" data-toggle="tooltip" alt="Delhi University" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/ggsipu.jpg" title="GGSIPU" data-placement="bottom" data-toggle="tooltip" alt="GGSIPU" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl/education tree.jpg" title="Education Tree" data-placement="bottom" data-toggle="tooltip" alt="Education Tree" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/atelier.jpg" title="Atelier School  of Dramatic Arts" data-placement="bottom" data-toggle="tooltip" alt="Atelier School  of Dramatic Arts" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl/blueprint.jpg" title="Blueprint Publications" data-placement="bottom" data-toggle="tooltip" alt="Blueprint Publications" class="img-fluids d-block mx-auto">
            </div>
          </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/lt.jpg" title="Let's Talk" data-placement="bottom" data-toggle="tooltip" alt="Let's Talk" class="img-fluids d-block mx-auto">
            </div>
          </div>
         
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl/pricemap.jpg" title="Pricemap" data-placement="bottom" data-toggle="tooltip" alt="Pricemap" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl1/iitk.jpg" title="Indian Institute of Technology Kanpur" data-placement="bottom" data-toggle="tooltip" alt="Indian Institute of Technology Kanpur" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl1/kurkure.jpg" title="Kurkure" data-placement="bottom" data-toggle="tooltip" alt="Kurkure" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl1/modrn era.jpg" title="Modern Era Convent School" data-placement="bottom" data-toggle="tooltip" alt="Modern Era Convent School" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl1/rp.jpg" title="Riderz Planet" data-placement="bottom" data-toggle="tooltip" alt="Riderz Planet" class="img-fluids d-block mx-auto">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl1/trc.jpg" title="The Roots Casting" data-placement="bottom" data-toggle="tooltip" alt="The Roots Casting" class="img-fluids d-block mx-auto">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
             <img src="bl1/spf.jpeg" title="Short Play Festival" data-placement="bottom" data-toggle="tooltip" alt="Short Play Festival" class="img-fluids d-block mx-auto">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/upc.jpg" title="Universities Performers Community" data-placement="bottom" data-toggle="tooltip" alt="Universities Performers Community" class="img-fluids d-block mx-auto">
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="bl1/dream11.jpg" title="Dream11" data-placement="bottom" data-toggle="tooltip" alt="Dream11" class="img-fluids d-block mx-auto">
            </div>
          </div>
          
         
        
          


        </div>

      </div>

    </section>

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
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Gallery</h3>
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
                <h4><a href="adhyyan.html">Adhyyan School</a></h4>
                
                <div>
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="website/bp/3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="bp.html">Blueprint Publications</a></h4>
                
                <div>
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="website/ey/2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="ey.html">Ernst and Young</a></h4>
                
                <div>
                 
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="website/ge/3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="ge.html">General Electronics</a></h4>
                
                <div>
                 
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="website/pwc/2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="pwc.html">PriceWater House Coopers</a></h4>
                
                <div>
                  
                  
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="website/ba/4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="ba.html">Bajaj Allianz</a></h4>
               
                <div>
              
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="website/med/4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="med.html">Media</a></h4>
               
                <div>
                  
                  
                </div>
              </div>
            </div>
          </div>
          

          

          

          

        </div>

      </div>
    </section><!-- #portfolio -->



    <!--==========================
      Team Section
    ============================-->
    <!--<section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> #team -->



    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg1">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
             <!--ANY  PHOTO VIDEO OR LINK-->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>New Delhi, India</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p> therootssociety@gmail.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>9654773334</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form id="contact-form" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 characters of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message" name="send">Send Message
                </button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

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
