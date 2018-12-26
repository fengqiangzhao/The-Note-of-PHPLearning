<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-25
 * Time: 10:10
 */

// 数组是一个能在单个变量中存储多个值的特殊变量
// array()函数用于创建数组, 一共有三种类型的数组
// 1.数值数组: 带有数字ID键的数组,(普通数组,数字索引)
// 2.关联数组: 带有指定的键的数组, 每个键关联一个值
// 3.多维数组: 包含一个或者多个数组的数组

// 数值数组
$cars = array("Volvo", "BMW", "Toyota");
// 获取数组的长度 count()
echo count($cars);
// 遍历数值数组
for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo PHP_EOL;
}
foreach ($cars as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo PHP_EOL;
}
// 关联数组
$age = array("peter" => "35", "Ben" => "37", "Joe" => "43");
// 遍历关联数组
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo PHP_EOL;
}
echo $age['peter'];
echo PHP_EOL;
// 数组排序
// sort() 对数组进行升序排列
sort($cars);
$numbers = array(4,6,2,22,11);
sort($numbers);
echo $numbers[0];
echo PHP_EOL;
// rsort() 对数组进行降序排列
rsort($numbers);
echo $numbers[0];
echo PHP_EOL;
// asort() - 根据关联数组的值，对数组进行升序排列
asort($age);
// ksort() - 根据关联数组的键，对数组进行升序排列
ksort($age);
// arsort() - 根据关联数组的值，对数组进行降序排列
arsort($age);
// krsort() - 根据关联数组的键，对数组进行降序排列
krsort($age);
