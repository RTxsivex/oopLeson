<?php
#1
class User1
{
    public $name;
    public $age;

    public function show()
    {
        return "\(o_0)/";
    }
}

$user1 =new User1();
echo $user1->show();

#2
class User2
{
    public $name;

    public $age;

    public function show($str)
    {
        return "\(X_0)/".$str;
    }
}

$user2 =new User2();
echo $user2->show('\@(0_x)@/');