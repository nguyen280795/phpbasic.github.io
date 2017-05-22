<?php
/**
 * Created by PhpStorm.
 * User: nguye
 * Date: 28/04/2017
 * Time: 4:30 PM
 */

//Bài 1: Single quote và double quotes.
echo "Money $__$ money";
echo "</br>";
echo 'Money $__$ money';

//Bài 2: Tìm kiếm trong string.
echo "</br>";
/*
 * Find sub string
 *
 * @param
 *
 * @throws
 *
 * @return string Returns sub string.
 */
function findSubStr($str, $sub)
{
    if (strpos($str, $sub)) {
        echo "true";
    } else {
        echo "false";
    }
}

$str = "Hello world";
$sub = "world";

findSubStr($str, $sub);

//Bài 3: Multiple bytes string.
echo "</br>";

function testString($string)
{
    if (mb_strlen($string) != strlen($string)) {
        return true;
    } else {
        return false;
    }
}

$string = "Chào bạn!";
try {
    if (testString($string)) {
        echo "true";
    } else {
        echo "false";
        throw new Exception("Invalid parameter");
    }
} catch (LogicException $e) {
    echo 'Message: ' . $e->getMessage();
}

//Bài 4: TRIM
echo "</br>";

$trim = 'trim';

echo trim($trim, "m");//xóa đầu và cuối
echo "</br>";
echo ltrim($trim, "t");//xóa đầu
echo "</br>";
echo rtrim($trim, "m");//xóa cuối
echo "</br>";
