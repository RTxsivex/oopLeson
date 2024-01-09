<?php

class Arr {
    private $numbers = [];

    public function __construct($number)
    {
        $this->numbers = $number;
    }
    public function getSum()
    {
        return array_sum($this->numbers);
    }

}

echo (new Arr([8,9]))->getSum();