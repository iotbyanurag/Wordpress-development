<?php get_header();
     get_sidebar();
    while (have_posts()){
    the_post(); ?>

<?php
      if(get_the_ID() == 43){ ?>
<div id="colorlib-main">
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-xl-8 py-5 px-md-5">
                    <div class="row pt-md-4">
                        <div class="col-md-12">
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2"
                                    style="background-image: url(<?php echo get_theme_file_uri('images/logi-270.jpg')?>);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2">
                                        <a href="single.html">I made my own survellience camera</a>
                                    </h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>1 January
                                                2021</span>
                                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Embedded
                                                    Systems</a></span>
                                            <span><i class="icon-comment2 mr-2"></i>0 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">
                                        This project aims at using a relatively cheap webcam
                                        to collect video feed and forward it over network
                                        using a SBC.
                                    </p>
                                    <p>
                                        <a href="#" class="btn-custom">Read More
                                            <span class="ion-ios-arrow-forward"></span></a>
                                    </p>
                                </div>
                            </div>

                            <!-- second replica block begin -->
                            <div class="blog-entry ftco-animate d-md-flex">
                                <a href="single.html" class="img img-2"
                                    style="background-image: url(<?php echo get_theme_file_uri('images/logi-270.jpg')?>);"></a>
                                <div class="text text-2 pl-md-4">
                                    <h3 class="mb-2">
                                        <a href="single.html">I made my own survellience camera</a>
                                    </h3>
                                    <div class="meta-wrap">
                                        <p class="meta">
                                            <span><i class="icon-calendar mr-2"></i>1 January
                                                2021</span>
                                            <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Embedded
                                                    Systems</a></span>
                                            <span><i class="icon-comment2 mr-2"></i>0 Comment</span>
                                        </p>
                                    </div>
                                    <p class="mb-4">
                                        This project aims at using a relatively cheap webcam
                                        to collect video feed and forward it over network
                                        using a SBC.
                                    </p>
                                    <p>
                                        <a href="#" class="btn-custom">Read More
                                            <span class="ion-ios-arrow-forward"></span></a>
                                    </p>
                                </div>
                            </div>
                            <!-- second replica-block end  -->
                        </div>

                        <div class="col-md-12"></div>
                    </div>
                    <!-- END-->
                    <div class="row">
                        <div class="col">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
                    <div class="sidebar-box pt-md-4">
                        <h3>Embedded News</h3>
                    </div>
                    <div class="sidebar-box ftco-animate"></div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Popular Articles</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url(<?php echo get_theme_file_uri('images/shell.png')?>);"></a>
                            <div class="text">
                                <h3 class="heading">
                                    <a href="https://samgrayson.me/2021-01-01-shell/">Stop Writing Shell-Scripts</a>
                                </h3>
                                <div class="meta">
                                    <div>
                                        <a href="#"><span class="icon-calendar"></span> Jan 01, 2021</a>
                                    </div>

                                    <div>
                                        <a href="#"><span class="icon-chat"></span> 0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url(<?php echo get_theme_file_uri('images/ubuntu.jpg')?>);"></a>
                            <div class="text">
                                <h3 class="heading">
                                    <a href="https://blog.jmdawson.co.uk/lichee-nano-pi-will-it-run-debian/">Running
                                        Debian on a 32MB RAM Single Core ARM SBC
                                    </a>
                                </h3>
                                <div class="meta">
                                    <div>
                                        <a href="#"><span class="icon-calendar"></span> Jan 01, 2021</a>
                                    </div>

                                    <div>
                                        <a href="#"><span class="icon-chat"></span>0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url(<?php echo get_theme_file_uri('images/slow-bug.jpg')?>);"></a>
                            <div class="text">
                                <h3 class="heading">
                                    <a href="https://github.com/postmalloc/slowbug">Slowbug is a VS Code extension for
                                        debugging your
                                        code in slow-mo!</a>
                                </h3>
                                <div class="meta">
                                    <div>
                                        <a href="#"><span class="icon-calendar"></span> Jan 01, 2021</a>
                                    </div>

                                    <div>
                                        <a href="#"><span class="icon-chat"></span>0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">What's the Buzz</h3>
                        <p>
                            This is an Embedded System and Technology blog, targeted
                            towards Students and Professionals working in the domain of
                            embedded system and IoT.
                        </p>
                    </div>
                </div>
                <!-- END COL -->
            </div>
        </div>
    </section>
</div>
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg>
</div>
<?php }
    ?>
<!-- for the HOMEpage the ID is 43  homepage ends here -->

<!-- for the consulting page the id is 41, it starts here -->

<?php
      if(get_the_ID() == 41){ ?>

<div id="colorlib-main">
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-xl-9 py-5 px-md-5">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"
                        data-interval="500">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                        </ol>

                        <!-- Embedded Product  -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/EMbedded-Product.jpg"
                                    class="d-block w-100" />

                                <div class="carousel-caption d-none d-md-block " id="xyzzz1">
                                    <h5 id="ppp1">Product Design Services From Scratch</h5>
                                    <p>Turn your product ideas into reality</p>
                                </div>
                            </div>
                            <!-- web-apps design -->
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/web-apps-design.jpg"
                                    class="d-block w-100" />

                                <div class="carousel-caption d-none d-md-block " id="xyzzz2">
                                    <h5 id="ppp2">Web Apps Design</h5>
                                    <p>Web Apps design and hosting services</p>
                                </div>
                            </div>

                            <!-- PCB prototyping -->
                            <div class="carousel-item ">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/my-board.jpg"
                                    class="d-block w-100" />

                                <div class="carousel-caption d-none d-md-block" id="xyzzz3">
                                    <h5 id="ppp3">PCB prototyping Services</h5>
                                    <p>Custom board design Hardware and Firmware for Embedded Systems</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php }
    ?>

<?php
      get_footer();
}
?>