<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="<?php echo base_url().'assets/logincv/css/style.css'?>">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <form class="sign-up" action="<?php echo base_url();?>index.php/Welcome/login" method="post">
    <h1 class="sign-up-title">Sign up in seconds</h1>
    <input type="text" class="sign-up-input" name="username" placeholder="What's your username?" autofocus>
    <input type="password" class="sign-up-input" name="password" placeholder="Choose a password">
    <input type="submit" value="Sign me up!" class="sign-up-button">
  </form>

  <div class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/sign-up-form" target="_parent">View Article</a>
      <a href="http://www.cssflow.com/snippets/sign-up-form.zip" target="_parent">Download</a>
    </p>
    <p class="about-author">
      &copy; 2013 <a href="http://thibaut.me" target="_blank">Thibaut Courouble</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">MIT License</a><br>
      Original PSD by <a href="http://dribbble.com/shots/1037950-Sign-up-freebie" target="_blank">Dylan Opet</a>
    </p>
  </div>
</body>
</html>
