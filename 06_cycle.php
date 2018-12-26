<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-25
 * Time: 10:56
 */

// while循环将重复执行代码块,直到指定的条件不成立
$x = 20;
while ($x < 30) {
    echo $x;
    echo PHP_EOL;
    $x++;
}

// do...while 和while相比至少会执行1次
$i = 1;
do {
    $i++;
    echo "The number is " . $i;
    echo PHP_EOL;
} while ($i <= 5);

// for 循环
for ($i = 1; $i <= 5; $i++) {
    echo "The number is " . $i;
    echo PHP_EOL;
}

// foreach循环
$a = array("one", "two", "three");
foreach ($a as $value) {
    echo $value;
    echo PHP_EOL;
}
