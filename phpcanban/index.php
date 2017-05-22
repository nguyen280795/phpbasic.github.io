<h1>Tìm hiểu Syntax, khai báo Variable, Constant</h1>
<!--long tag-->
<?php
//multi line
$multiline = <<<ML
This
Is
A
Multiline 
String
ML;

//variable
$x = "hello php";
$y = 20;
$z = 30;
//constant
define("CONSTAN_A", "aaa");

//list
$list = array("a", 1, "c", 20);
list($a, $b, $c) = $list;
?>
<!--short tag-->
<?=
$multiline, "</br>",
$x, "</br>",
$y, "</br>",
$z, "</br>",
CONSTAN_A, "</br>",
$a, "</br>",
$b, "</br>",
$c, "</br>"
?>

<h1>Tìm hiểu về các Operator</h1>

<h2>== and ===</h2>

<?php
//vd == và ===

$a = "1";
$b = 1;

echo "a:" . $a . "- là string </br>";
echo "b:" . $b . "-là int</br >";

echo "if ($a == $b)";
if ($a == $b) {
    echo "</br>a == b";
}

echo "</br> if ($a === $b)";
if ($a === $b) {
    echo "</br> a===b";
} else {
    echo "</br> a!===b";
}
?>

<h2>isset() và empty()</h2>

<h3>empty()</h3>
<?php
//vd
$a = null;
$b = 0;
$c = " ";

$d = 20;
$e = "aaa";

echo "a:" . $a . "</br>";
echo "b:" . $b . "</br>";
echo "c:" . $c . "</br>";

echo "d:" . $d . "</br>";
echo "e:" . $e . "</br>";

define("CONSTANT", 0);
define("CONSTANT_1", " ");

define("CONSTANT_3", 10);
define("CONSTANT_4", "hello");

echo "CONSTANT:" . CONSTANT . "</br>";
echo "CONSTANT_1:" . CONSTANT_1 . "</br>";

echo "CONSTANT_3:" . CONSTANT_3 . "</br>";
echo "CONSTANT_4:" . CONSTANT_4 . "</br>";

echo "</br>empty() sẽ trả về true khi giá trị null hoặc bằng 0</br>";
echo "a: " . empty($a);
echo "</br>b: " . empty($b);
echo "</br>c: " . empty($c);

echo "</br>d: " . empty($d);
echo "</br>e: " . empty($e);

echo "</br>CONSTANT: " . empty(CONSTANT);
echo "</br>CONSTANT_1: " . empty(CONSTANT_1);

echo "</br>CONSTANT_3: " . empty(CONSTANT_3);
echo "</br>CONSTANT_4: " . empty(CONSTANT_4);
?>

<h3>isset()</h3>
<?php
//vd
$a = null;
$b = 0;
$c = " ";

$d = 20;
$e = "aaa";

echo "a:" . $a . "</br>";
echo "b:" . $b . "</br>";
echo "c:" . $c . "</br>";

echo "d:" . $d . "</br>";
echo "e:" . $e . "</br>";

echo "CONSTANT:" . CONSTANT . "</br>";
echo "CONSTANT_1:" . CONSTANT_1 . "</br>";

echo "CONSTANT_3:" . CONSTANT_3 . "</br>";
echo "CONSTANT_4:" . CONSTANT_4 . "</br>";

echo "</br>isset() sẽ trả về false khi giá trị null và không kiểm tra được constant</br>";
echo "a: " . isset($a);
echo "</br>b: " . isset($b);
echo "</br>c: " . isset($c);

echo "</br>d: " . isset($d);
echo "</br>e: " . isset($e);

//echo "</br>CONSTANT: " . isset(CONSTANT);
//echo "</br>CONSTANT_1: " . isset(CONSTANT_1);
//
//echo "</br>CONSTANT_3: " . isset(CONSTANT_3);
//echo "</br>CONSTANT_4: " . isset(CONSTANT_4);

echo "</br>isset: d";
if (isset($d)) {
    echo "</br>true!";
}

echo "</br>isset: a";
if (!isset($a)) {
    echo "</br>false!";
}
?>

<h1>Tìm hiểu về If/else và Loop</h1>

<h2>if/esleif/else</h2>
<?php
$a = 1;
$b = 1;

echo "a: " . $a;
echo "</br>b: " . $b;

if ($a < $b) {
    echo "</br>if (a < b)";
    echo "</br>a < b";
} elseif ($a > $b) {
    echo "</br>if (a > b)";
    echo "</br>a > b";
} else {
    echo "</br>if (a = b)";
    echo "</br>a = b";
}
?>

<h2>ternary operator</h2>
<?php
$a = 2;
$b = 1;

echo "a: " . $a;
echo "</br>b: " . $b;

$x = $a > $b ? true : false;
if ($x) {
    echo "</br>true";
} else {
    echo "</br>false";
}

?>

<h2>for/foreach</h2>

<h3>for</h3>
<?php
for ($i = 0; $i < 10; $i++) {
    echo $i . " ";
}
?>

<h3>foreach</h3>
<?php
$arr = array(1, 2, 3, 4, 5);
foreach ($arr as $value) {
    echo $value . " ";
}
?>

<h2>while/do...while</h2>
<h3>while</h3>
<?php
$x = 1;
while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>

<h3>do...while</h3>
<?php
$x = 1;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

<h2>switch</h2>
<?php
$x = 10;
switch ($x) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    case 4:
        echo "4";
        break;
    case 5:
        echo "5";
        break;
    default:
        echo "not found!";
}
?>