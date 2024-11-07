<?php
class Teachers{
    Private function QuestionPapers(){
        return"important";
        echo"Question paper for Students";
    }
    public function exam(){
        if ($this->QuestionPapers()=="important"){
            echo"do something";
        }
        else
        {
            echo"do else";
        }
    }
    protected function studentmarks(){
        echo"all students marks";
    }
}
class management extends Teachers{
    function reviewExam(){
        $this->studentmarks();
    }
}
$t1=new Teachers();
$m1=new management();
echo $m1->reviewExam();
?>