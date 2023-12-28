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
    public function doubLeSalary()
    {
        return $this->salary * 2;
    }
}

$employee1 = new Employee();
$employee1->age = 12;
$employee1->salary = 1500;
$employee2 = new Employee();
$employee2->age = 22;
$employee2->salary = 2000;
echo $employee1->getSalary() + $employee2->getSalary();
echo $employee1->checkAge();
echo $employee2->checkAge();
echo $employee1->doubLeSalary();

#2
class User
{
    public $name;
    public $age;
    public function setAge($age)
    {
        return $age >= 18 ? $this->age = $age : $this->age;
    }

}

$user = new User();
$user->name = 'John';
$user->age = 25;

echo $user->setAge(12);


class Rectangle
{
    public $length;
    public $width;
    public function Perimeter()
    {
        return ($this->length + $this->width) * 2;
    }
}

$rectangle = new Rectangle();
$rectangle->width = 10;
$rectangle->length = 5;
echo $rectangle->Perimeter();