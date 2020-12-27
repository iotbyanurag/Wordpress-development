<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="site-header">
    <div class="container">
      <!-- <h1 class="school-logo-text float-left"><a href="#"><strong>IoT</strong> Embedded Systems</a></h1> -->
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
          <li class ="current-menu-item"><a href="<?php echo site_url();?>">Home</a></li>         
            <li class ="current-menu-item"><a href="#">Blogs</a></li>
            <li class ="current-menu-item"><a href="/wordpress/consulting-services/">Consulting Services</a></li>          
            <li class ="current-menu-item"><a href="#">Embedded Jobs</a></li>
            <li class="current-menu-item"><a href="https://iotbyanurag.github.io/Anurag-Portfolio/">About Me</a></li>
            <!-- <li><a href="#">Blog</a></li> -->
          </ul>
        </nav>
        <div class="site-header__util">
          <!-- <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a> -->
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
    
