<?php

function language_list(...$langs)
{
    $arr = [];

    foreach($langs as $lang) {
        $arr[] = $lang;
    }

    return $arr;
}

function add_to_language_list($arr, $lang)
{
    $list = $arr;
    array_push($list, $lang);
    return $list;
}

function prune_language_list($arr)
{
    $list = $arr;
    array_shift($list);
    return $list;
}

function current_language($arr)
{
    return $arr[0];
}

function language_list_length($arr) {
    return count($arr);
}
