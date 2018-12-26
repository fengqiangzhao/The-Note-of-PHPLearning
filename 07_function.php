<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-25
 * Time: 11:08
 */

// 无参函数
function whiteName(){
    echo "Kai Jim Refsnes";
}
whiteName();
echo PHP_EOL;

// 带参函数
function whiteNameTwo($fname, $punctuation){
    echo $fname . "Refsnes" . $punctuation;
    echo PHP_EOL;
}

// 返回值
function add($x, $y){
    $total=$x+$y;
    return $total;
}
echo add(1, 3);
