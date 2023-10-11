   <style type="text/css">
      .form-group{
        padding-bottom: 40px;
      }
      .form{
    margin-top: 100px;
    border: 1px solid;
    padding: 20px;
    border-radius: 20px;
    border-color: aquamarine;
      }
      @media only screen and (max-width: 600px) {
          .carousel-inner {
            /*height: auto!important;*/
          }
        }
  </style>
 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Enquiry Form</h2>
          <ol>
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li>Enquiry Form</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">

        <div class="row no-gutters" style="margin-bottom: -150px;">
          <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"><img src="<?php echo base_url(); ?>assets/img/pedagantyada.jpeg" style="width: 100%;"></div>
          <div class="col-xl-6 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify">
             <!--  <p data-aos="fade-up" style="font-size: 18px; font-family: 'boxicons';">BRAND NEW Ready To Move  PROJECT at Madhurawada , near Ujwal Hospital , just 5MIN FROM HIGHWAY.</p> -->
            
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-check"></i>
                  <h4>Fully Developed Residential Area</h4>
                </div>
                 <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-check"></i>
                  <h4>Every flat designed according to vastu</h4>
                </div>
                 <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-check"></i>
                  <h4>Play area </h4>
                </div>
                 <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-check"></i>
                  <h4>Maintenance</h4>
                </div>
                 <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-check"></i>
                  <h4>Lawns & Plantation</h4>
                </div>
                 <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-check"></i>
                  <h4>Power supply & Water supply</h4>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-check"></i>
                  <h4>Car Parking</h4>
                </div>
                
              </div>
            </div><!-- End .content-->
          </div>
          
        </div>

         <div class="row no-gutters" style="margin-top: 100px;">
          
          <div class="col-xl-6 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
                                <h3 data-aos="fade-up">Property Overview</h3>
              <p data-aos="fade-up" style="font-size: 18px; font-family: 'boxicons';">2BHK flats spread around 865 sq ft is now available on sale at Pedagantyada, Gajuwaka. Pay the full amount instantly and grab the flat at only Rs 26 lakhs. With 50% of your savings and 50% from bank loan you can still bag it at an offer price of Rs 27 lakhs. To give your house owning dream a reality touch get in touch now!</p>
            
             
            </div><!-- End .content-->
          </div>
           <div class="col-xl-6 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify" style="width: 100%; padding: 0px 0px;">
                 <?php if(!empty($success_msg)){ ?>
                <div class="col-xs-12">
                    <div class="alert alert-success" style="text-align: center; margin-top: 0px;"><?php echo $success_msg; ?></div>
                </div>
                <?php }elseif(!empty($error_msg)){ ?>
                <div class="col-xs-12">
                    <div class="alert alert-danger" style="text-align: center;"><?php echo $error_msg; ?></div>
                </div>
                <?php } ?>
                              <h3 data-aos="fade-up" style="margin-bottom: -50px;">Please fill the form</h3>
          <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                      <div class="form-group">
                            <label for="title">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Name">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">Mobile</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile">
                            <?php echo form_error('mobile','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                          <div class="form-group">
                            <label for="title">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Location">
                            <?php echo form_error('location','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                          <div class="form-group" style="display:none;">
                            <label for="title">Budget</label>
                            <input type="text" class="form-control" name="budget" placeholder="Enter Budget" value="-">
                            <?php echo form_error('budget','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group" style="display:none;">
                            <label for="title">Flat</label>
                            <select name="flat" class="form-control">
                                <option value="-">Select Flat</option>
                                <option value="2BHK">2BHK</option>
                                <option value="3BHK">3BHK</option>
                            </select>
                            <?php echo form_error('flat','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Enquiry Now" style="background-color: #fbb340;border-color: #fbb340;" />
                    </form>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
</main>