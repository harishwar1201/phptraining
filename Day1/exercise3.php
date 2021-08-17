<?php
function convert($input_array)
{
    $result = array();
    foreach ($input_array as $item) {
        $temp_string = explode("_", $item);
        $converted_string = $temp_string[0];
        for ($index = 1; $index < count($temp_string); $index++) {
            $converted_string = $converted_string . ucfirst($temp_string[$index]);
        }
        array_push($result, $converted_string);
    }
    return $result;
}

$input_array = array("snake_case_example", "camel_case_example");
print_r(convert($input_array));