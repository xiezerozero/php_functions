<?php

/**
 * strpos 查找字符串首次出现的位置(未找到返回false)
 * 位置0于false的比较
 * mixed strpos(string $haystack, string $needle, int $offset = 0)
 * stripos 忽略大小写版本
 * 相关 strrpos  strripos
 */

function commonUse()
{
    $newstring = 'abcdef abcdef';
    $pos = strpos($newstring, 'a', 1); // $pos = 7, 不是 0
    echo $pos;
}
commonUse();








