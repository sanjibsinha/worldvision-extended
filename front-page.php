<?php get_header(); ?>



          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">World News</h3>
                </div>
              </div>
            </div>

      <div class="row">

              
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">

                  <?php 
                  
                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 1,
                    'category_name' => 'Health'

                  ));

                      while ($worldPosts->have_posts()) {
                      $worldPosts->the_post(); ?>

                    <div class="position-relative image-hover">
                                        <img src="<?php
                      if ( has_post_thumbnail() ) { 
                      the_post_thumbnail( 'medium' );
                      }
                      ?>" />
                        <span class="thumb-title">HEALTH</span>
                    </div>  
                  
                  <h5 class="font-weight-bold mt-3">
                    <?php the_title( ); ?>
                  </h5>
                  <p class="fs-15 font-weight-normal">
                  <?php echo wp_trim_words( get_the_content(), 12 ); ?>

                  </p>
                  <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>
                
                <?php } ?>

            </div>
              
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">

              <?php 

              $worldPosts = new WP_Query(array(

                'posts_per_page' => 1,
                'category_name' => 'Wellness'

              ));

              while ($worldPosts->have_posts()) {
                $worldPosts->the_post(); ?>

              <div class="position-relative image-hover">
                <img src="<?php
              if ( has_post_thumbnail() ) { 
              the_post_thumbnail( 'medium' );
              }
              ?>" />
                <span class="thumb-title">WELLNESS</span>
              </div>  

              <h5 class="font-weight-bold mt-3">
                <?php the_title( ); ?>
              </h5>
              <p class="fs-15 font-weight-normal">
              <?php echo wp_trim_words( get_the_content(), 12 ); ?>

              </p>
              <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                >Read Article</a>

              <?php } ?>

            </div>
              
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">

              <?php 

              $worldPosts = new WP_Query(array(

                'posts_per_page' => 1,
                'category_name' => 'Friendship'

              ));

              while ($worldPosts->have_posts()) {
                $worldPosts->the_post(); ?>

              <div class="position-relative image-hover">
                <img src="<?php
              if ( has_post_thumbnail() ) { 
              the_post_thumbnail( 'medium' );
              }
              ?>" />
                <span class="thumb-title">FRIENDSHIP</span>
              </div>  

              <h5 class="font-weight-bold mt-3">
                <?php the_title( ); ?>
              </h5>
              <p class="fs-15 font-weight-normal">
              <?php echo wp_trim_words( get_the_content(), 12 ); ?>

              </p>
              <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                >Read Article</a>

              <?php } ?>

            </div>
              
          <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">

                <?php 

                $worldPosts = new WP_Query(array(

                  'posts_per_page' => 1,
                  'category_name' => 'Film'

                ));

                while ($worldPosts->have_posts()) {
                  $worldPosts->the_post(); ?>

                <div class="position-relative image-hover">
                  <img src="<?php
                if ( has_post_thumbnail() ) { 
                the_post_thumbnail( 'medium' );
                }
                ?>" />
                  <span class="thumb-title">FILM</span>
                </div>  

                <h5 class="font-weight-bold mt-3">
                  <?php the_title( ); ?>
                </h5>
                <p class="fs-15 font-weight-normal">
                <?php echo wp_trim_words( get_the_content(), 12 ); ?>

                </p>
                <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                  >Read Article</a>

                <?php } ?>

            </div>
          </div>
        </div>
          
          
          <div class="editors-news">
            
          <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Popular News</h3>
                </div>
              </div>
            </div>
            
            <div class="row">
              
              <div class="col-lg-6  mb-5 mb-sm-2">

                <?php 

                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 1,
                    'category_name' => 'News'

                  ));

                  while ($worldPosts->have_posts()) {
                  $worldPosts->the_post(); ?>
                  <div class="position-relative image-hover">
                  <img src="<?php
                  if(has_post_thumbnail()) 
                  the_post_thumbnail( 'large' ); 
                  ?> " />
                    <span class="thumb-title">NEWS</span>
                  </div>
                  <h1 class="font-weight-600 mt-3">
                    <?php the_title( ); ?>
                  </h1>
                  <p class="fs-15 font-weight-normal">
                    <?php echo wp_trim_words( get_the_content(), 10 ) ?>
                  </p>
                  <p>
                  <a href="<?php the_permalink( ); ?>">Continue Reading</a>
                  </p>
              </div>
              
              <?php } ?>
                            
              <div class="col-lg-6  mb-5 mb-sm-2">
                
                <div class="row">
                    <?php
                    
                    $polPosts = new WP_Query(array(
                      'posts_per_page' => 2,
                      'category_name' => 'Politics'
                    ));

                    while ($polPosts->have_posts()) {
                      $polPosts->the_post(); ?>

                  
                  <div class="col-sm-6  mb-5 mb-sm-2">

                    <div class="position-relative image-hover">
                      <img class="img-fluid" alt="world-news"
                        src="<?php if(has_post_thumbnail()) { 
                          the_post_thumbnail( 'medium' );
                         } ?>"
                        
                      />
                      <span class="thumb-title">POLITICS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <?php the_title( ); ?>
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      <?php echo wp_trim_words( get_the_content(), 5 ) ?>
                    </p>
                    <p>
                      <a href="<?php the_permalink( ); ?>">অ‍ারও পড়ুন</a>
                    </p>

                    </div>
                  
                  <!-- // Picked up a chunk of code -->                 
                
                

                    <?php }
                    
                    ?>
                </div>    
                   

                  
                
                
                <div class="row mt-3">
                  
                  
                    
                  <?php
                    
                    $polPosts = new WP_Query(array(
                      'posts_per_page' => 2,
                      'category_name' => 'Travel'
                    ));

                    while ($polPosts->have_posts()) {
                      $polPosts->the_post(); ?>
                    <div class="col-sm-6  mb-5 mb-sm-2">

                    <div class="position-relative image-hover">
                      <img class="img-fluid" alt="world-news"
                        src="<?php if(has_post_thumbnail()) { 
                          the_post_thumbnail( 'medium' );
                         } ?>"
                        
                      />
                      <span class="thumb-title">TRAVEL</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <?php the_title( ); ?>
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      <?php echo wp_trim_words( get_the_content(), 5 ) ?>
                    </p>
                    <p>
                      <a href="<?php the_permalink( ); ?>">অ‍ারও পড়ুন</a>
                    </p>
                    </div>
                    <?php }
                    
                    ?>

                </div>
              </div>
            
            
            </div>
          
          </div>
          
          
          
          
          <div class="popular-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Editor choice</h3>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-lg-9">
                <div class="row">

                <?php

                $lifePosts = new WP_Query(array(
                  'posts_per_page' => 3,
                  'category_name' => 'Lifestyle'
                ));

                while ($lifePosts->have_posts()) {
                  $lifePosts->the_post(); ?>

                  <div class="col-sm-4  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img class="img-fluid"
                        alt="world-news"
                        src="
                        <?php if(has_post_thumbnail( )) {
                          the_post_thumbnail( 'medium');
                        } ?>
                        "
                        
                      />
                      <span class="thumb-title">LIFESTYLE</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                    <a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a>
                    </h5>
                  </div>                
                <?php } ?>
                  
                
                  
                  <!-- // removed two chunks of code  -->
                
                
                </div>
                
                
                <div class="row mt-3">

                        <?php
                        
                        $intNews = new WP_Query(array(
                          'posts_per_page' => 3,
                          'category_name' => 'Internet'
                        ));

                        while ($intNews->have_posts()) {
                          $intNews->the_post(); ?>

                        <div class="col-sm-4 mb-5 mb-sm-2">
                          <div class="position-relative image-hover">
                            <img class="img-fluid"
                              alt="world-news"
                              src="<?php if(has_post_thumbnail( )) {
                                the_post_thumbnail( 'medium' );
                              } ?>"
                              
                            />
                            <span class="thumb-title">INTERNET</span>
                          </div>
                          <h5 class="font-weight-600 mt-3">
                            <a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a>
                          </h5>
                        </div>

                       <?php } ?>
                
                </div>
              </div>
              
              
              <div class="col-lg-3">
                <!-- <div class="position-relative mb-3">
                  <img
                    src="<?php //bloginfo( 'template_url' ); ?>/images/dashboard/star-magazine-15.jpg"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <div class="video-thumb text-muted">
                    <span><i class="mdi mdi-menu-right"></i></span>LIVE
                  </div>
                </div> -->
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                      <h3 class="section-title">Latest News</h3>
                    </div>
                  </div>
                  <?php 

                  $newsPosts = new WP_Query(array(
                    'posts_per_page' => 10,
                    'category_name' => 'Others'
                  ));
                  
                  while ($newsPosts->have_posts()) {
                    $newsPosts->the_post(  ); ?>

                  <div class="col-sm-12">
                    <div class="border-bottom pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        <?php the_title( ); ?>
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1"><?php ?><?php echo rand(1, 12); ?> minutes ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1"><?php echo rand(5, 200); ?></span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>

                  <?php } ?>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">World News</h3>
                </div>
              </div>
            </div>

        <div class="row">

              
            

                  <?php 
                  
                  $worldPosts = new WP_Query(array(

                    'posts_per_page' => 4,
                    'post_type' => 'book'

                  ));

                      while ($worldPosts->have_posts()) {
                      $worldPosts->the_post(); ?>
                
                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                                        <img src="<?php
                      if ( has_post_thumbnail() ) { 
                      the_post_thumbnail( 'medium' );
                      }
                      ?>" />
                        <span class="thumb-title">UNIVERSE</span>
                    </div>  
                  
                  <h5 class="font-weight-bold mt-3">
                    <?php the_title( ); ?>
                  </h5>
                  <p class="fs-15 font-weight-normal">
                  <?php echo wp_trim_words( get_the_content(), 12 ); ?>

                  </p>
                  <a href="<?php the_permalink( ); ?>" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>

                </div>  
                
                <?php } ?>

              
              
            

            </div>
          </div>
        </div>
        
      </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        

      <?php get_footer( ); ?>