<?php
 class City {
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

 $msv = new City('Mow','12-10-1915', 200000);
 $props = ['name', 'foundation', 'population'];

 foreach ($props as $prop) {
     echo $msv->$prop."\n";
 }