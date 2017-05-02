<?php
// https://www.codewars.com/kata/sum-of-the-first-nth-term-of-series

function series_sum(int $n): float {
    $resualt = 0;
    for($i=0 ; $i<$n ; $i++) {
        $resualt += 1/(1+(3*$i));
    }
    return round($resualt, 2);
}
echo series_sum(2);