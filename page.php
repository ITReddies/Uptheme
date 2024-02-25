<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <?php get_header(); ?>
</head>

<body>
  <div class="off-screen-menu">
    <?php
    wp_nav_menu(
     array( 
      'menu' => 'primary',
      'container' => '',
      'theme_location' => 'primary',
      'items_wrap' => '<ul class"">%3$s</ul>'
     )
    );
    ?>
  </div>

  <nav>
    <div class="ham-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  <p>DEFAULT TEMPLATE PAGE</p>

</body>
<?php wp_footer(); ?>

</html>