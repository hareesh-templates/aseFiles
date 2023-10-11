 <style type="text/css">
.clients .client-logo img {
    transition: all 0.3s ease-in-out;
    height: 300px;
}
.clients .client-logo {
 
    height: 300px;
}
.col-lg-4{
  text-align: center;
}
.breadcrumbs {
    padding: 15px 0;
    background: #2b2320;
    min-height: 40px;
    margin-top: 75px;
}
 </style>
 <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery</h2>
          <ol>
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

   <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Gallery</strong></h2>
        
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
          <?php if(!empty($gallery)){ foreach($gallery as $gallery){ ?>
         
            <div class="col-lg-4 col-md-4 col-xs-6" style="margin-top: 10px;">
            <div class="client-logo">
             <img src="<?php echo base_url(); ?>assets/img/gallery/<?php echo $gallery['image']; ?>" class="img-fluid" alt="Company">
            </div>
             <strong></strong>
            <p></p></a>
          </div>
          <?php }} else{
            echo 'Gallery not found..!';
          } ?>
        </div>
<br><br>
      </div>
    </section><!-- End Our Clients Section -->
  </main>