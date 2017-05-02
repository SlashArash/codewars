<?php
// https://www.codewars.com/kata/find-the-missing-letter

function find_missing_letter(array $array): string {
    $letter = range(reset($array),end($array));
    return current(array_diff($letter, $array));
}
