<?php
/**
 * 对数组中的值求和
 */

function sumNumbers()
{
    $a = range(1, 10, 1.5);
    var_dump(array_sum($a));
}
//sumNumbers();

function sumMixed()
{
    $a = [
        1, 2, true, 'stasd', [123]
    ];
    var_dump(array_sum($a));
}
//sumMixed();

function checkAllStringInArray()
{
    $arr1 = array('one', 'two', 'three');
    $arr2 = array('foo', 'bar', array());
    $arr3 = array('foo', array(), 'bar');
    $arr4 = array(array(), 'foo', 'bar');
    //array_map的回调函数处理后每一项都返回bool类型, true =1 false=0
    // array_sum对array_map处理后的求值结果是true的个数
    $callable = function ($array) {
        return array_sum(array_map('is_string', $array)) == count($array);
    };

    var_dump($callable($arr1));
    var_dump($callable($arr2));
    var_dump($callable($arr3));
    var_dump($callable($arr4));
}

checkAllStringInArray();