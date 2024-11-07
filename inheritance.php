<?php
class userauth{
    function login($userType){
        echo "$userType logged in";
    }
}
class Students extends userauth{
    function getName(){
        echo"Aaryan";
    }
}
class Teacher extends userauth{
    function getSkill(){
        echo"PHP";
    }
}
$s1=new Students();
$s1->login("Student");
echo"<br>";
$s1->getName();

echo"<br>";
$t1= new Teacher();
$t1->login("Teacher");
?>