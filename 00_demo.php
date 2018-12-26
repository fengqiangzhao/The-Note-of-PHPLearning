<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-24
 * Time: 17:35
 */

/*
 * 变量的命名规则
 * 变量以 $ 符号开始，后面跟着变量的名称
 * 变量名必须以字母或者下划线字符开始
 * 变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
 * 变量名不能包含空格
 * 变量名是区分大小写的（$y 和 $Y 是两个不同的变量）
 * PHP 语句和 PHP 变量都是区分大小写的
 * */
$red = 12;
$yellow = 13;
echo $red + $yellow;

/*
 * PHP 有四种不同的变量作用域：
 * local
 * global
 * static
 * parameter
 *
 * 所有在函数外部定义的变量拥有全局作用域, 要在函数中使用全局变量需要使用global(类似于Python)
 * 在 PHP 函数内部声明的变量是局部变量，仅能在函数内部访问
 * */
function test()
{
    global $yellow, $red;
    $yellow = $yellow + $red;
}

test();
echo $yellow;


/*
 * PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中
 * index 保存变量的名称
 * 这个数组可以在函数内部访问，也可以直接用来更新全局变量
 * */
function newTest()
{
    $GLOBALS['yellow'] = $GLOBALS['red'] + $GLOBALS['yellow'];
}

newTest();
echo $yellow;

/*
 * static作用域
 * 当一个函数完成时，它的所有变量通常都会被删除,如果你不希望这个局部变量被删除,可以使用static关键字
 * */
function twoTest()
{
    static $x = 0;
    echo $x;
    $x++;
}

twoTest();
twoTest();
twoTest();


/*
 * 参数是通过调用代码将值传递给函数的局部变量
 * 参数是在参数列表中声明的,作为函数声明的一部分
 * */
function threeTest($x)
{
    echo $x;
}

threeTest('5');


/*
 * echo 能输出多个参数
 * print 只能输出一个参数
 * */
echo '1', '2';
print '1';
echo "这个数字是$yellow";
echo "这个数字是{$red}";

/*
 * 定界符: 就是按照原样输入其内部字符串
 * EOF(heredoc):是一种在命令行shell和程序语言(Perl/PHP/Python/Ruby)中定义一个字符串的方法
 * 使用方法:
 * 1. 必须后接分号，否则编译通不过
 * 2. EOF 可以用任意其它字符代替，只需保证结束标识与开始标识一致
 * 3. 结束标识必须顶格独自占一行(即必须从行首开始，前后不能衔接任何空白和字符)
 * 4. 开始标识可以不带引号或带单双引号，不带引号与带双引号效果一致，解释内嵌的变量和转义符号，带单引号则不解释内嵌的变量和转义符号
 * 5. 当内容需要内嵌引号（单引号或双引号）时，不需要加转义符，本身对单双引号转义，此处相当与q和qq的用法
 * */
echo <<<EOF

    <h1>我的标题</h1>
    <p>really</p>
    asdasd
    llllll
EOF;
