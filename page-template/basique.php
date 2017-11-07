<?php
/* Template Name : Page de base */

  get_header();
?>

<h1><?php the_title(); ?></h1>

<?php
while (have_posts()): the_post();
  ?>

  <div class="">
    <?php the_content(); ?>
  </div>

<?php endwhile;
      wp_reset_query();
      get_footer();
 ?>
