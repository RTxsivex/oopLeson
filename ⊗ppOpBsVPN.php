<?php

class City {
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}

$us = new City('Moscow', '2024-01-01', 1000000);
$pop = 'name';

echo $us->$pop;

 class City2 {
     public $name;
     public $foundation;
     public $population;

     public function __construct($name,$foundation,$population)
     {
         $this->name = $name;
         $this->foundation = $foundation;
         $this->population = $population;
     }
 }

 $msv = new City2('Mow','12-10-1915', 200000);
 $props = ['name', 'foundation', 'population'];

 foreach ($props as $prop) {
     echo $msv->$prop."\n";
 }

class User
{
    public $surname;
    public $name;
    public $patronymic;

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}


$props = ['surname', 'name', 'patronymic'];

$user = new User('������', '����', '��������');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]}." ".$user->{$props[1]}." ".$user->{$props[2]};

