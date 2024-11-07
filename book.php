<?php
class Boo
{
    public $name=" Aaryan ";
    public function getName(){
        echo"Get Name Called";
    }
}
$obj =new Boo("");
echo $obj->name;
$obj->getName();

echo"<br>";

$obj1 =new Boo("");
echo $obj->name;
$obj1->getName();