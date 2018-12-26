<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-24
 * Time: 20:23
 */

// 算数运算符
// + - * / % -(取反) .(并置)

var_dump(intdiv(10, 3));

// 赋值运算符
// = += -= *= /= %= .=(并置字符串)

// 自增自减运算符
// ++x 预递增  x++后递增 --x预递减 x-- 后递减
$x = 10;
echo ++$x;
echo "<br>";
echo $x++;
echo "<br>";
echo $x;
echo "<br>";

$y = 10;
echo --$x;
echo "<br>";
echo $x--;
echo "<br>";
echo $x;
echo "<br>";

// 比较运算符
// == === (同js) != <> !==(同js) > < >= <=
$x = 100;
$y = "100";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

// 逻辑运算符
// and or xor(异或) && || !(非)
$x = 6;
$y = 3;
echo ($x < 10 and $y >1);
echo "<br>";
echo ($x == 6 xor $y == 3);

// 数组运算符
// x+y (x和y的集合)
// x==y(x和y具有相同的键值对则返回true)
// x===y(不只是元素相同, 顺序也要相同,返回true)
// x!=y x<>y x!==y

$x = array('a' => "red", 'b' => "green");
$y = array('c' => "blue", 'd' => "yellow");
$z = $x + $y;
var_dump($z);

// 三元运算符
// ?:(类似js)
// expr1 ? expr2 : expr3  >> 对expr1求值: true->expr2, false->expr3;
// 可以省略写: expr1 ?: expr3  对expr1求值: true->expr1, false->expr3;   PHP5.3+
$test = '菜鸟教程';
// PHP_EOL 是一个换行符，兼容更大平台
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;
$username = $test ?: 'nobody';
echo $username, PHP_EOL;
// PHP7+ NULL合并运算符 ?? 如果存在就返回值不存在就返回nobody(Python 字典.get())
$username = $_GET('user') ?? 'nobody';


// 组合比较符 PHP7+ 太空舱运算符
// $x <=> $y, 如果$x小于$y返回-1 等于返回0 大于返回1
echo 1 <=> 1; // 0
echo PHP_EOL;
echo 1 <=> 1.5; // -1
echo PHP_EOL;
echo 2 <=> 1; // 1
echo PHP_EOL;



