<div class="container_16">
  <header>
    <a href="#" class="logo"></a>
    <?php
    print drupal_render(menu_tree('main-menu'));
    ?>
  </header>
  <?php if ($page['secondary_header']): ?>
  <section class="secondary-header">
    <?php print render($page['secondary_header']); ?>
  </section>
  <?php endif; ?>
  <div class="container_16 content">
    <section class="grid_11">
      <aside>
        <h1><?php print $title ?></h1>
        <?php
          print $node->field_welcome_body[LANGUAGE_NONE][0]['value']
        ?>
      </aside>
      <section>
        <h1>Latest News &amp; Announcements</h1>
        <?php print render($page['content']); ?>
      </section>
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