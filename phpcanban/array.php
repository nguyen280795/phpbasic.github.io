<?php
$mang = array("a" => "red", "b" => "green", "c" => "red");

//count array
echo "Xuất mảng</br>";
foreach ($mang as $value) {
    echo "Phần tử: " . $value . "</br>";
}
foreach ($mang as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} " . "</br>";
}
print_r($mang);

//thêm vào arr

echo "</br>Thêm giá trị vào arr</br>";

echo "</br>Thêm giá trị vào đầu arr bằng hàm</br>";

//thêm bằng hàm
array_unshift($mang, "z");
foreach ($mang as $value) {
    echo "Phần tử: " . $value . "</br>";
}

echo "</br>Thêm giá trị trực tiếp vào arr</br>";

//thêm trực tiếp
$a = array('a' => 'apple', 1 => "one");
foreach ($a as $value) {
    echo "Phần tử: " . $value . "</br>";
}
echo "</br>Thêm giá trị vào cuối</br>";

//thêm bằng hàm
$mang[] = 4;
$mang[] = 4;
$mang[6] = 5;
array_push($mang, 6);
foreach ($mang as $value) {
    echo "Phần tử: " . $value . "</br>";
}

//sắp xếp mảng theo giá trị
echo "</br>sắp xếp mảng theo giá trị</br>";
sort($mang);
foreach ($mang as $key => $value) {
    echo "{$key} => {$value} " . "</br>";
}

//sắp xếp mảng theo key
echo "</br>sắp xếp mảng theo key</br>";
ksort($mang);
foreach ($mang as $key => $value) {
    echo "{$key} => {$value} " . "</br>";
}

//đảo giá trị
echo "</br>đảo giá trị</br>";
$arr = array_reverse($mang);
foreach ($arr as $key => $value) {
    echo "{$key} => {$value} " . "</br>";
}

//duplicated value
echo "</br>duplicated value</br>";
$arr = array_unique($mang);
foreach ($arr as $key => $value) {
    echo "{$key} => {$value} " . "</br>";
}

//implode
echo "</br>implode</br>";
$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(" ", $arr);

//explode
echo "</br></br>explode</br>";
$str = "Hello world. It's a beautiful day.";
print_r(explode(" ", $str));

//array_keys
echo "</br></br>array_keys</br>";
$key = array_keys($arr);
print_r($key);

//array_values
echo "</br></br>array_values</br>";
$key = array_values($arr);
print_r($key);

//tìm bằng giá trị
echo "</br></br>array_values</br>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");
if (in_array("Glenn", $people)) {
    echo "Match found";
} else {
    echo "Match not found";
}

//tìm kiếm bằng key
echo "</br></br>array_key_exists</br>";
$a = array("Volvo" => "XC90", "BMW" => "X5");
if (array_key_exists("Volvo", $a)) {
    echo "Key exists!";
} else {
    echo "Key does not exist!";
}

//lấy và xóa giá trị đầu
echo "</br></br>array_shift</br>";
$a = array("a" => "red", "b" => "green", "c" => "blue");
echo array_shift($a) . "<br>";
print_r($a);

//xóa giá trị cuối
echo "</br></br>array_pop</br>";
$a = array("red", "green", "blue");
print_r($a);


//so sanh a1,a2 lấy giá trị ko trùng của mảng a
echo "</br></br>array_diff</br>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_diff($a1, $a2);
print_r($result);

//so sanh a1,a2 lấy key ko trùng của mảng a
echo "</br></br>array_diff_key</br>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "red", "c" => "blue", "d" => "pink");

$result = array_diff_key($a1, $a2);
print_r($result);

//so sanh a1,a2 xuất giá trị trùng, lấy key a1 khi a2 trùng tên với a1
echo "</br></br>array_intersect</br>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_intersect($a1, $a2);
print_r($result);

//so sanh a1,a2 lấy giá trị và key trùng xuất ra màn hình
echo "</br></br>array_intersect_key</br>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "red", "c" => "blue", "d" => "pink");

$result = array_intersect_key($a1, $a2);
print_r($result);

//hợp 2 arr lại thành 1 và key từ a1->a2
echo "</br></br>array_merge</br>";
$a1 = array("red", "green");
$a2 = array("blue", "yellow");
print_r(array_merge($a1, $a2));

//hợp 2 arr lại và arr nào trùng key sẽ đánh tự tạo key và key đó là 1 mảng riêng
echo "</br></br>array_merge_recursive</br>";
$a1 = array("a" => "red", "b" => "green");
$a2 = array("c" => "blue", "b" => "yellow");
print_r(array_merge_recursive($a1, $a2));

//cộng 2 lấy giá trị của a khi key a trùng key b
echo "</br></br>Array + array</br>";
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
var_dump($c);

$a += $b; // Union of $a += $b is $a and $b
echo "Union of \$a += \$b: \n";
var_dump($a);

//kiểm tra chẵn lẻ, biến trước hàm sau
echo "</br></br>array_filter</br>";
function test_odd($var)
{
    return ($var & 1);
}

$a1 = array("a", "b", 2, 3, 4);
print_r(array_filter($a1, "test_odd"));

//hàm trước, biến sau
echo "</br></br>array_map</br>";
function myfunction($num)
{
    return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));

//hàm trước, biến sau
echo "</br></br>array_walk</br>";
function mfunction($value,$key)
{
    echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"mfunction");