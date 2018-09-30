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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    
    <style>
      /* Remove the navbar's default rounded borders and increase the bottom margin */ 
      /* .navbar {
        margin-bottom: 50px;
        border-radius: 0;
      } */
      
      /* Remove the jumbotron's default bottom margin */ 
      .jumbotron {
        margin-bottom: 0;
      }
    
      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }
  </style>
</head>
<body>
    <div class="jumbotron" style="padding-top:15px; padding-bottom:5px">
      <div class="container text-center">
        <img src="<?php echo base_url();?>/assets/img/logo-gautier.png"></img><h1 style="color: #86BC25;">Chiswick Store</h1>      
        <p><i class="fa fa-address-card"></i> 140 Chiswick High Road . London W4 1PU . <i class="fa fa-phone"></i> 0203 581 5110 .  <i class="fa fa-envelope"></i> chiswick@gautier-shops.com</p>
      </div>
    </div>
      <!-- #74B929 -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">GAUTIER</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          MENU
        </button>
        <img class="d-none d-sm-block d-md-none" src="<?php echo base_url();?>/assets/img/logo-gautier.png"></img>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>" title="Home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>about" title="About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>contact" title="Contact">Contact</a>
            </li>
          </ul>
          <!-- <ul class="navbar-nav mr-auto pull-right">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>signup" title="Sign Up">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>login" title="Login">Login</a>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>

    <div ng-view></div>

    <footer class="container-fluid text-center">
    <p>Gautier Chiswick Copyright &copy; <?php echo date("Y"); ?></p>  
    <form class="form-inline">Get deals:
      <input type="email" class="form-control" size="50" placeholder="Email Address">
      <button type="button" class="btn btn-danger">Sign Up</button>
    </form>
    </footer>

    
    <script src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>node_modules/angular/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/angular-route/angular-route.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/angular-cookies/angular-cookies.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/oclazyload/dist/ocLazyLoad.min.js"></script>
    
    

    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
</body>
</html>