<?php
class User
{
    public $name;
    public $age;
    public function addAge($year)
    {
        return $this->checkAge($this->age+$year) ? $this->age+$year : $this->age;
    }
    public function checkAge($ge)
    {
        return $newAge>= 18 && $this->age <= 60 ? $newAge : $this->age;
    }
    public function subAge()
    {

    }
}

$us = new User();
$us->age = 9;
echo $us->addAge(8);
