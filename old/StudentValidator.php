<?php

class StudentValidator
{
    public static function validate(Student $student)
    {
        $errors = [];

        $name = $student->name;
        $surname = $student->surname;
        $group_number = $student->group_number;
        $points = $student->points;

        if (!preg_match('/^[\p{Cyrillic}A-Za-z \'-]{1,50}$/u', $name)) {
            $errors['name'] = 'Только буквы русского и латинского алфавита, пробелы, \', -. Длина от 1 до 50 символов.';
        }

        if (!preg_match('/^[\p{Cyrillic}A-Za-z \'-]{1,50}$/u', $surname)) {
            $errors['surname'] = 'Только буквы русского и латинского алфавита, пробелы, \', -. Длина от 1 до 50 символов.';
        }

        if (!preg_match('/^[\p{Cyrillic}\w]{1,20}$/u', $group_number)) {
            $errors['group_number'] = 'Только буквы русского и латинского алфавита, пробелы. Длина от 1 до 20 символов.';
        }

        if ($points < 0 || $points > 300) {
            $errors['points'] = 'Допустимые значения от 0 до 300';
        }

        return $errors;
    }
}