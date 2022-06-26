<?php

class User
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function doing()
    {
        return $this->light->turnOn();
    }
}

class Light
{
    public function turnOn()
    {
        return "turn the light on\n";
    }
}

$m = new User(new Light());
echo $m->doing();
#1. class Light 應該用 return
#2. class User 可改用 DI 的方式注入 Light, 使其可更好的被 unit test 支援
#3. 可以視 Light 所做的事, 以及是否有多型的需求決定是否重構成符合 SOLID 原則, 甚至 design pattern 的模式
###