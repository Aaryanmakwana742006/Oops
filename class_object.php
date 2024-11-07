<?php
 class MathOperation{
    public$val=30;
    function sum($a,$b){
        echo $a+$b+$this->val;
    }
    function mul($a,$b){
        echo $a*$b;
    }
    function sub($a,$b){
        echo $a-$b;
    }
    function div($a,$b){
        echo $a%$b;
    }
}
$maths=new MathOperation();
$maths->sum(20,30);
echo"<br/>";
$maths1=new MathOperation();
$maths->mul(10,20);
echo"<br/>";
$maths2=new MathOperation();
$maths->sub(30,40);
echo"<br/>";
$maths2=new MathOperation();
$maths->div(20,10);
echo"<br/>";
?>