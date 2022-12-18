<?php

class Student
{
    public ?int $id;
    public string $first_name;
    public string $last_name;
    public string $group_number;
    public int $points;

    public function __construct(
        $id = null,
        $first_name,
        $last_name,
        $group_number,
        $points,
    ) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->group_number = $group_number;
        $this->points = $points;
    }
}
