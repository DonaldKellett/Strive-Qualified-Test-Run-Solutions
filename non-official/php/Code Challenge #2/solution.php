<?php
function stringy($size) {
  $string = "";
  for ($i = 0; $i < $size; $i++) {
    $string .= $i % 2 ? 0 : 1;
  }
  return $string;
}
?>
