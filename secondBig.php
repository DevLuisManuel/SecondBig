<?php

$response = "Resultado de la prueba";
$length = strlen($response) + 12;
print_r(str_repeat("*", $length) . "\n");
print_r("*     $response     *\n");
print_r(str_repeat("*", $length) . "\n");

print_r('Array: ' . json_encode([10, 40, 30, 20, 50], true) . ' => ' . secondBig([10, 40, 30, 20, 50]) . "\n"); //➞ 40
print_r('Array: ' . json_encode([25, 143, 89, 13, 105], true) . ' => ' . secondBig([25, 143, 89, 13, 105]) . "\n"); //➞ 105
print_r('Array: ' . json_encode([54, 23, 11, 17, 10, 21], true) . ' => ' . secondBig([54, 23, 11, 17, 10, 21]) . "\n"); //➞ 23
print_r('Array: ' . json_encode([84, 94, 23, 17, 10, 125], true) . ' => ' . secondBig([84, 94, 23, 17, 10, 125]) . "\n"); //➞ 94

function secondBig(array $array)
{
    $first = 0;
    $second = 0;
    foreach ($array as $value) {
        if ($value > $first) {
            $second = $first;
            $first = $value;
        } elseif ($value > $second) {
            $second = $value;
        }
    }
    return $second;
}
