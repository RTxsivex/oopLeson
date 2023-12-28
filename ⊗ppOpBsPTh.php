<?php
#1
class Employee
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function checkAge()
    {
        return $this->age >= 18 ? 'true' : 'false';
    }
}

$employee1 = new Employee();
$employee1->age = 12;
$employee1->salary = 1000;
$employee2 = new Employee();
$employee2->age = 22;
$employee2->salary = 2000;
echo $employee1->getSalary() + $employee2->getSalary();
echo $employee1->checkAge();
echo $employee2->checkAge();