<?php
class User
{
    private $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

class Student extends User
{
    private $course;
    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($course)
    {
        return $this->course = $course;
    }
    public function addOneYear()
    {
        return $this->age++;
    }
}

$student = new Student();
$student->setName('Wow');
$student->setAge(23);
$student->setCourse(2);

$student->addOneYear();

echo $student->getAge();




