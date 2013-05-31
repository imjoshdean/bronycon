<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<img src="/themes/bronycon/img/vendor-hall.png" usemap="#vendormap" class="vendors" height="800" width="900" />
<map name="vendormap">
<?php foreach ($rows as $id => $row): ?>
  <?php print $row; ?>
<?php endforeach; ?>
</map>