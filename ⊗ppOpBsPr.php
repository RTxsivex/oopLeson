<?php
#1

class Employee
{
    public $name;
    public $age;

    public $salary;
}

#2

$employeeJohn = new Employee();
$employeeJohn->name = "John";
$employeeJohn->age = 25;
$employeeJohn->salary = 1000;

#3

$employeeEric = new Employee();
$employeeEric->name = "Eric";
$employeeEric->age = 26;
$employeeEric->salary = 2000;

#4
$sumSalary = $employeeJohn->salary + $employeeEric->salary;
echo $sumSalary;

#5
$sumAge = $employeeJohn->age + $employeeEric->age;
echo $sumAge;