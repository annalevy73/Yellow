<!--AFFICHE LES ACTUALITÉS-->
<?php
  /* Template Name: Actualités */

  $args = array(
        'port_type' => 'post',
  );

  $query= new WP_Query($args);

  get_header();
?>

  <!--The Loop-->
<?php if ( $query ->have_posts() ) : while ( $query ->have_posts() ) : $query ->the_post(); ?>

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

  <!--AFFICHE LE FOOTER-->
  <?php   get_footer(); ?>
