<?php
// https://www.codewars.com/kata/dashatize-it

function dashatize(int $num): string {
  $num = array_map(function($val) {
      if($val & 1)
        return "-$val-";
      return $val;
  }, str_split(strval(abs($num))));
  return str_replace('--', '-', trim(implode($num), '-'));
}