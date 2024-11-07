<?php
class Book
{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function getname()
    {
        echo"Book Name is ".$this->name; 
    }
}
$obj =new Book("PHP");
$obj->getName();

echo"<br>";

$obj1 =new Book("IOS");
$obj1->getName();
?>