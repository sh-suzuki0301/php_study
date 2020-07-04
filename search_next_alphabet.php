<?php
// 与えられたから文字列からn文字ずらしたの文字列(アルファベット)を調べる関数
function str_rotN($str, $num) {
    if (!is_numeric($num)) {
        return $str;
    }
 
    $abc = "abcdefghijklmnopqrstuvwxyz";
    $len = strlen($abc);
 
    $num = $num % $len;
    if ($num == 0) {
        return $str;
    } elseif ($num < 0) {
        $num = $num + $len;
    }
    $to = substr($abc . $abc, $num, $len);
    $str = strtr($str, $abc, $to);
    $str = strtr($str, strtoupper($abc), strtoupper($to));
    return $str;
}
str_rotN('d', -45431);
