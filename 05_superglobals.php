<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-25
 * Time: 10:36
 */

// PHP中预定义了几个超级全局变量,他们在一个脚本的全部作用域中都可用
// $GLOBALS: $GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键
$x = 75;
$y = 25;
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo PHP_EOL;

// $_SERVER: 一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
// 这个数组中的项目由 Web 服务器创建
echo $_SERVER["PHP_SELF"];
echo PHP_EOL;
echo $_SERVER["SERVER_ADDR"];
echo PHP_EOL;
echo $_SERVER["SERVER_NAME"];
echo PHP_EOL;
echo $_SERVER["HTTP_REFERER"];
echo PHP_EOL;
echo $_SERVER["HTTP_HOST"];
echo PHP_EOL;
echo $_SERVER["SCRIPT_NAME"];
echo PHP_EOL;

// $_REQUEST用于收集HTML表单提交的数据
// $_POST用于收集HTML表单数据, method为post
// $_GET用于收集HTML表单数据, method为get
