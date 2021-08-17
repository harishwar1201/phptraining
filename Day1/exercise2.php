<?php
function mask_number($phone_number)
{
    $len = strlen($phone_number);
    $masked_number = substr($phone_number, 0, 2);
    for ($index = 2; $index < $len - 2; $index++) {
        $masked_number = $masked_number . "*";
    }
    $masked_number = $masked_number . substr($phone_number, -2);
    return $masked_number;
}

$input = "9876543210";
$masked_number = mask_number($input);
echo $masked_number;