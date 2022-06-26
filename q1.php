<?php

function getPrefix($arr) {
    if (!is_array($arr) or empty($arr)) {
        return '';
    }
    $first = $arr[0];
    $rs = '';
    for ($i = 0; $i < strlen($first); $i++) {
        $t = $first[$i];
        for ($restKeys = 1; $restKeys < count($arr); $restKeys++) {
            if ($arr[$restKeys][$i] !== $t) {
                return $rs;
            }
        }
        $rs .= $t ;
    }
    return $rs;
}


$s = ['apple', 'apache', 'apiece'];
echo getPrefix($s);
$s = ['dog', 'cat', 'bird'];
echo getPrefix($s);
