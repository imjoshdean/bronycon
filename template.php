<?php

/**
 * Override or insert variables into the html template.
 */
function bronycon_preprocess_html(&$vars) {
  global $theme_path;
  // Add conditional CSS for IE7 and below.
  //drupal_add_css($theme_path . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  $vars['head_title'] = implode(' | ', array(drupal_get_title(), variable_get('site_name')));  
}

function bronycon_preprocess_image(&$variables) {
  foreach (array('width', 'height') as $key) {
    unset($variables[$key]);
  }
}

function bronycon_menu_tree($variables) {
  return '<ul class="container_16 navigation">' . $variables['tree'] . '</ul>';
}

function bronycon_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  $first = false;
  $last = false;


  if($element['#attributes']['class'][0] == 'first') {
    $first = true;
  }


  if($element['#attributes']['class'][0] == 'last') {
    $last = true;
  }

  $element['#attributes']['class'] = array();

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  if($element['#original_link']['plid'] == 0) {
    $element['#attributes']['class'] = array('grid_2' , ($first ? '' : ''), ($last ? '' : ''), $element['#below'] ? 'children' : '');
    $sub_menu = str_replace('container_16 navigation', 'sub-navigation', $sub_menu);
    $sub_menu = str_replace('grid_2', '', $sub_menu);
    $sub_menu = str_replace('prefix_1', '', $sub_menu);
    $sub_menu = str_replace('suffix_1', '', $sub_menu);
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

?>