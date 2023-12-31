<?php
class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        return $this->checkAge($age) ? $this->age = $age: 'false';
    }

    public function addAge($years)
    {
        return $this->checkAge($this->age +$years) ? $this->age = $this->age+$years : false;
    }
    public function subAge($years)
    {
        return $this->checkAge($this->age -$years) ? $this->age = $this->age-$years : false;
    }
    private function checkAge($age)
    {
        return $age >= 18 && $age <= 60 ? true : false;
    }
}


class Student {
    public $name;
    public $course;

    public function transferToNextCourse() {

        return $this->isCourseCorrect($this->course) ? $this->course++ : $this->course;

    }

    private function isCourseCorrect()
    {
        return $this->course <5 ? true : false;
    }
}


