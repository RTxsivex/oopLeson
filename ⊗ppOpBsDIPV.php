<?php

class Arr {
    public $numbers = [];

    public function addToArr($arr)
    {
        foreach ($arr as $item)
        {
            $this->numbers[]=$item;
        }
    }
    public function getAvg()
    {
        return array_sum($this->numbers)/count($this->numbers);
    }
}


$arr = new Arr();
$arr->addToArr([1,2,3,4,5,6,7]);
print_r($arr->numbers)."\n";
echo $arr->getAvg();
