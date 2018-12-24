
<?php

class Student
{
	public $firstname, $lastname, $gender, $status, $gpa;

	function showMyself(){
	echo $this->firstname," ", $this->lastname, PHP_EOL;
	echo $this->gender, PHP_EOL;
	echo $this->status, PHP_EOL;
	echo $this->gpa, PHP_EOL, PHP_EOL;
	}

	function studyTime($study_time){
	$tmp_gpa = $this->gpa;
	$this->gpa = $tmp_gpa + log($this->study_time);
	}
}

$student_1 = new Student;
$student_1->firstname="Mike"; 
$student_1->lastname="Barnes"; 
$student_1->gender="male";
$student_1->status="freshman";
$student_1->gpa="4";
$student_1->showMyself();

$student_2 = new Student;
$student_2->firstname="Jim";
$student_2->lastname="Nickerson";
$student_2->gender="male";
$student_2->status="sophomore";
$student_2->gpa="3";
$student_2->showMyself();

$student_3 = new Student;
$student_3->firstname="Jack";
$student_3->lastname="Indabox";
$student_3->gender="male";
$student_3->status="junior";
$student_3->gpa="2.5";
$student_3->showMyself();


$student_4 = new Student;
$student_4->firstname="Jane";
$student_4->lastname="Miller";
$student_4->gender="female";
$student_4->status="senior";
$student_4->gpa="3.6";
$student_4->showMyself();

$student_5 = new Student;
$student_5->firstname="Mary";
$student_5->lastname="Mary";
$student_5->gender="female";
$student_5->status="senior";
$student_5->gpa="2.7";
$student_5->showMyself();

