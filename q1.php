<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
// task1
$year = 20203 ;
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0){
    echo ("this year is a leap year ");
}else{
    echo ("this year is not a leap year");
}

// task2
echo"<br>";
echo "<hr>";
$temp =27;
if($temp < 20){
    echo ("<br> it is winter time");
}else{
    echo("It is summertime!");
}
// task3
echo"<br>";
echo "<hr>";
$x =2;
$z =2;
if($x == $z){
    echo (($x + $z)  * 3 );
}
echo"<br>";
echo "<hr>";
// task4
$a =10;
$b =10;
if ($a + $b == 30){
    echo $a +$b;
}else{
    echo("false");
}
echo"<br>";
echo "<hr>";
// task5
$r =20 ;
if($r % 3 == 0)
echo ("true");
else
echo("false");
echo"<br>";
echo "<hr>";
// task6
$l =50;
if($l >=20 && $l <=50){
    echo("true");
}else{
    each("false");
}
echo"<br>";
echo "<hr>";
// task7
$array=[1,5,9];
$largest = max($array);
echo "the largest number is = " . $largest;
echo"<br>";
echo "<hr>";
// task8;
$units =280;
if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
} elseif ($units <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
} else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
}

echo "The electricity bill for $units units is: " . $bill . " JOD";
echo"<br>";
echo "<hr>";
// task9
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;
}

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
... (97 lines left)
        }