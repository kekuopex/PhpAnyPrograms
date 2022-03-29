<?php

function reverse(int $num) : int
{
    $str = "";
    
    if ($num > 0) {
        $str = (string) $num;
        $str = strrev($str);

        $num = (int) $str;
        return $num;
    } else {
        $str = (string) $num;
        $str = substr($str,1);
        $str = strrev($str);
        print_r($str . "\n");
        $str = "-" . $str;

        $num = (int) $str;
        return $num; 
    }
}

function reverseGood(int $num) : int
{
    $resalt = (int) strrev((string) abs($num));
    return $num > 0 ? $resalt : -$resalt;
}

