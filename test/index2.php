<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP2</title>
</head>
<body>
<?php
for($a = 0; $a <= 5; $a++)
    echo $a. '<br>';
echo '<br>';
$b = 2;
while ($b <= 6){

    echo $b.'<br>';
    ++$b;
}
echo '<br>';

for($el = 100; $el >= 2; $el /=2){
    if($el < 4)
        break;
    if($el %2 !== 0)
        continue;
    echo $el.'<br>';
}

$arr = [5,8,8,9,55,55,8,4,1];

for($i=0; $i < count($arr);$i++){
    echo "$i elem = $arr[$i]".'<br>';
}

$arr1 = ['name'=>'dima', "age"=>33, 'learn'=>'true'];

foreach ($arr1 as $item => $value){
    echo "key:  $item "."value: $value".'<br>';
}
 echo '<br>';

foreach ($arr as $i => $item){
    echo "value: $item index: $i <br>";
}

function myFoo($param){
    echo "myfoo $param".'<br>';

}

myFoo("ooo");

function summa($arr){
    $sum = 0;
    foreach ($arr as $val){

        $sum += $val;
    }
    return $sum;
}

echo summa($arr).'<br>';
echo summa([3,5,8,7,5,8,5,8,5]).'<br>';

function click(){
    static $a = 0;
    $a++;
    echo $a.'<br>';

}

click();
click();
click();

?>

</body>
</html>
