<?php
class teacher{
    public $city="Delhi";
    function nextExam(){
        echo"next exam is maths";
    }
    function age(){
        echo"age is 40";
    }
}
class Student extends teacher{
    public $city="Gujarat"; 
    function age(){
        echo"My age is 18";
    }
}
$st1=new Student();
$st1->age();
echo"<br>";
echo $st1->city;
?>