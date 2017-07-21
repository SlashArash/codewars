<?php
// https://www.codewars.com/kata/count-the-smiley-faces

function count_smileys($arr): int {
    return count(preg_filter("/[:;][-~]?[\)|D]/", 1, $arr));
}
