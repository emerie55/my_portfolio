<?php
session_start();
include "connect.php";
include "visits.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Innocent Chiemerie</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.3.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
   <?php include "connection/header.php"; ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <div class="row">
            <div class="col-md-6 imgbox">
              <img src="assets/img/emerie.jpg" alt="" class="myimg">
            </div>
            <div class="col-md-6 imgbox1">
              <h2 class="animate__animated animate__fadeInDown my-5 py-3">
                Hey! My name is Chiemerie. I am a web Developer based in Nigeria
              </h2>
              <div class="social my-5">
                <a href="https://www.github.com/emerie55" class="mx-3 schat btnedit"><i class="bx bxl-github"></i></a>
                <a href="https://www.twitter.com/Emerieinno" class="mx-3 schat btnedit"><i class="icofont-twitter"></i></a>
                <a href="https://www.facebook.com/chiemerie.innocent" class="mx-3 schat btnedit"><i class="icofont-facebook"></i></a>
                <a href="https://www.linkedin.com/in/feargod-chiemerie-192b57134" class="mx-3 schat btnedit"><i class="icofont-linkedin"></i></a>
              </div>
              <div class="my-5">
                <a href="mycv.docx" class="cv" download>Download Resume</a>
              </div>
            </div>
          </div>
          <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
          
        </div>
      </div>

      <!-- Slide 2 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> -->

      <!-- Slide 3 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div> -->

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-image:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)),url(img/code.jpg); background-size:cover; background-position:center; background-attachment: fixed;">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p style="color:#ef6603;">Who i am</p>
        </div>

        <div class="row content"  data-aos="fade-up">
          <div class="col-lg-6 text-light" >
            <p class="animate__animated fanimate__adeInUp">
              <span style="font-size:1.6rem; font-weight:bold;">M</span>y name is Innocent Chiemerie, i am a web Developer based in Nigeria.
              I have been working as a freelance both front-end and back-end developer since 2017. I’ve always been someone who has both a creative and a logical side. When I discovered web design in university, I realized it would be the perfect fit. I could use my creative side to design and my logical side to code. As a bonus, being both designer and developer allows me to make sure no detail is lost in translation.
            </p>
            <p>
              I love working on a variety of web development technologies. My goal is to build highly performant websites that solve real-life problems and provide users with an awesome experience.
            </p>
            <!-- <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul> -->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" >
            <p class="text-light">
              I specialize in creating sites for individuals and businesses. You shouldn’t have to settle for cheap solutions or generic templates. I provide custom designs at afforable prices. Frequently your website is the first impression your customers will get, so make sure it’s a good one. Since my time is split between a few different things, I’m not able to take on every project I’d like to, but I'm always looking for fun work. 
            </p>
            <a href="#contact" class="btn-learn-more">Contact Me</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Languages</h2>
          <p style="color:#ef6603;">My Tech Skills</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
              <h4 class="title text-center"><a href="">HTML</a></h4>
              <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
              <h4 class="title text-center"><a href="">CSS</a></h4>
              <!-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
              <h4 class="title text-center"><a href="">JavaScript</a></h4>
              <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
              <h4 class="title text-center"><a href="">PHP</a></h4>
              <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
              <h4 class="title text-center"><a href="">MySQLi</a></h4>
              <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
              <h4 class="title text-center"><a href="">Laravel</a></h4>
              <!-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="las la-edit" style="color: #4680ff;"></i></div>
              <h4 class="title text-center"><a href="">Vue.js</a></h4>
              <!-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Portfolio</h2>
          <p style="color:#ef6603;">What i've done</p>
        </div>

        <!-- <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul> -->

        <div class="row portfolio-container" data-aos="fade-up">
          <?php
            $mysqli1="select * from port_folio order by id desc";
            $myquery1=mysqli_query($con,$mysqli1) or die(mysqli_error($con));
            while($row = mysqli_fetch_object($myquery1)){  
          ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
              <a href="https://<?php echo $row->prourl; ?>" target="_blank">
                <img src="admin_emerie/<?php echo $row->propic; ?>" class="img-fluid" alt="">
              </a>
            </div>
            <div class="portfolio-info">
              <h4><?php echo $row->title; ?></h4>
              <a href="admin_emerie/<?php echo $row->propic; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo $row->title; ?>"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php?id=<?php echo $row->id; ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <?php  } ?>
  
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p style="color:#ef6603;">Contact Me</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-5" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>No. 66 nwangene street, federal housing estate fegge, Onitsha.</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:feargodinnocent1994@gmail.com">feargodinnocent1994@gmail.com</a></p>
                <p>Replies within 24 hours</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+2348164269945</p>
                <p>MON - SUN, 9AM - 7PM</p>
              </div>

              <div class="phone">
                <i class="icofont-whatsapp"></i>
                <h4>Whatsapp:</h4>
                <p>+2348104618161</p>
                <p>MON - SUN, 9AM - 7PM</p>
              </div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0" data-aos="fade-left">

          <?php
             
             if (isset($_POST['cont'])){
           //form validation to avoid exploit
            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
          //exploit ends
         
            $fullname=test_input($_POST["fullname"]);
            $email=test_input($_POST["email"]);
            $subject=test_input($_POST["subject"]);
            $message=test_input($_POST["message"]);
            $date=test_input($_POST["date"]);
      
            $senddata2 = mysqli_query($con,"insert into con_tact (fullname,email,subject,message,date) values
            ('".mysqli_real_escape_string($con,$fullname)."','".mysqli_real_escape_string($con,$email)."','".mysqli_real_escape_string($con,$subject)."'
            ,'".mysqli_real_escape_string($con,$message)."','".mysqli_real_escape_string($con,$date)."')")or die(mysqli_error($con));	
      
            if(@$senddata2){
            echo"<script>alert('$fullname, thank you for reaching out, will get back to you soon.')</script>";
		        echo "<meta http-equiv='Refresh' content='0; url=#contact'>";

            }
            else{
              echo"<script>alert('An error occured')</script>";
            }
                  }
        
          ?>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="php-email-form">
              <div class="form-row my-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="fullname" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mb-4">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for me" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                  <input type="hidden" class="form-control form-control" name="date" value="<?php echo date("d M, Y"); ?>" readonly="readonly">
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div><br>
              <div class="text-center"><button type="submit" name="cont"> <i class="icofont-plus"></i> Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include "connection/footer.php" ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>