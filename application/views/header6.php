<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eswari Group</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="google-site-verification" content="EZlgbV5kC7JSagvbIR_fh9o5kxpVpaxeN2kNnK8mnY4" />

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/E.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/img/E.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <style type="text/css">
   @keyframes spinning {
    from { transform: rotate(0deg) }
    to { transform: rotate(360deg) }
  }
  .spinhov:hover {
    animation-name: spinning;
    animation-duration: 1s;
    animation-iteration-count: 1;
    /* linear | ease | ease-in | ease-out | ease-in-out */
    animation-timing-function: ease-in-out;
  }
    @keyframes spin3D {
    from { transform: rotateY(0deg) }
    to { transform: rotateY(360deg) }
  }
  .spinhov3D:hover {
    animation-name: spin3D;
    animation-duration: 1s;
    animation-iteration-count: 1;
    /* linear | ease | ease-in | ease-out | ease-in-out */
    animation-timing-function: ease-in-out;
  }
  @-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
  text-decoration: blink;
  -webkit-animation-name: blinker;
  -webkit-animation-duration: 3s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-timing-function:ease-in-out;
  -webkit-animation-direction: alternate;
}
 @-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink1{
  text-decoration: blink;
  -webkit-animation-name: blinker;
  -webkit-animation-duration:6s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-timing-function:ease-in-out;
  -webkit-animation-direction: alternate;
}
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/eglogo3.png"  class="spinhov"><img src="<?php echo base_url(); ?>assets/img/eglogo4.png"   class="spinhov3D blink" ><img src="<?php echo base_url(); ?>assets/img/eglogo5.png"   class="spinhov3D blink1" ></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="<?php if($this->uri->segment(1)=='' || $this->uri->segment(1)=='Home') { echo 'active'; } ?>" href="<?php echo base_url(); ?>">Home</a></li>
          <li><a class="<?php if($this->uri->segment(1)=='Aboutus') { echo 'active'; } ?>" href="<?php echo base_url(); ?>Aboutus">About Us</a></li>
          <li><a class="<?php if($this->uri->segment(1)=='Companies') { echo 'active'; } ?>" href="<?php echo base_url(); ?>Companies">Companies</a></li>
          <li><a class="<?php if($this->uri->segment(1)=='Careers') { echo 'active'; } ?>" href="<?php echo base_url(); ?>Careers">Careers</a></li>
          <li><a class="<?php if($this->uri->segment(1)=='Gallery') { echo 'active'; } ?>" href="<?php echo base_url(); ?>Gallery">Gallery</a></li>
          <li><a class="<?php if($this->uri->segment(1)=='Contact') { echo 'active'; } ?>" href="<?php echo base_url(); ?>Contact">Contact Us</a></li>
         <!--  <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->