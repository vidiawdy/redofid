<!DOCTYPE html>
<html lang="en">
<head>
    
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Pure Mix - HTML CSS Template</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css';?>">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/animate.min.css';?>">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/font-awesome.min.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/ionicons.min.css';?>">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/style.css';?>">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <h6>Made with love by retno sofi</h6>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                        <li><a href="<?php echo base_url();?>index.php">Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/about">About</a></li>
                        <?php
                          if ($this->session->has_userdata('username')) {
                              echo
                                 '
                                 <li>
                                    <a href="'.base_url('index.php/welcome/index').'">'.$this->session->userdata("fullname").'
                                    </a>
                                 </li>
                                 <li>
                                    <a href="'.base_url('index.php/welcome/logout').'">logout
                                    </a>
                                 </li>
                                 ';
                          }
                          else{
                              echo
                                 '
                                 <li>
                                    <a href="'.base_url('index.php/welcome/user').'">login
                                    </a>
                                 </li>
                                 
                                 ';
                          }
                              ?>
                        <li><a href="<?php echo base_url();?>index.php/welcome/contact">Order</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-one">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="1.6s">REDOF.ID</h1>
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">Hijab and Scarf as Your Crown</h3>
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Portfolio section
================================================== -->
    <?php
            if ($this->session->has_userdata('username')) {
                              echo '
        <section id="portfolio">
           <div class="container">
              <div class="row">

                 <div class="text-center">
                     <!-- iso section -->
                       <h1>Form Order </h1>
                 </div>

                  <section id="order-page">
                <div class="container">
                    <div class="center">        
                        <h2>ORDER FORM</h2><br>
                    </div> 

                    <div class="row order-wrap"> 
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-order-form" class="order-form" name="order-form" method="post" action="'. base_url('index.php/welcome/email').'">
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" name="name" placeholder="Your Name" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" name="email" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="devad">Delivery Address*</label>
                                    <textarea name="devad" required="required" class="form-control" rows="3" placeholder="Give us your exact location whether its an office, house, apartment (Street name, Street number, Zip code)" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="choose">Choose Your Order</label><br>
                                    <select class="col-sm-12" name="choose"> 
                                        <option value="sc001">sc001</option>
                                        <option value="sc002">sc002</option>
                                        <option value="sc003">sc003</option>
                                        <option value="sc004">sc004</option>
                                        <option value="sc005">sc005</option>
                                        <option value="hj001">hj001</option>
                                        <option value="hj002">hj002</option>
                                        <option value="hj003">hj003</option>
                                        <option value="hj004">hj004</option>
                                        <option value="hj005">hj005</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <label for="paymet">Payment Method</label><br>
                                    <select class="col-sm-12" name="paymet"> 
                                        <option value="bca">BCA</option>
                                        <option value="bni">BNI</option>
                                        <option value="mandiri">Mandiri</option>
                                    </select>              
                                </div>
                                </div>

                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="monum">Mobile Number* </label>
                                    <input type="text" name="monum" placeholder="example: 08xx-xxx" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="devar">Delivery Area*</label>
                                    <input type="text" name="devar" placeholder="Your Location" class="form-control" required="required">
                                </div>

                                <div class="form-group">
                                   <br> <label for="quantity">Quantity</label><br>
                                    <select class="col-sm-12" name="quantity"> 
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option> 
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="msg">Message</label>
                                    <textarea name="msg" id="msg" required="required" class="form-control" rows="3" placeholder="If your order is more than 15, describe it here" ></textarea>
                                </div>
                            </div> 

                                 <div class="col-sm-12 col-sm-offset-1">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required" style="background-color: grey" >Submit Message</button>
                                </div>        
                            </div>
                        </form> 
                    </div>
                </div>
            </section>  
              </div>
           </div>
        </section>
                          ';
                          }
                          else{
                              echo
                                 '
                                 <center><p> Sorry, you need to login before you order. Klik
                                    <a href="'.base_url('index.php/welcome/user').'">LOGIN
                                    </a></p></center>
                                 
                                 ';
                          }
                              ?>
<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © Redof</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="https://www.instagram.com/redof.id/" class="fa fa-instagram"></a></li>
					<li><a href="https://twitter.com/redofid" class="fa fa-twitter"></a></li>
					<li><a href="https://facebook.com/redofid" class="fa fa-facebook"></a></li>
				</ul>
				</ul>
			</div>
			
		</div>
	</div>
</footer>


<!-- Javascript 
================================================== -->
<script src="<?php echo base_url();?>assets/bootstrap/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/isotope.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/imagesloaded.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/custom.js"></script>

</body>
</html>