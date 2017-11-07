
<?php
  /* Titre WP */
  function theme_support(){

    add_theme_support('title-tag');
  }

  add_action('after_setup_theme','theme_support');

  /*Ajout CCS et JS*/
  function scripts(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('style',get_template_directory_uri().'style.css');
  }

  add_action('up_enqueue_script','scripts');
?>
