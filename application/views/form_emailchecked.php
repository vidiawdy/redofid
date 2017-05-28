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
                <a href="<?php echo base_url().'index.html'?>">Made with love by retno sofi</a>
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
                        <li><a href="<?php echo base_url();?>index.php/welcome/contact">Contact</a></li>
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
<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            <div class="row">
               <!-- iso section -->
               <div class="text">

                  <ul class="text-center">
                           <h1>Create Your Own Account</h1>
                        </ul>
                    </div>
                </div>
            <div class="container">
                <form method="POST" action="<?php echo base_url('index.php/welcome/insert');?>" enctype="multipart/form-data">
                            
                    <div class="form-group">
                      <label for="fullname">Fullname:</label>
                      <input type="text" class="form-control" id="fullname" placeholder="Your Fullname" name="fullname">
                    </div>                
                    <div class="form-group">
                      <label for="alamat">Alamat:</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Your Address" name="alamat">
                    </div>  
                    <div class="form-group">
                      <label for="nohp">No HP:</label>
                      <input type="text" class="form-control" id="nohp" placeholder="Your Number Phone" name="nohp">
                    </div>  
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                    </div>  
                    <div class="form-group">
                      <label for="username">Username:</label>
                      <input type="text" class="form-control" id="username" placeholder="Your Username" name="username">
                    </div>  
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" id="password" placeholder="Your Password" name="password">
                    </div>  
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
                    </div>                
</div>
              

         </div>

      </div>
   </div>
</section>

<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2016 Your Company Name - Designed by Tooplate</p>
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