<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-24
 * Time: 23:07
 */

// if
// if ...else
// if ...else if ...else
// switch

$t = date("H");
if ($t < '20') {
    echo "Have a good day!";
}
echo PHP_EOL;
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo PHP_EOL;
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good noght!";
}
echo PHP_EOL;
$x = 20;
switch ($x){
    case 10:
        echo 1;
        break;
    case 20:
        echo 2;
        break;
    default:
        echo 3;
}

