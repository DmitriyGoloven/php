<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP1</title>
</head>
<body>

<?php
const MY_CONST = 25;
echo MY_CONST . '<br>';
if (MY_CONST === 25) {
    echo "<br>ok<br>";
};

echo '<b>hello</b> World';
echo "<br>hi <br>";

echo " 3hi \" hi\" oo";

$number = 5;

$num = 45;
$str = 'string';
$bool = true;

echo '<br>' . $str . ' ' . "peremennie  $num $number";
//

echo '<br>///////////////////<br>';

$x = 10;
$y = 20;

echo $x + $y . '<br>';
echo $x - $y . '<br>';
echo $x * $y . '<br>';
echo $x / $y . '<br>';
echo $x % $y . '<br>';

echo ++$x;

echo M_PI . '<br>';

echo abs(-22) . '<br>';
echo ceil(2.2) . '<br>';
echo floor(3.8) . '<br>';
echo round(3.4888, 3) . '<br>';
echo mt_rand(1, 20) . '<br>';
echo min(2, 6, 5, 1) . '<br>';
echo max(2, 6, 5, 1) . '<br>';

echo "<input type=\"text\">" . '<br>';

$str = "dmitriy";

$leng = strlen($str);

echo "stroka $str = $leng bukv dlinoi <br>";

echo strtoupper(trim('    cdcdcd     ')) . '<br>';

echo md5('qwerty') . '<br>';

$num1 = 7;

switch ($num1) {
    case 5:
        echo "5";
        break;
    case 6:
        echo '6';
        break;
    case 4:
        echo "4";
        break;
    default:
        echo "no number";
}
echo '<br>';


$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

echo $numbers[2] . '<br>';
$numbers[2] = 10;
echo $numbers[2] . '<br>';

$arr = [1, true, "hi", 2.5, 0];
echo $arr[2] . '<br>';
echo print_r($arr) . '<br>';
echo '<br>';
$arr1 = ['foo' => "12", 'hoo' => 2, 'loo' => true, 'koo' => 'dim'];
echo $arr1['loo'] . '<br>';
$arr1['loo'] = "true";
echo $arr1['loo'] . '<br>';

$matrix = [
    ['hoo'=>0,'loo'=>1],
    [2,9,8],
    ['true'=> 'false', 'false'=>'true']
];

echo $matrix[1][1]. '<br>';//9

?>

</body>
</html>


