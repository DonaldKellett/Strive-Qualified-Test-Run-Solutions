<?php
function get_middle($s) {
  return ($l = count($a = str_split($s))) % 2 ? $a[~~($l / 2)] : $a[$l / 2 - 1] . $a[$l / 2];
}
?>
