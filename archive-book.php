<?php

get_header(); ?>
<main class="container">

<!-- <div class="page-banner"> -->
  
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">পরিবেশ নিয়ে অ‍ারও খবর</h1>
    <div class="page-banner__intro">
      
    </div>
  </div>  
</div>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="event-summary">
      <a class="event-summary__date t-center" href="#">
        <span class="event-summary__month"><?php the_time( 'm' ) ?></span>
              <span class="event-summary__day"><?php the_time( 'y' ) ?></span>
      </a>
      <div class="event-summary__content">
      <h1 class="font-weight-600 mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php echo wp_trim_words( get_the_content(), 7 ) ?> 
        <p>
        <a href="<?php the_permalink(); ?>" class="nu gray">
        অ‍ারও পড়ুন
      </a></p>

        </p>
      </div>
    </div>
  <?php }
  echo paginate_links();
?>

  

	</div>
</main>

<?php get_footer();

?>