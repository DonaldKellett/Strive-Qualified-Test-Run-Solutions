<?php
function is_square($n) {
  if (is_nan($r = sqrt($n))) return false;
  while ($r > 0) $r--;
  return $r === 0.0;
}
?>
