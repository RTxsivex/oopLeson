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