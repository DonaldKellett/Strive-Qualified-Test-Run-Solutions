<?php
list($gcd, $lcm) = array(function ($a, $b) {global $gcd; return $b === 0 ? $a : $gcd($b, $a % $b);}, function ($a, $b) {global $gcd; return $a * $b / $gcd($a, $b);});
function convert_frac($fs) {
  global $lcm;
  $ds = array_map(function ($f) {return $f[1];}, $fs);
  $cd = array_reduce($ds, $lcm, 1);
  return implode(array_map(function ($f, $cd) {return "(" . $f[0] * $cd / $f[1] . "," . $cd . ")";}, $fs, array_fill(0, count($fs), $cd)));
}
?>
