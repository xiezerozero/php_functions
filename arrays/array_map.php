<?php
/**
 * 将回调函数作用到给定数组的每一个单元上,
 * 多个数组的话, 回调函数的参数依次是每个数组的一个单元
 */


/**
 * 处理每一项作为返回值的每一项
 */
function commonUse()
{
    $a = range(1, 10);
    $b = array_map(function ($v) {
        return $v * 2;
    }, $a);
    var_dump($b);
}

//commonUse();

/**
 * 多个数组的每一项一起处理
 */
function dealMoreArrays()
{
    $a = range(1, 5);
    $b = ["a", 'b', 'c', 'd', 'e'];
    $c = array_map(function ($v1, $v2) {
        return "the $v1 is $v2";
    }, $a, $b);
    var_dump($c);
}

//dealMoreArrays();

/**
 * 构建一个包含数组的数组
 */
function constructArray()
{
    $a = [1, 2, 3, 4, 5];
    $b = ["a", 'b', 'c', 'd', 'e'];
    $c = ['doc', 'php', 'golang', 'java', 'c++'];

    $d = array_map(null, $a, $b, $c);
    var_dump($d);
}



