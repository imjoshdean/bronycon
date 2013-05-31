<div class="container_16">
  <header>
    <a href="/" class="logo"></a>
    <?php
    print drupal_render(menu_tree('main-menu'));
    ?>
  </header>
  <div class="container_16 content">
    <section class="grid_11">
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>
    <section class="grid_4 prefix_05 suffix_05 sidebar">
      <?php include 'register.php' ?>
      <?php include 'partners.php' ?>
      <?php include 'connect.php' ?>
    </section>
  </div>
  <footer class="container_16">
    <div class="grid_6 prefix_1">
    <?php if ($page['footer_left']): ?>
      <?php print render($page['footer_left']); ?>
    <?php endif; ?>
    </div>
    <div class="grid_6 push_2 suffix_1">
    <?php if ($page['footer_right']): ?>
      <?php print render($page['footer_right']); ?>
    <?php endif; ?>
    </div>
    <div class="clearfix"></div>
    <small>&copy;<?php print date('Y');?> BronyCon. My Little Pony: Friendship is Magic and related media belong exclusively to Hasbro, Inc. and Studio B/DHX Media Ltd.</small>
  </footer>
</div>