<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner">
      
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>

          </p>
        </div>
      </div>  
    </div>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
          <p class="blog-post-meta">
          
          Posted by 
    <?php the_author_posts_link(); ?>
    on
    <?php the_time( 'd.m.y' ) ?>
    in
    
        </p>
          <p><a class="metabox__blog-home-link" 
        href="<?php
        echo get_post_type_archive_link('book'); ?>">
        <i class="fa fa-home" aria-hidden="true"></i> পরিবেশ </a> 
        <p>
          <?php if(has_post_thumbnail()) {
            the_post_thumbnail( 'large' );
          } ?>
        </p>
        <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

    </div>
    

    
  <?php }

  get_footer();

?>