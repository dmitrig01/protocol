<?php

function protocol_format_users($field) {
  $names = array();
  foreach ($field as $row) {
    $names[] = $row['view'];
  }
  switch (count($names)) {
    case 0:
      return '';
    case 1:
      return reset($names);
    case 2:
      return reset($names) . ' and ' . end($names);
    default:
      $last = array_pop($names);
      return implode(', ', $names) . ', and ' . $last;
  }
}

function protocol_button($element) {
  // Make sure not to overwrite classes.
  if (isset($element['#attributes']['class'])) {
    $element['#attributes']['class'] = 'form-' . $element['#button_type'] . ' ' . $element['#attributes']['class'];
  }
  else {
    $element['#attributes']['class'] = 'form-' . $element['#button_type'];
  }

  return '<div class="button-wrapper-outer"><div class="button-wrapper"><input type="submit" ' . (empty($element['#name']) ? '' : 'name="' . $element['#name'] . '" ') . 'id="' . $element['#id'] . '" value="' . check_plain($element['#value']) . '" ' . drupal_attributes($element['#attributes']) . " /></div></div>\n";
}