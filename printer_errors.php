<?php
function printerError(string $s): string {
    $var = array_filter(str_split($s), function($char){
      return in_array($char, range('n','z'));
    });
    return count($var).'/'.strlen($s);
}