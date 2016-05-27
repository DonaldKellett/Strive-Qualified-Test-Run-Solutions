<?php
function accum($s) {
  return implode("-", array_map(function ($l, $i) {
    $result = strtoupper($l);
    for ($j = 0; $j < $i; $j++) {
      $result .= $l;
    }
    return $result;
  }, ($a = str_split(strtolower($s))), array_keys($a)));
}
?>
