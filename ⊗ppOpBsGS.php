<?php
class Employee
{
    public $name;
    private $age;

    public function setAge($age)
    {
        return $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}


$em = new Employee();
$em->setAge(25);

echo $em->getAge();