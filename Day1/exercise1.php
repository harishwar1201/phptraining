<?php
function array_flatten($input_array)
{
    $flatten_array = array();
    foreach ($input_array as $key => $value) {
        if (is_array($value)) {
            $flatten_array = array_merge($flatten_array, array_flatten($value));
        } else {
            $flatten_array[count($flatten_array)] = $value;
        }
    }
    return $flatten_array;
}

$example = [1, 2, [3, 4, 5, [6, 7, 8]], 9, 10];
print_r(array_flatten($example));