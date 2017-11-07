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
      <?php wp_page.menu('show_home = 1'); ?>
    </nav>

  </header>

</html>
