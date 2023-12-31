<?php
class Employee
{
    private $name;
    private $age;
    private $salary;
    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        return $this->isAgeCorrect($this->age) ? $this->age = $age: false;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setSalary($salary)
    {
        return $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->dollarsAdd($this->salary);
    }
    private function isAgeCorrect($age)
    {
        return $age >=1 && $age <=100 ? $age : false;
    }
    private function dollarsAdd($salary)
    {
        return $salary." $";
    }
}


$em = new Employee();

$em->setAge(25);

echo $em->getAge();

$em->setSalary(100);
echo $em->getSalary();