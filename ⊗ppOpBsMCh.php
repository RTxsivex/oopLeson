<?php
class Arr {
    private $numbers = [];

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
        return $this;
    }

    public function add($numbers)
    {
        $this->numbers[] = $numbers;
        return $this;
    }
    public function push($numbers)
    {
        $this->numbers = array_merge($this->numbers,$numbers);
        return $this;
    }
    public function getSum()
    {
        return array_sum($this->numbers);
    }

}

echo (new Arr([1,2]))->add(1)->add(2)->push([3, 4])->getSum();
