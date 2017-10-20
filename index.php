<?php define( 'WP_USE_THEMES', false );
      get_header(); ?>

<!--The Loop-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section> <h3> <?php the_title(); ?> Titre du swag </h3> </section>
<p> <?php the_content(); ?>
  <img src="screenshot.png" alt="Photo poney" title="Photo de poney"/>
</p>

<?php endwhile; endif; ?>

  <?php   get_footer();
  /**include ('footer.php');*/
   ?>
