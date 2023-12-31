<?php
require_once '⊗ppOpBsOIA.php';
$cities =[
    new City('Москва', 10000000),
    new City('Санкт-Петербург', 5000000),
    new City('Новосибирск', 1200000),
    new City('Вологда', 750000),
    new City('Казань', 1500000)
];


foreach ($cities as $city) {
    echo $city->getName()." => ".$city->getPopulation()."\n";
}


