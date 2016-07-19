<?php

/**
 * 使用回调函数迭代处理数组的每一项,返回单一的值
 */


/**
 * 循环处理数组每一项 经过$callback函数处理返回这一次处理的值
 * 并作为下一次的$result值继续处理
 */
function commonUse()
{
    $callback = function ($result, $item) {
        $result += $item;
        return $result;
    };
    $a = range(1, 10);
    $r = array_reduce($a, $callback);
    var_dump($r);
}
//commonUse();

/**
 * 带初始值的循环处理数组, 数组为空,则直接返回初始值
 */
function reduceWithInitial()
{
    $callback = function ($result, $item) {
        $result *= $item;
        return $result;
    };

    $a = range(1, 10);
    $r = array_reduce($a, $callback, 10);
    var_dump($r);
}
reduceWithInitial();



