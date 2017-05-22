<?php

$arrNumbers = json_decode($_GET['numbers']);

/**
 * @param $arrNumbers
 * @return int
 */
function sumNumbers($arrNumbers)
{
    $sum = 0;
    foreach ($arrNumbers as $value) {
        $sum += $value;
    }
    return $sum;
}


/**
 * @param $arrNumbers
 * @return int
 */
function multiplyNumbers($arrNumbers)
{
    $multiply = 1;
    foreach ($arrNumbers as $value) {
        $multiply *= $value;
    }
    return $multiply;
}

//arr sum and multi
$result = array(
    'sum' => sumNumbers($arrNumbers),
    'multi' => multiplyNumbers($arrNumbers)
);

echo json_encode($result);
die;