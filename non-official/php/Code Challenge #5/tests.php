<?php
$test = new Test;
$test->describe("accum", function () {
  global $test;
  $test->it("should work for some (basic) tests", function () {
    global $test;
    $test->assert_equals(accum("abcd"), "A-Bb-Ccc-Dddd");
    $test->assert_equals(accum("RqaEzty"), "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy");
    $test->assert_equals(accum("cwAt"), "C-Ww-Aaa-Tttt");
    $test->assert_equals(accum("ZpglnRxqenU"), "Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu");
	  $test->assert_equals(accum("NyffsGeyylB"), "N-Yy-Fff-Ffff-Sssss-Gggggg-Eeeeeee-Yyyyyyyy-Yyyyyyyyy-Llllllllll-Bbbbbbbbbbb");
	  $test->assert_equals(accum("MjtkuBovqrU"), "M-Jj-Ttt-Kkkk-Uuuuu-Bbbbbb-Ooooooo-Vvvvvvvv-Qqqqqqqqq-Rrrrrrrrrr-Uuuuuuuuuuu");
	  $test->assert_equals(accum("EvidjUnokmM"), "E-Vv-Iii-Dddd-Jjjjj-Uuuuuu-Nnnnnnn-Oooooooo-Kkkkkkkkk-Mmmmmmmmmm-Mmmmmmmmmmm");
	  $test->assert_equals(accum("HbideVbxncC"), "H-Bb-Iii-Dddd-Eeeee-Vvvvvv-Bbbbbbb-Xxxxxxxx-Nnnnnnnnn-Cccccccccc-Ccccccccccc");
  });
});
?>
