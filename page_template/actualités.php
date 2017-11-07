<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Mon site WordPress</title>
  </head>

  <?php
    /* Template: Actualités */
  ?>

  <?php define( 'WP_USE_THEMES', false );
      get_header(); ?>

  <!--The Loop-->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section>
      <h3>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?> Titre du swag </h3>
        </a>
      </section>

      <p> <?php the_content(); ?>
        <img src="screenshot.png" alt="Photo poney" title="Photo de poney"/>
      </p>

  <?php endwhile; endif; ?>

  <p>Publié le : <?php the_date('j F, Y'); ?> à <?php the_time('G:i a'); ?></p>

  <?php   get_footer();
  /**include ('footer.php');*/
   ?>

</html>
