<!DOCTYPE html>
<html ng-app="CWG">
<head>
  <base href="http://localhost/gautier/" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gautier-Chiswick</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/font-awesome/css/font-awesome.min.css">
</head>
<body>
  <div id="fb-root"></div>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">GAUTIER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>" title="Home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about" title="About">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>contact" title="Contact">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav mr-auto pull-right">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>signup" title="Sign Up">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>login" title="Login">Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">    
    <div ng-view>
    </div>
    <hr>
    <footer><?php echo date('Y'); ?></footer>
</div>
    
    <script src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>node_modules/angular/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/angular-route/angular-route.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/angular-cookies/angular-cookies.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/oclazyload/dist/ocLazyLoad.min.js"></script>
    
    

    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
</body>
</html>