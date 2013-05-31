<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?><!doctype html>
<html>

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
  <script>
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('footer');
  </script>
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div class="container_16">
    <header>
      <a href="/" class="logo"></a>
    </header>
    <div class="container_16 content">
      <section class="grid_11">
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php if (!empty($messages)): print $messages; endif; ?>
        <div id="content-content" class="clearfix">
          <?php print $content; ?>
        </div> <!-- /content-content -->
      </section>
      <section class="grid_4 prefix_05 suffix_05 sidebar">
        <?php include 'register.php' ?>
        <?php include 'connect.php' ?>
      </section>
    </div>
    <footer class="container_16">
      <div class="clearfix"></div>
      <small>&copy;<?php print date('Y');?> BronyCon. My Little Pony: Friendship is Magic and related media belong exclusively to Hasbro, Inc. and Studio B/DHX Media Ltd.</small>
    </footer>
  </div>

</body>
</html>
