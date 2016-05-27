<?php
$test = new Test;
$test->describe("Your Submitted Code", function () {
  global $test;
  $test->it('should set $answer to 42', function () {
    global $test, $answer;
    $test->assert_equals($answer, 42, '$answer was not set to 42');
  });
  $test->it('should set $cake to \'yummy\'', function () {
    global $test, $cake;
    $test->assert_equals($cake, 'yummy', '$cake was not set to \'yummy\'');
  });
});
?>
