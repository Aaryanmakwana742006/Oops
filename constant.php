<?php
class ConstantDemo{
    protected const collegeName="C U SHAH POLTECHNIC";
    function getcollegeName(){
        echo self::collegeName;
    // echo ConstantDemo::collegeName;
    }
}
class Child extends ConstantDemo{
    function getChildName(){
        echo self::collegeName;
    }
}
// echo ConstantDemo::collegeName;
// $c1=new ConstantDemo();
// echo"<br>";
// $c1->getcollegeName();

$child=new Child();
$child->getChildName();
?>