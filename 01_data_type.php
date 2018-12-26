<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-24
 * Time: 18:53
 */


// 字符串: 一串字符的序列
// 放在单双引号中
$x = "Hello world!";
echo $x;
echo "<br>";
echo 'hello world';

// 整型: 没有小数的数字
// 整数必须至少有一个数字 (0-9)
// 整数不能包含逗号或空格
// 整数是没有小数点的
// 整数可以是正数或负数
// 整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）

$x = 5985;
var_dump($x);
echo "<br>";
$x = -5;
var_dump($x);
echo "<br>";
$x = 047;
var_dump($x);
echo "<br>";

// 浮点型
// 浮点数就是带小数部分的数字或者是指数形式
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
echo "<br>";

// 布尔型
// true or false
$x = true;
$y = false;

// 数组
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

// 对象
// 对象也用于存储数据
// 在PHP中必须要声明. class关键字声明类对象.类是可以包含属性和方法的结构
class Car
{
    var $color;

    // 构造函数(Python __init__)
    function __construct($color = "green")
    {
        $this->color = $color;
    }

    function what_color()
    {
        return $this->color;
    }
}

function print_vars($obj)
{
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

// 实例化一个对象
$herbie = new Car("white");

// 显示herbie属性
echo "\therbie: Properties\n";
print_vars($herbie);

// PHP null
// 数据类型为NULL
$x = null;
var_dump($x);

// 常量
// 一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)
// 常量是一个简单值的标识符, 该值在脚本中不能改变
// 设置常量使用define函数
// 常量是全局的,可以在整个脚本的任何地方使用
define("GREETING", "欢迎访问我们的网站", true);
echo GREETING;
echo "<br>";

// 字符串函数和运算符
// 在php中只有一个字符串运算符
// 拼接两个字符串使用并置运算符(.)
$txt1 = "Hello world!";
$txt2 = "What a nice day!";
echo $txt1." ".$txt2;
// strlen()函数返回字符串的长度(字符数)
echo strlen("Hello world!");
// strpos()函数在字符串内查找一个字符或者一段指定的文本,返回第一个匹配字符位置,没有找到的话,返回false
echo strpos("Hello world!", 'wor');




