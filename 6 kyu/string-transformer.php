<?php
// https://www.codewars.com/kata/string-transformer

function string_transformer(string $s): string {
  $words = array_reverse(explode(' ', $s));
  $arr = array_map(function($word) {
      return strtolower($word) ^ strtoupper($word) ^ $word;
  }, $words);
  
  return implode(' ', $arr);
}