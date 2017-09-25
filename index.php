<?php
  get.header();
  ?>

<!--The Loop-->
<? php if(have_posts()):while(have_posts()):
  the_post(); ?>

<section> <h3> <?php the_title(); ?> Titre du swag </h3> </section>
<p> <?php the_content(); ?> </p>

  <?php   get.footer();
  /**include ('footer.php');*/
   ?>
