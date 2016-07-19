<?php

/**
 * substr
 * substr_compare
 * substr_count
 * substr_replace
 */

function endWith($haystack, $needle)
{
    if ($needle === '') {
        return false;
    }
    if (substr_compare($haystack, $needle, -strlen($needle)) == 0) {
        return true;
    }
    return false;
}

function startWith($haystack, $needle)
{
    if (substr_compare($haystack, $needle, 0, strlen($needle)) == 0) {
        return true;
    }
    return false;
}

var_dump(endWith('hshwjwlk', 'jwlk'));
var_dump(endWith('juwhqasl', 'als'));

echo '--------------';

var_dump(startWith('hjsqn', 'hsa'));
var_dump(startWith('kjwuqka', 'kjw'));