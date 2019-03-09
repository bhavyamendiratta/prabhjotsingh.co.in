<?php


  if(isset($_POST['send'])){
      $name=$_POST['name'];
      $surname=$_POST['surname'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
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
                        <h4>Last Name: $surname</h4><br>
                        <h4>Email: $email</h4><br>
                        <h4>Phone: $phone</h4><br>
                        <h4>Message: $message</h4>";
          $mail->AddAddress("prabhjotsinghahluwalia@gmail.com","Prabhjot Singh");
           if(!$mail->Send()) {
              echo "Mailer Error: " . $mail->ErrorInfo;
           }
          header("location:index.php"); 
          }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prabhjot Singh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <link rel="stylesheet" href="css/style.default.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style type="text/css">
     .para{
      margin-left: 100px;
     
              .typewriter h1 {
  color: #fff;
  font-family: monospace;
  overflow: hidden;
  border-right: .15em solid orange; 
  white-space: nowrap; 
  margin: 0 auto;
  letter-spacing: .15em;
  animation: 
    typing 3.5s steps(50, end),
    blink-caret .5s step-end infinite;
}

@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: transparent }
}
        </style>
        <style type="text/css">
          @keyframes bgcolor {
    0% {
        background-color: #FFFFFF
    }

    30% {
        background-color: #FFFFFF
    }

    60% {
        background-color: #FFFFFF
    }

    90% {
        background-color: #FFFFFF
    }

    100% {
        background-color: #FFFFFF
    }
}

body {
    -webkit-animation: bgcolor 20s infinite;
    animation: bgcolor 10s infinite;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
    
} 
.gains{
  color: #707070;
}
.gains:hover { 
  color: #DCDCDC;
}
.pointer{
  cursor: pointer;
}


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
  z-index: 300;
  transform:  scale(0);
  cursor: pointer;
}

.nd1{
  background: 
  right: 50%;
  bottom: 120px;
  animation-delay: 0.2s;
    animation: bounce-out-nds 0.3s linear;
  animation-fill-mode:  forwards;
}



