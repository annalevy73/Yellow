<?php
  get.header();
  ?>

<!--The Loop-->
<? php if(have_posts()):while(have_posts()):
  the_post(); ?>

<section> <h3> <?php the_title(); ?> Titre du swag </h3> </section>
<p> <?php the_content(); ?>
  <img src="screenshot.png" alt="Photo poney" title="Photo de poney"/>
</p>

  <?php   get.footer();
  /**include ('footer.php');*/
   ?>
