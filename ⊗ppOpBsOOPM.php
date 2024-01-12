<?php
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->checkLenName($name) ? $this->name = $name : "len Name < 3";
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    private function checkLenName($name)
    {
        return strlen($name) >=3 ? $name : false;
    }
}

$test = new User('test',25);

echo $test->getName();


class Student extends User
{

}