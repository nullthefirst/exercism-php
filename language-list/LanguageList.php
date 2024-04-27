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
