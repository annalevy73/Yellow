<?php define( 'WP_USE_THEMES', false );
      get_header(); ?>

<!--The Loop-->
<?php ( have_posts() ) : ( have_posts() ) : the_post(); ?>

  <section>
    <h3>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?> Titre du swag </h3>
      </a>
  </section>

  <p>
    <?php the_excerpt(); ?>
    <img src="screenshot.png" alt="Photo poney" title="Photo de poney"/>
  </p>

<?php endwhile; endif; ?>

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
