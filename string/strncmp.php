<?php

/**
 * 比较两个字符串
 * int strncmp(string $str1, string $str2, int $length)
 * strcmp  strcasecmp
 */


function startWith($haystack, $needle)
{
    //比较前strlen($needle)个字符串是否相同
    $r = strncmp($haystack, $needle, strlen($needle));
    if ($r == 0) {
        return true;
    } else {
        return false;
    }
}

//var_dump(startWith('helloworld', 'hello'));
//var_dump(startWith('helloworld', 'asj'));

function endWith($haystack, $needle)
{
    $end = substr($haystack, -strlen($needle));
    if (strcmp($end, $needle) == 0) {
        return true;
    }
    return false;
}

var_dump(endWith('akjsdhjakjs', 'akjs'));
var_dump(endWith('akjsdhjakjs', 'kajs'));




