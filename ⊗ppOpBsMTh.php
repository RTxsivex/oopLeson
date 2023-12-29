<?php
class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        return $this->checkAge($age) ? $this->age = $age: 'false';
    }
    function checkAge($age)
    {
        return $age >= 18 && $age <= 60 ? true : false;
    }
    public function addAge($years)
    {
        return $this->checkAge($this->age +$years) ? $this->age = $this->age+$years : false;
    }
    public function subAge($years)
    {
        return $this->checkAge($this->age -$years) ? $this->age = $this->age-$years : false;
    }
}

$us = new User();
echo ($us->age = 20)."\n";
$us->setAge(50);
$us->addAge(8);
$us->subAge(40);
echo $us->age;