.nd4{
  background: 
  right: 50%;
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
</style>
        


  </head>
  <body>
    <header class="header" >
      <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #161616;">
        <div class="container"><a href="login/index.php" class="navbar-brand scrollTo"><div style = "color:#DCDCDC;">Prabhjot Singh</div></a>
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span style="color: white;" class="fa fa-bars"></span></button>
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#intro" class="nav-link link-scroll"><div class="gains">Introduction</div></a></li>
              <li class="nav-item"><a href="#about" class="nav-link link-scroll"><div class="gains">About</div></a></li>
              <li class="nav-item"><a href="#services" class="nav-link link-scroll"><div class="gains">Work</div></a></li>
              <li class="nav-item"><a href="#testimonials" class="nav-link link-scroll"><div class="gains">Testimonials</div></a></li>
              <li class="nav-item"><a href="#references" class="nav-link link-scroll"><div class="gains">Gallery</div></a></li>
              <li class="nav-item"><a href="#customers" class="nav-link link-scroll"><div class="gains">Collaborations</div></a></li>
              <li class="nav-item"><a href="#contact" class="nav-link link-scroll"><div class="gains">Contact</div></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Intro Image -->
   <br><br>
  <img class="mySlides" src="test1/1.jpeg"   width="100%" >
  <img class="mySlides" src="test1/2.jpeg"   width="100%" >
  <img class="mySlides" src="test1/3.jpg"   width="100%" >
  <img class="mySlides" src="test1/4.jpeg"   width="100%">
  <img class="mySlides" src="test1/5.jpeg"   width="100%">
  <img class="mySlides" src="test1/6.jpg"   width="100%" >

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script> 
    <!-- About-->
     <section id="about" class="about-section" style="background-color: #161616;">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">About</h2>
        </header>
        <div class="row">
          <div data-animate="fadeInUp" class="col-lg-6">
            <p>Known for his performances and work in the Delhi Theatre Circuit, Prabhjot is the Founder and
Creative Cultivator of The Roots India. He has been practicing theatre since his school days
and wants to promote theatre as a form of mainstream education.He has completed the acclaimed Theatre Appreciation Course from National School of Drama
where he was part of a select set of students from across India. Eminent theatrepersonalities
like Dr. Anuradha Kapoor, K. S. Rajendran, Dr. Tripurari Sharma, Dr. Waman Kendre lectured on
different aspects of theatre. While playwrights like Satish Alekar and Asif Ali Khan introduced
fine elements of playwriting through a workshop. Also, renowned theatre and television artists
like Himani Shivpuri, M.K. Raina engaged students in different aspects of acting and multiculturality.</p>
            <p>He has extensive experience of performing in several theatre productions and workshops. He has been a part of workshops conducted by the theater stalwarts such as, Faizal Alkazi, Sohail Khan, Kuljeet
Singh, Danish Hussain, Ramu Ramunathan, Ajit Singh Pahlawat, Suresh Shetty, Devender
Sharma and VK Sharma.</p>
            <p>Recipient of numerous awards for best actor, best street play performer and best director from
different colleges of Delhi University. He was also felicitated for his contribution in the field of
theatre by the Delhi University Student Union (DUSU).</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-6">
            <img src="main.jpg" class="image rounded-circle img-fluid" style="border-radius: 10%;"><br><br>
          </div>
          
        </div>
      </div>
      <div class="col-md-12 text-center"><a href="aboutus.html">
                    <button type="submit" class="btn btn-outline-primary">View More</button></a>
                  </div>
    </section>
    
   <!-- Service-->
    <section id="services"  class="" style="background-color: #DCDCDC;" >
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">Work</h2>
        </header>
        <div class="row services text-center">
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-group"></i></div><!--<div onClick="document.location='service.html#ct';">-->
            <h3><div class="pointer">Corporate Trainer</div></h3><!--</div>-->
            <p class="text-left description">Prabhjot is one of the India’s first theatre director who
uses performing arts as a methodology to help
organisations achieve their goals effectively. With his
modules which have been created after discourses with
HR’s over 10 years, the employees start experimenting
with their ideas, exploring new dimensions,
experiencing and expressing their view points which in
turn empowers them as well as the organisation. His
methodology is a creative engagement piece that has
been implemented in more than 30 companies across
India.</p>
          </div>
           <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-sign-language"></i></div><!--<div onClick="document.location='service.html#ct';">-->
            <h3><div class="pointer"> Personality Enhancement</div></h3><!--</div>-->
            <p class="text-left description">Every individual needs to explore their inner selves to
enhance their personality and come out as a confident
and well aware individual. Prabhjot’s Methodology
helps in enhancement of an individual’s inner self
He has been associated with Business Tycoons, Political
Leaders, Actors, Models, Presenters and Children. From movement to creative thinking, from speech to voice, he
works on all the aspects; helping them work towards
their vision.</p>
          </div>
            <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-feed"></i></div><!--<div onClick="document.location='service.html#ct';">-->
            <h3><div class="pointer">Communication Consultant</div></h3><!--</div>-->
            <p class="text-left description">The unique blend of Prabhjot’s expertise and experience
across the world of digital, branding and marketing enables
him to ideate and curate products and campaigns which
truly transform an organisation - opening up new
possibilities and inspiring audiences. His vision helps
organisations communicate more effectively with their
target audiences, helping them to establish their brand and
present themselves as thought leaders in a fast-changing
world.</p>
          </div>
            <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-child"></i></div><!--<div onClick="document.location='service.html#ed';">-->
            <h3><div class="pointer">Educator</div></h3><!--</div>-->
            <p class="text-left description">Prabhjot believes that the young minds should explore beyond the four walls of classroom
and experience the learning process in its true sense. His modules work towards
implementing alternate methods of learning for students, teachers as well as parents. His
modules aim at experiential learning to give the children the opportunity to experiment with
their ideas, explore their surroundings, experience new situations and express their
viewpoints. Prabhjot works with NGO’s, and Educational Institutions to achieve the vision of
implementing theatre as a methodology for experiential learning.</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-film"></i></div><!--<div onClick="document.location='service.html#theatrefilms';">-->
            <h3><div class="pointer"> Theatre & Films</div></h3><!--</div>-->
            <p class="text-left description">Prabhjot is practicing theatre professionally since a decade now. He is a known for his work
in the campus theatre and beyond as director, writer, producer and actor. He has
completed the acclaimed Theatre Appreciation Course
from National School of Drama where he was part of a
select set of students from across India. He has worked on more
than 50 theatre productions from across India. He was written, directed and produced over
5 short films. He has also worked as an actor with brands like Kurkure, Flipkart, Dream 11,
and IPL. He has also acted in numerous plays and a feature film directed ‘October’ directed
by Shoojit Sarcar.</p>
          </div>
        
         
          
        
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-plus"></i></div><!--<div onClick="document.location='service.html#ct';">-->
            <h3><div class="pointer">Initiatives</div></h3><!--</div>-->
            <p class="text-left description">"The world needs Artists".<br>
Prabhjot is working each day towards his vision of creating a sustainable system for artists
around the globe. He is also working with a vision of implementing theatre and performing
arts as a methodology for learning in schools and corporates. The Roots India, Short Play
Festival, Let’s Talk, University’s Performers Community and Green Soul are some of the
platforms through which he realises his vision of empowering one and all.</p>
          </div>

        <!-- To add more services just copy above div tag and change the required data-->
        </div>
        <!--<hr data-animate="fadeInUp">
        <div data-animate="fadeInUp" class="text-center">
          <p class="lead">Would you like to know more or just discuss something?</p>
          <p><a href="#contact" class="btn btn-outline-light link-scroll">Contact me</a></p>
        </div>-->
      </div>
    </section>
    <!--THE FLOATING BUTTON -->
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









    <!-- Testimonials-->
  
   <section id="testimonials" class="testimonials-section bg-gray" style="background-color: #161616;">
      <div class="container">
        <header class="text-center mb-2">
          <h2 data-animate="fadeInUp" class="title">Testimonials<span></span></h2>
        </header>
        <ul data-animate="fadeInUp" class="owl-carousel owl-theme testimonials equalize-height">
       
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>Learning from Prabhjot Sir has been so much fun and creative since the very
beginning. He gives much space to experiments that the artist working with
him feels liberated. I've learned alot on both personal and professional levels
from him and would like to keep learning more and more. He has given a 
better direction to me as an Artist through his own unique way to looking at
things.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="ss.jpeg">
                  <h5>Sania Saifi</h5>
                  <p>Poet and Author</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>Prabhjot Singh is a wonderful, talented, intuitive and inspiring person. He will
trick you, click you and help you just to take out what you need to have in you.
I have worked on multiple projects with him in past 3 years. And perhaps the
most important thing is that I now consider him to be a friend. Prabhjot really
cares about me and others.
You’ll love working with him!</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="aa.jpg">
                  <h5>Ayush Awasthi</h5>
                  <p>Digital Analyst</p>
                  
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>We worked with the Roots team during Auto Expo 2018. They aligned
themselves with our goal to perform a small street play, 'Sadak Paar' in the
expo arena to spread awareness for road safety and avoiding road rash. The
entire team worked with great dedication and gained huge applause and
appreciation. We are extremely grateful to them for arranging a meaningful
play within a short time span and delivering with high professionalism. A
special thanks to Prabhjot for all the commendable efforts.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="IMG_6830.jpg">
                  <h5>Chandresh</h5>
                  <p>Owner,Riderz Planet</p>
                </div>
              </div>
            </div>
          
  <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>Since the inception of my professional theatre career, Prabhjot Sir has always been there as friend, guide and trainer. Through various workshops, discussions and informal conversations, he has imparted his knowledge and artistically empowered many innumerable people, including me. He knows how to unclutter the complex theatrical concepts and make the learners understand them in simpler terms. The passion with which he is working rigorously to make theatre accesible to everyone is commendable!
The theatricality in his personality and performativity in his actions make him a complete package of theatrical expertise.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="nn.jpg">
                  <h5>Nimish Nanda</h5>
                  <p>Theatre Student</p>
                </div>
              </div>
            </div>
          </li>
          </li>
        </ul>
      </div>
    </section>
    <!-- Statistics-->
    <!--<section id="statistics" data-dir="up" style="background: url(&quot;img/parallax.jpg&quot;);" class="statistics-section text-white parallax parallax">
      <div class="container">
        <div class="row showcase text-center"> 
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-align-justify"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">120</span><br>Websites</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-users"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">50</span><br>Satisfied Clients</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-copy"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">320</span><br>Projects</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-font"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">333</span><br>Magazines and Brochures</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="dark-mask"></div>
    </section>-->
    <!--
    *** REFERENCES IMAGE ***
    _________________________________________________________
    -->
   
    <section id="references" style="background-color: #DCDCDC;">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 data-animate="fadeInUp" class="title">Gallery</h2>
           
          </div>
          <!--<ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="Training">Training</a></li>
            <li><a href="#" data-filter="Content Consultancy">Content Consultancy</a></li>
            <li><a href="#" data-filter="Theatre">Theatre</a></li>
            <li><a href="#" data-filter="Film and Digital Media">Film and Digital Media</a></li>
            <li><a href="#" data-filter="Initiatives">Initiatives</a></li>
          </ul>-->
          <div id="detail">
            <div class="row">
              <div class="col-lg-10 mx-auto"><span class="close">×</span>
                <div id="detail-slider" class="owl-carousel owl-theme"></div>
                <div class="text-center">
                  <h1 id="detail-title" class="title"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>
          <!-- Reference detail-->
          <div id="references-masonry" data-animate="fadeInUp">
            <div class="row">
                 <div data-category="Content Consultancy" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="website/adhyyan/9.jpeg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title"><div onclick="window.location = 'adhyyan.html'">Adhyyan School</div></h3>
                            
                          </div>
                        </div>
                     
                    </div>
                  </div>
                  <div data-category="Content Consultancy" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="website/bp/5.jpeg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title"><div onclick="window.location = 'bp.html'">Blueprint Publications</div></h3>
                            
                          </div>
                        </div>
                     
                    </div>
                  </div>
                  
                 <div data-category="Content Consultancy" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="website/ey/1.jpeg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title"><div onclick="window.location = 'ey.html'">Ernst & Young</div></h3>
                            
                          </div>
                        </div>
                     
                    </div>
                  </div>
                  <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="website/ge/3.jpeg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title"><div onclick="window.location = 'ge.html'">General Electronics</div></h3>
                            
                          </div>
                        </div>
                     
                    </div>
                  </div>
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="website/pwc/4.jpeg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title"><div onclick="window.location = 'pwc.html'">Price Water House Coopers</div></h3>
                            
                          </div>
                        </div>
                     
                    </div>
                  </div>
                  <div data-category="Film and Digital Media" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="website/med/7.jpeg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title"><div onclick="window.location = 'med.html'">Media</div></h3>
                            
                          </div>
                        </div>
                     
                    </div>
                  </div>
<div data-category="Content Consultancy" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><img src="website/ba/4.jpeg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title"><div onclick="window.location = 'ba.html'">Bajaj Allianz</div></h3>
                            
                          </div>
                        </div>
                     
                    </div>
                  </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    
   <!-- Customers-->
    <section id="customers" class="customers-section bg-gray">
      <div class="container">
        <div class="col-md-12">
          <div class="row align-items-center">
           
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/ey.png" title="Ernst & Young" data-placement="bottom" data-toggle="tooltip" alt="Ernst & Young" class="img-fluid d-block mx-auto"></div>
            </div>
             <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/ge.jpg" title="General Electronics" data-placement="bottom" data-toggle="tooltip" alt="General Electronics" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/wizcraft.jpg" title="Wizcraft" data-placement="bottom" data-toggle="tooltip" alt="Wizcraft" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/inc.jpeg" title="Indian National Congress" data-placement="bottom" data-toggle="tooltip" alt="INC" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/sharda.png" title="Sharda University" data-placement="bottom" data-toggle="tooltip" alt="Sharda University" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/ba.jpg" title="Bajaj  Allianz" data-placement="bottom" data-toggle="tooltip" alt="Bajaj  Allianz" class="img-fluid d-block mx-auto"></div>
            </div>
             <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/pwc.jpg" title="PWC" data-placement="bottom" data-toggle="tooltip" alt="PWC" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/c.jpg" title="The University of Chicago" data-placement="bottom" data-toggle="tooltip" alt="The University of Chicago" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/dream11.jpg" title="Dream11" data-placement="bottom" data-toggle="tooltip" alt="Dream11" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/flipkart.jpg" title="Flipkart" data-placement="bottom" data-toggle="tooltip" alt="Flipkart" class="img-fluid d-block mx-auto"></div>
            </div>
             <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/tfi.jpg" title="Teach for India" data-placement="bottom" data-toggle="tooltip" alt="Teach for India" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/genpact.png" title="Genpact" data-placement="bottom" data-toggle="tooltip" alt="Genpact" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/du.jpg" title="Delhi University" data-placement="bottom" data-toggle="tooltip" alt="Delhi University" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/ggsipu.jpg" title="GGSIPU" data-placement="bottom" data-toggle="tooltip" alt="GGSIPU" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/education tree.jpg" title="Education Tree" data-placement="bottom" data-toggle="tooltip" alt="Education Tree" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/atelier.jpg" title="Atelier School  of Dramatic Arts" data-placement="bottom" data-toggle="tooltip" alt="Atelier School  of Dramatic Arts" class="img-fluid d-block mx-auto"></div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/blueprint.jpg" title="Blueprint Publications" data-placement="bottom" data-toggle="tooltip" alt="Blueprint Publications" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/cambridge.jpg" title="Cambridge School" data-placement="bottom" data-toggle="tooltip" alt="Cambridge School" class="img-fluid d-block mx-auto"></div>
            </div>
             <!--<div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/adhyyan.jpg" title="Adhyyan School" data-placement="bottom" data-toggle="tooltip" alt="Adhyyan School" class="img-fluid d-block mx-auto" width="100px" height="100px"></div>
            </div>-->
            <!--<div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/dps.jpg" title="Delhi Public School" data-placement="bottom" data-toggle="tooltip" alt="Delhi Public School" class="img-fluid d-block mx-auto"></div>
            </div>-->
            
            
             
            
             
             <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl/pricemap.jpg" title="Pricemap" data-placement="bottom" data-toggle="tooltip" alt="Pricemap" class="img-fluid d-block mx-auto"></div>
            </div>
             <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/iitk.jpg" title="Indian Institute of Technology Kanpur" data-placement="bottom" data-toggle="tooltip" alt="Indian Institute of Technology Kanpur" class="img-fluid d-block mx-auto"></div>
            </div>
             <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/kurkure.jpg" title="Kurkure" data-placement="bottom" data-toggle="tooltip" alt="Kurkure" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/modrn era.jpg" title="Modern Era Convent School" data-placement="bottom" data-toggle="tooltip" alt="Modern Era Convent School" class="img-fluid d-block mx-auto"></div>
            </div>
             <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/rp.jpg" title="Riderz Planet" data-placement="bottom" data-toggle="tooltip" alt="Riderz Planet" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/trc.jpg" title="The Roots Casting" data-placement="bottom" data-toggle="tooltip" alt="The Roots Casting" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/spf.jpeg" title="Short Play Festival" data-placement="bottom" data-toggle="tooltip" alt="Short Play Festival" class="img-fluid d-block mx-auto"></div>
            </div>
             
            
             
             
              
             



            

           <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/upc.jpg" title="Universities Performers Community" data-placement="bottom" data-toggle="tooltip" alt="Universities Performers Community" class="img-fluid d-block mx-auto"></div>
            </div>

           

            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="bl1/lt.jpg" title="Let's Talk" data-placement="bottom" data-toggle="tooltip" alt="Let's Talk" class="img-fluid d-block mx-auto"></div>
            </div>

            

           

           

            
            
            

          </div>
        </div>
      </div>
    </section>
    <!-- Contact-->
    <section id="contact" data-animate="bounceIn" class="" style="background-color: #DCDCDC;">
      <div class="container">
        <header class="text-center">
          <h2 class="title">Contact me</h2>
        </header>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="contact-form" method="post">
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="name" placeholder="Your firstname *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="surname" placeholder="Your lastname *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="email" placeholder="Your email *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="phone" placeholder="Your phone" class="form-control">
                  </div>
                  <div class="col-md-12">
                    <textarea name="message" placeholder="Message for me *" rows="4" required="required" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" name="send" class="btn btn-outline-primary">Send message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-lg-left">
            <p class="social"><a href="https://www.facebook.com/prabhjotsinghahluwaliaofficial/" class="external facebook wow fadeInUp"><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/prabhjotsinghahluwalia/" data-wow-delay="0.2s" class="external instagram wow fadeInUp"><i class="fa fa-instagram"></i></a><a href="https://twitter.com/prabhjot_artist" data-wow-delay="0.4s" class="external gplus wow fadeInUp"><i class="fa fa-twitter"></i></a><a href="https://www.linkedin.com/in/prabhjot-singh-99aa7b125" data-wow-delay="0.6s" class="email wow fadeInUp"><i class="fa fa-linkedin"></i></a></p>
          </div>
          <!-- /.6-->
          <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
            <p>Prabhjot Singh<br><a style="text-decoration: none;" href="mailto:"prabhjotsinghahluwalia@gmail.com"">prabhjotsinghahluwalia@gmail.com</a><br><a style="text-decoration: none;" href="tel:"9654773334"">9654773334</a></p>
          </div>
          <div class="col-12 mt-4">
           
          </div>
        </div>
      </div>
    </footer><!--
    <div id="style-switch" class="collapse">
      <h4 class="text-uppercase">Select theme colour</h4>
      <form class="mb-3">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default">turquoise</option>
          <option value="red">red</option>
          <option value="pink">pink</option>
          <option value="green">green</option>
          <option value="violet">violet</option>
          <option value="sea">sea</option>
          <option value="blue">blue</option>
        </select>
      </form>
      <p><img src="img/template-mac.png" alt="" class="img-fluid"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="js/front.js"></script>
  </body>
</html>