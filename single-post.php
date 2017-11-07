<?php define( 'WP_USE_THEMES', false );
      get_header(); ?>

<!--The Loop-->
<?php the_post(); ?>

  <section>
    <h3>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?> Titre du swag </h3>
      </a>
  </section>

  <?php the_excerpt(); ?>
    <p>
      <img src="screenshot.png" alt="Photo poney" title="Photo de poney"/>
    </p>

  <!--AFFICHE LES COMMENTAIRES-->
  <?php
    if (comments_open() || get_comments_number() ):

      comments_template();

    endif;
    ?>

  <?php comments_number('Aucun commentaire','Un commentaire','% commentaires'); ?>

  <p>Publié le : <?php the_date('j F, Y'); ?> à <?php the_time('G:i a'); ?></p>

  <div>
    <li class="widget"> <?php _e('Meta');?>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout();?></li>
        <?php wp_meta();?>
      </ul>
    </li>

    <li class="widget">
      <a href="<?php bloginfo('home');?>">
               <?php _e('Home','');?>
      </a>
    </li>
  </div>

  <?php   get_footer();
  /**include ('footer.php');*/
   ?>
