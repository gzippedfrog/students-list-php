<?php

class Student
{
    public function __construct(
        $id = null,
        $name = '',
        $surname = '',
        $group_number = '',
        $points = 0,
        $hash = null,
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->group_number = $group_number;
        $this->points = $points;
        $this->hash = $hash ?? md5(time() + rand());;
    }
}