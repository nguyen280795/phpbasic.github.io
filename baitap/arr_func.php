<?php
/*
 * Find array
 *
 * @param
 *
 * @throws
 *
 * @return string Returns the string of elements.
 */
function findArray($parameter1, $parameter2, $parameter3)
{
    $err = "Invalid parameter";

    if (is_array($parameter1) && is_array($parameter2) && is_array($parameter3)) {
        $err = "";
    } elseif (!is_array($parameter1) && !is_array($parameter2) && !is_array($parameter3)) {

    } else {
        if (!is_array($parameter1)) {
            $err = $err . " 1";
        }
        if (!is_array($parameter2)) {
            $err = $err . " 2";
        }
        if (!is_array($parameter3)) {
            $err = $err . " 3";
        }
    }
    return $err;
}

/*
 * findNumber
 *
 * @param
 *
 * @throws
 *
 * @return bool Returns the bool.
 */
function findNumber($parameter)
{
    $bool = false;
    if (in_array(1, $parameter)) {
        $bool = true;
    }
    return $bool;
}

/*
 * mergeParameter
 *
 * @param
 *
 * @throws
 *
 * @return bool Returns the bool.
 */
function mergeParameter($parameter1, $parameter2)
{
    $arrSum = array_merge($parameter1, $parameter2);
    $arrSum = array_unique($arrSum);
    return $arrSum;
}

/*
 * findNumber
 *
 * @param
 *
 * @throws
 *
 * @return bool Returns the bool.
 */
function findEvenNumber($parameter)
{
    if ($parameter % 2 == 0)
        return $parameter;
}

//create variable
$parameter1 = array(3, 2, 1, 4, 6, 5, 7, 12, 9);
$parameter2 = array(1, 2, 6, 14, 3, 9, 6, 9);
$parameter3 = array(3, 5, 7, 1, 6, 8);
//

//Yêu cầu về khai báo function
echo(findArray($parameter1, $parameter2, $parameter3));

//1. Tìm kiếm số 1 trong array thứ 1. Echo ra "Found" nếu tìm thấy hoặc "Not found" nếu không.
if (findNumber($parameter1)) {
    echo "</br> Found</br>";
} else {
    echo "</br> Not found</br>";
}

//2. Merge 2 array thứ 2 và 3 lại, xóa bỏ trùng lặp, echo kết quả ra màn hình theo format dạng string (*)
$var = mergeParameter($parameter2, $parameter3);
echo implode(", ", $var);

//3. In ra tất cả value của (*) mà tổng các chữ số của nó chia hết cho 2.
echo "</br>";
echo implode(", ", array_filter($var, "findEvenNumber"));

//4. In ra tất cả value (đã sắp xếp tăng dần) của array thứ 1 mà nó tồn tại trong (*)
echo "</br>";
$var1 = array_intersect($parameter1, $var);
sort($var1);
echo implode(", ", $var1);

//5. In ra tất cả value (đã sắp xếp giảm dần) của array thứ 1, mà key của nó không có trong (*)
echo "</br>";
$var2 = array_diff_key($parameter1, $var);
rsort($var2);
echo implode(", ", $var2);