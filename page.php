<?php get_header();
    while (have_posts()){
    the_post(); ?>
  <div class="page-banner">
  <div class="page-banner-custome"><?php the_title();?></div>
    <div class="page-banner__intro">
        <h6>Need budget-friendly design services ?
        We are a small team of highly qualified Engineers with diverse skillsets, designing Industry grade solutions from scratch.</h6>
    </div>
  </div>

  <div class="container container--narrow page-section">

    <?php
      if(get_the_ID() == 25){ ?>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/board-design.jpg')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--small t-center">PCB and Board Design</h2>
               
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/coding.jpg')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--small t-center">Embedded Software Design</h2>
               
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/website-design.jpg')?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Web-apps-Design</h2>
               
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>
   <?php }
    ?>

    <div class="generic-content">
      <?php the_content();?>
    </div>

  </div> 
       <?php
      get_footer();
}
?>
