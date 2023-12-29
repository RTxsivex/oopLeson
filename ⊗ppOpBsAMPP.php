<?php
class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        return $this->checkAge($age) ? $this->age = $age: 'false';
    }

    public function addAge($years)
    {
        return $this->checkAge($this->age +$years) ? $this->age = $this->age+$years : false;
    }
    public function subAge($years)
    {
        return $this->checkAge($this->age -$years) ? $this->age = $this->age-$years : false;
    }
    private function checkAge($age)
    {
        return $age >= 18 && $age <= 60 ? true : false;
    }
}


$user = new User;
$user->age = 25;

echo $user->subAge(7);