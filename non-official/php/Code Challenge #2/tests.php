<?php
$test = new Test;
$test->describe("the stringy function", function () {
  global $test;
  $test->it("should return an empty string when \$size is 0", function () {
    global $test;
    $test->assert_equals(stringy(0), '', 'An empty string was not returned for $size = 0');
  });
  $test->it("should return the correct strings for different values of \$size", function () {
    global $test;
    $test->assert_equals(stringy(1), '1', "The string must always start with '1'");
    $test->assert_not_equals(stringy(1), '0', "The first character of the string should not be 0");
    $test->assert_equals(stringy(2), '10', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(3), '101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(4), '1010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(5), '10101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(6), '101010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(7), '1010101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(8), '10101010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(9), '101010101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(10), '1010101010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(11), '10101010101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(12), '101010101010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(13), '1010101010101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(14), '10101010101010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(15), '101010101010101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(16), '1010101010101010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(17), '10101010101010101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(18), '101010101010101010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(19), '1010101010101010101', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(20), '10101010101010101010', "1's and 0's should alternate in the string");
    $test->assert_equals(stringy(100), '1010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010');
  });
});
?>
