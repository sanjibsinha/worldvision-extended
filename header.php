<!DOCTYPE html>
<html lang="<?php language_attributes( 'en' ); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/vendors/aos/dist/aos.css/aos.css" />
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php bloginfo( 'template_url' ); ?>/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
    <!-- endinject -->
    <?php wp_head(  ); ?>
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li><?php echo get_the_date( ); ?></li>
                  
                </ul>
                <div>
                  <a class="navbar-brand" href="<?php echo site_url( '/' ); ?>"
                    ><h1 class="font-weight-600 mt-3">পৃথিবীর অ‍াটচালা</h1></a>
                    <p>
                      বাংলার খড় মাটি কাদা দিয়ে মনগড়া
                    </p>
                </div>
                <div class="d-flex">
                  <ul class="navbar-right">
                    <li>
                      <a href="#">ENGLISH</a>
                    </li>
                    <li>
                      <a href="#">BENGALI</a>
                    </li>
                  </ul>
                  <ul class="social-media">
                    <li>
                      <a href="https://twitter.com/sanjibsinha">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent"
                >
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center"
                  >
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/world.html">World</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/author.html">Magazine</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/news-post.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/business.html">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/sports.html">Sports</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/art.html">Art</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/politics.html">Politics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/real-estate.html">Real estate</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/travel.html">Travel</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <!-- partial -->
          </div>
        </header>
        
        <div class="container">
          
              
            