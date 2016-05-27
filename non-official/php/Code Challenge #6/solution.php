<?php
function convert_frac($fs) {
  $ds = array_map(function ($f) {return $f[1];}, $fs);
  $lcm = array_reduce($ds, function ($a, $b) {return lcm($a, $b);}, 1);
  return implode(array_map(function ($f, $lcm) {return "(".$f[0]*$lcm/$f[1].",".$lcm.")";}, $fs,array_fill(0, count($fs), $lcm)));
}
function gcd($a, $b) {
  return $b === 0 ? $a : gcd($b, $a % $b);
}
function lcm($a, $b) {
  return $a * $b / gcd($a, $b);
}
?>
