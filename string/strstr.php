<?php

/**
 * 查找字符串首次出现,返回出现的字符串,未找到返回false
 * strstr 与 strchr 相同, 不同别名而已
 * string strstr(string $haystack, mixed $needle, bool $before_needle = false)
 * stristr      忽略大小写的版本
 */

/**
 * 字符串中寻找子字符串 注意是否找到的判断条件
 */
function commonUse()
{
    $callable = function ($v) {
        if (false !== strstr($v, '0')) {
            echo 'find zero' . PHP_EOL;
        } else {
            echo 'don\'t find zero' . PHP_EOL;
        }
    };
    $callable('1230');  //strstr('1230', '0')返回'0'   '0' == false;
    $callable('209123');
    $callable('219873');
}

commonUse();




