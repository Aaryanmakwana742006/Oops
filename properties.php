<?php
class properties{
    public $name="Aaryan";
    function getName(){
        echo $this->name;
    }
    function updateName($name){
        $this->name=$name;
    }
}
$p1 = new properties();
$p1->updateName("Makwana");
$p1->getName();
?>