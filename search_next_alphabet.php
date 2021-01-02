<?php
/**
 * rotN($str, $num)
 * Function to find the character (alphabet)
 * shifted n characters from the specified character.
 *
 * @param string $str Start position of the shift (any alphabet)
 * @param int $num Number of characters to shift the alphabet by
 * @return string
 */
function rotN(string $str, int $num) {
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
