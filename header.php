<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"/>

    <?php bloginfo('name');?>
    <?php bloginfo('description');?>
    <?php wp_head(); ?>
  </head>

  <body>

    <header>
      <h1>BIENVENU SUR MON SITE</h1>

      <nav>
        <?php wp_page_menu('show_home = 1'); ?>
      </nav>
    </header>

  </body>
</html>
