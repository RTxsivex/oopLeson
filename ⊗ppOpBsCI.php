<?php

class User
{
    private $name;
    private $age;

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

class Employee extends User
{
    private $salary;
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$employee = new Employee;

$employee->setSalary(1000);
$employee->setName('john');
$employee->setAge(25);

echo $employee->getSalary()."\n";
echo $employee->getName()."\n";
echo $employee->getAge()."\n";



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
}
 $stud = new Student();
$stud->setName('Nik');
$stud->setAge(21);
$stud->setCourse(3);

echo $stud->getName()."\n";
echo $stud->getAge()."\n";
echo $stud->getCourse()."\n";

class Programmer
{
    private $langs= [];

    public function getLangs()
    {
        return $this->langs;
    }
    public function setLangs($langs)
    {
        return $this->langs = $langs;
    }
}

$proger = new Programmer();
$proger->setLangs(['c', 'c#', 'c++','php']);
var_dump($proger->getLangs());

