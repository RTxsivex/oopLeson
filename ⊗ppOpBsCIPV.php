<?php
class Student {
    private $name;
    private $course;
    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }
    public function transferToNextCourse() {

        return $this->isCourseCorrect($this->course) ? $this->course++ : $this->course;

    }
    public function getName()
    {
        return $this->name;
    }
    public function getCourse()
    {
        return $this->course;
    }

    private function isCourseCorrect()
    {
        return $this->course <5 ? true : false;
    }
}

$stud = new Student('Test');

$stud->transferToNextCourse();
echo $stud->getName()."\n";
echo $stud->getCourse();

