<?php

class Studnt{
    public $name,$rollno,$grade,$marks1,$marks2,$marks3,$total,$percent;
    function__construct($nm,$rno,$grade,$m1,$m2,$m3,$sum){
        $this ->name=$nm;
        $this ->rollno=$rno;
        $this ->grade=$grade;
        $this ->marks1=$m1;
        $this ->marks2=$m2;
        $this ->marks3=$m3;
        $this ->total=$sum;
    }
    function getDetails(){
        $this->sum=$this->marks1+$this->marks2+$this->marks3;
        $this->percent=($this->sum/300)*100;
        echo "Name: ".$this->name."<br>";
        echo "Roll No: ".$this->rollno."<br>";
        echo "Grade: ".$this->grade."<br>";
        echo "Marks 1: ".$this->marks1."<br>";
        echo "Marks 2: ".$this->marks2."<br>";
        echo "Marks 3: ".$this->marks3."<br>";
        echo "Total Marks: ".$this->sum."<br>";
        echo "Percentage: ".$this->percent."%<br>";
        echo "<br>";
        $this->displayGrade();
    }

    function displayGrade(){
        if($this->percent >= 90){
            echo "Grade: A+<br>";
        } elseif($this->percent >= 80){
            echo "Grade: A<br>";
        } elseif($this->percent >= 70){
            echo "Grade: B<br>";
        } elseif($this->percent >= 60){
            echo "Grade: C<br>";
        } elseif($this->percent >= 50){
            echo "Grade: D<br>";
        } else {
            echo "Grade: F<br>";
        }
    }
}

?>
