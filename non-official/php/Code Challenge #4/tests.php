<?php
$test = new Test;
$test->describe("is_square", function () {
  global $test;
  $test->it("should return false for all negative numbers as negative numbers cannot be square numbers", function () {
    global $test;
    $test->assert_equals(is_square(-1), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-4), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-9), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-16), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-25), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-36), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-49), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-64), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-81), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-100), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-14), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-27), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-33), false, "Negative numbers cannot be square numbers");
    $test->assert_equals(is_square(-6), false, "Negative numbers cannot be square numbers");
  });
  $test->it("should work properly for positive numbers", function () {
    global $test;
    $test->assert_equals(is_square(1), true);
    $test->assert_equals(is_square(2), false);
    $test->assert_equals(is_square(3), false);
    $test->assert_equals(is_square(4), true);
    $test->assert_equals(is_square(5), false);
    $test->assert_equals(is_square(6), false);
    $test->assert_equals(is_square(7), false);
    $test->assert_equals(is_square(8), false);
    $test->assert_equals(is_square(9), true);
    $test->assert_equals(is_square(10), false);
    $test->assert_equals(is_square(11), false);
    $test->assert_equals(is_square(12), false);
    $test->assert_equals(is_square(13), false);
    $test->assert_equals(is_square(14), false);
    $test->assert_equals(is_square(15), false);
    $test->assert_equals(is_square(16), true);
    $test->assert_equals(is_square(17), false);
    $test->assert_equals(is_square(18), false);
    $test->assert_equals(is_square(19), false);
    $test->assert_equals(is_square(20), false);
    $test->assert_equals(is_square(21), false);
    $test->assert_equals(is_square(22), false);
    $test->assert_equals(is_square(23), false);
    $test->assert_equals(is_square(24), false);
    $test->assert_equals(is_square(25), true);
    $test->assert_equals(is_square(26), false);
    $test->assert_equals(is_square(27), false);
    $test->assert_equals(is_square(28), false);
    $test->assert_equals(is_square(29), false);
    $test->assert_equals(is_square(30), false);
    $test->assert_equals(is_square(31), false);
    $test->assert_equals(is_square(32), false);
    $test->assert_equals(is_square(33), false);
    $test->assert_equals(is_square(34), false);
    $test->assert_equals(is_square(35), false);
    $test->assert_equals(is_square(36), true);
    $test->assert_equals(is_square(37), false);
    $test->assert_equals(is_square(38), false);
    $test->assert_equals(is_square(39), false);
    $test->assert_equals(is_square(40), false);
    $test->assert_equals(is_square(41), false);
    $test->assert_equals(is_square(42), false);
    $test->assert_equals(is_square(43), false);
    $test->assert_equals(is_square(44), false);
    $test->assert_equals(is_square(45), false);
    $test->assert_equals(is_square(46), false);
    $test->assert_equals(is_square(47), false);
    $test->assert_equals(is_square(48), false);
    $test->assert_equals(is_square(49), true);
    $test->assert_equals(is_square(50), false);
    $test->assert_equals(is_square(51), false);
    $test->assert_equals(is_square(52), false);
    $test->assert_equals(is_square(53), false);
    $test->assert_equals(is_square(54), false);
    $test->assert_equals(is_square(55), false);
    $test->assert_equals(is_square(56), false);
    $test->assert_equals(is_square(57), false);
    $test->assert_equals(is_square(58), false);
    $test->assert_equals(is_square(59), false);
    $test->assert_equals(is_square(60), false);
    $test->assert_equals(is_square(61), false);
    $test->assert_equals(is_square(62), false);
    $test->assert_equals(is_square(63), false);
    $test->assert_equals(is_square(64), true);
    $test->assert_equals(is_square(65), false);
    $test->assert_equals(is_square(66), false);
    $test->assert_equals(is_square(67), false);
    $test->assert_equals(is_square(68), false);
    $test->assert_equals(is_square(69), false);
    $test->assert_equals(is_square(70), false);
    $test->assert_equals(is_square(71), false);
    $test->assert_equals(is_square(72), false);
    $test->assert_equals(is_square(73), false);
    $test->assert_equals(is_square(74), false);
    $test->assert_equals(is_square(75), false);
    $test->assert_equals(is_square(76), false);
    $test->assert_equals(is_square(77), false);
    $test->assert_equals(is_square(78), false);
    $test->assert_equals(is_square(79), false);
    $test->assert_equals(is_square(80), false);
    $test->assert_equals(is_square(81), true);
    $test->assert_equals(is_square(82), false);
    $test->assert_equals(is_square(83), false);
    $test->assert_equals(is_square(84), false);
    $test->assert_equals(is_square(85), false);
    $test->assert_equals(is_square(86), false);
    $test->assert_equals(is_square(87), false);
    $test->assert_equals(is_square(88), false);
    $test->assert_equals(is_square(89), false);
    $test->assert_equals(is_square(90), false);
    $test->assert_equals(is_square(91), false);
    $test->assert_equals(is_square(92), false);
    $test->assert_equals(is_square(93), false);
    $test->assert_equals(is_square(94), false);
    $test->assert_equals(is_square(95), false);
    $test->assert_equals(is_square(96), false);
    $test->assert_equals(is_square(97), false);
    $test->assert_equals(is_square(98), false);
    $test->assert_equals(is_square(99), false);
    $test->assert_equals(is_square(100), true);
  });
});
?>
