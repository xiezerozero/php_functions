<?php

/**
 * 使用自定义回调函数对数组中的每个元素做回调处理
 * bool array_walk(array &$array, callable $func, mixed $userdata = null)
 */


function commonUser()
{
    $a = ['d' => 'banana', 'e' => 'apple', 'f' => 'orange'];

    array_walk($a, function (&$item, $key) {
        $item = $key . ':' . $item;
    });
    var_dump($a);
}
commonUser();
