<?php
class Employee
{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function setSalary($salary)
    {
        return $this->salary = $salary;
    }
    public function getSalarary()
    {
        return $this->salary;
    }
}



