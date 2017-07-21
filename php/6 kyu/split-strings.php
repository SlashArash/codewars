<?php
// https://www.codewars.com/kata/split-strings

function solution(string $str): array {
    if(strlen($str) & 1)
        $str .= '_';
    return str_split($str, 2);
}
