<?php
// https://www.codewars.com/kata/find-the-unique-number-1

function find_uniq(array $a) {
    $count = array_count_values(array_map('strval', $a));
    foreach($count as $key => $val) {
        if($val == 1) return $key;
    }
}