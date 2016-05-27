<?php
$test = new Test;
$test->describe("convert_frac", function () {
  global $test;
  $test->it("should work for some basic tests", function () {
    global $test;
    $test->assert_equals(convert_frac(array(array(1, 2), array(1, 3), array(1, 4))), "(6,12)(4,12)(3,12)");
    $test->assert_equals(convert_frac(array(array(2, 5), array(3, 8), array(5, 6), array(1, 4))), "(48,120)(45,120)(100,120)(30,120)");
    $test->assert_equals(convert_frac(array(array(2, 3), array(1, 3), array(1, 4), array(3, 4), array(7, 10), array(9, 10), array(1, 10))), "(40,60)(20,60)(15,60)(45,60)(42,60)(54,60)(6,60)");
    $test->assert_equals(convert_frac(array(array(1, 2), array(2, 3), array(1, 4), array(4, 5), array(5, 7), array(5, 6))), "(210,420)(280,420)(105,420)(336,420)(300,420)(350,420)");
    $test->assert_equals(convert_frac(array(array(1, 3), array(2, 3), array(1, 21), array(2, 21), array(3, 7), array(4, 21), array(20, 21))), "(7,21)(14,21)(1,21)(2,21)(9,21)(4,21)(20,21)");
  });
});
?>
