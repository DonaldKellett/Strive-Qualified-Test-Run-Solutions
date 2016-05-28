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
    $test->assert_equals(convert_frac(array(array(1, 3), array(2, 3), array(1, 21), array(2, 21), array(3, 7), array(4, 21), array(20, 21), array(5, 7))), "(7,21)(14,21)(1,21)(2,21)(9,21)(4,21)(20,21)(15,21)");
    $test->assert_equals(convert_frac(array(array(1, 2), array(3, 4), array(5, 8), array(5, 6), array(7, 12), array(9, 24))), "(12,24)(18,24)(15,24)(20,24)(14,24)(9,24)");
    $test->assert_equals(convert_frac(array(array(1, 2), array(1, 4), array(3, 8), array(5, 12), array(5, 6))), "(12,24)(6,24)(9,24)(10,24)(20,24)");
    $test->assert_equals(convert_frac(array(array(1, 2), array(3, 4), array(1, 6), array(3, 8), array(7, 10), array(1, 12))), "(60,120)(90,120)(20,120)(45,120)(84,120)(10,120)");
    $test->assert_equals(convert_frac(array(array(1, 2), array(3, 4), array(5, 6), array(7, 8), array(9, 10), array(11, 12), array(13, 14), array(1, 14), array(3, 14))), "(420,840)(630,840)(700,840)(735,840)(756,840)(770,840)(780,840)(60,840)(180,840)");
  });
});
?>
