<html>
  <head>
      <link rel="stylesheet" href="style.css"/>

      <?php bloginfo('name');?>
      <?php bloginfo('description');?>
      <?php wp_head(); ?>
  </head>

  <header>

    <h1>BIENVENU SUR MON SITE</h1>

    <nav>
      <?php up_page_menu('show_home = 1'); ?>
    </nav>

  </header>

</html>
