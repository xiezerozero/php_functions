<?php

/**
 * 对数组在指定位置移除指定个数单元, 并插入指定数据
 * 插入的数据在数组中全是数字键值,如果数组中没有数字键值, 则从0开始,否则以当前位置递增
 */

/**
 * 插入数据
 */
function insertArray()
{
    $a = range(1, 10);

    $replacement = ['a', 'b', 'c'];
    array_splice($a, 3, 0, $replacement);
    var_dump($a);

}
//insertArray();

/**
 * 移除数据并插入数据
 */
function removeAndInsert()
{
    $a = range(1, 10);
    $index = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];
    $a = array_combine($index, $a);
    $replacement = ['a', 'b', 'c'];
    // 插入的数据丢失了键值
    $replacement = array_combine($replacement, $replacement);
    array_splice($a, 3, 2, $replacement);
    var_dump($a);
}

removeAndInsert();

function removeAllFromIndexAndReplace()
{
    $a = range(1, 10);

    $replacement = ['a', 'b', 'c'];
    $replacement = array_combine($replacement, $replacement);
    //使用count($a)代表移动键值为3后面的所有值并插入
    //$replacement丢失了自己的键值
    array_splice($a, 3, count($a), $replacement);
    var_dump($a);
}
//removeAllFromIndexAndReplace();