<?php
$test = new Test;
$test->describe("get_middle", function () {
  global $test;
  $test->it("should return the middle character of the string for strings of odd length", function () {
    global $test;
    $test->assert_equals(get_middle("S"), "S");
    $test->assert_equals(get_middle("cat"), "a");
    $test->assert_equals(get_middle("bacon"), "c");
    $test->assert_equals(get_middle("amazing"), "z");
    $test->assert_equals(get_middle("explanation"), "n");
    $test->assert_equals(get_middle("assert_equals"), "_");
    $test->assert_equals(get_middle("The cow jumped over the moon."), " ");
  });
  $test->it("should return the two middle characters of a string for strings of even length", function () {
    global $test;
    $test->assert_equals(get_middle("AS"), "AS");
    $test->assert_equals(get_middle("test"), "es");
    $test->assert_equals(get_middle("worker"), "rk");
    $test->assert_equals(get_middle("Astonishing!"), "is");
    $test->assert_equals(get_middle("The cow jumped over the moon"), "d ");
    $test->assert_equals(get_middle("Supercalifragilisticexpialidocious"), "st");
  });
});
?>
