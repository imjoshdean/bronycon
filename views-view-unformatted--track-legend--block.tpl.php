<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<h2>Track Legend</h2>
<p>This could really use a good pony pun about colors, best pony, or some such.</p>
<?php foreach ($rows as $id => $row): ?>
  <?php print $row; ?>
<?php endforeach; ?>
</ul>