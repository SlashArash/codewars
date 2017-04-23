<?php
// https://www.codewars.com/kata/find-the-missing-letter

$a = ['a','b','c','d','f'];


function find_missing_letter(array $array): string {
    $letter = range(reset($array),end($array));
    return current(array_diff($letter, $array));
}
echo find_missing_letter($a);