<?php
$people = array(
  2 => array(
    'name' => 'John',
    'fav_color' => 'green'
  ),
  5=> array(
    'name' => 'Samuel',
    'fav_color' => 'blue'
  )
);

$colors = array_column($people, 'fav_color');
$found_key = array_search('blue', $colors);
?>