<?php
/**
 * Created by PhpStorm.
 * User: ryen
 * Date: 2018-12-25
 * Time: 11:38
 */

// oop思想: 封装 继承 多态
class Car
{
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par)
    {
        $this->url = $par;
    }

    function getUrl()
    {
        echo $this->url . PHP_EOL;
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
    }
}

$mercedes = new Car();
$bmw = new Car();
$audi = new Car();

$mercedes->setTitle("梅赛德斯");
$bmw->setTitle("宝马");
$audi->setTitle("奥迪");

$mercedes->setUrl("www.mercedes.com");
$bmw->setUrl("www.bmw.com");
$audi->setUrl("www.audi.com");

$mercedes->getTitle();
$bmw->getTitle();
$audi->getTitle();

$mercedes->getUrl();
$bmw->getUrl();
$audi->getUrl();

// PHP构造函数
class Hourse
{
    function __construct($par1, $par2)
    {
        $this->url = $par1;
        $this->title = $par2;
    }

    function getUrl()
    {
        echo $this->url . PHP_EOL;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
    }
}

$building = new Hourse('www.building.com', '大楼');
$building->getTitle();
$building->getUrl();

// PHP的析构函数
class MyDestructableClass
{
    function __construct()
    {
        print "构造函数\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        print "销毁" . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();


// 继承 extends
class Child extends Car
{
    var $category;

    function setCate($par)
    {
        $this->category = $par;
    }

    function getCate()
    {
        echo $this->category . PHP_EOL;
    }
}

$child = new Child();
$child->setUrl('www.child.com');
$child->setTitle('孩子');
$child->setCate('不知道');

$child->getUrl();
$child->getTitle();
$child->getCate();

// 方法重写override
class Child2 extends Car
{
    var $category;

    function setCate($par)
    {
        $this->category = $par;
    }

    function getCate()
    {
        echo $this->category . PHP_EOL;
    }

    function getUrl()
    {
        echo $this->url . PHP_EOL;
        return $this->url . PHP_EOL;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
        return $this->title;
    }
}

$child2 = new Child2();
$child2->setUrl('www.child2.com');
print $child2->getUrl();

// PHP对方法或属性的访问和控制,是通过在前面添加关键字public(共有),private(私有), protected(受保护的)
// public(公有): 公有的类成员可以在任何地方被访问;var定义的类属性也为公有;
// protected(受保护): 受保护的类成员可以被其自身以及其子类和父类访问;
// private(私有的): 私有的类成员只能被其定义所在的类访问;
class Myclass
{
    public $variable = 'Public';
    protected $variable2 = 'protected';
    private $variable3 = 'private';

    function printHello()
    {
        echo $this->variable;
        echo $this->variable2;
        echo $this->variable3;
    }
}

$obj = new Myclass();
echo $obj->variable;
//echo $obj->variable2;      class外不能访问受保护的变量  _var
//echo $obj->variable3;      class外不能访问私有变量     __var
$obj->printHello();

class Myclass2
{
    public function __construct()
    {
    }

    public function MyPublic()
    {

    }
    protected function MyProtected(){

    }
    private function MyPrivate(){

    }
    function Foo(){
        $this->Mypublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}
$myclass2 = new MyClass2();
$myclass2->MyPublic(); // 这行能被正常执行
//$myclass2->MyProtected();  class外不能访问受保护的方法
//$myclass2->MyPrivate();  class外不能访问私有的方法
$myclass2->Foo(); // 公有，受保护，私有都可以执行
