<?php
class Employee {

    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

}

$eric = new Employee('Eric', 25, 300);
$kyle = new Employee('Kyle', 30,  200);


echo $eric->salary + $kyle->salary;

