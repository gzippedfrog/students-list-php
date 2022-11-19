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

        if (!preg_match('/^[А-Яа-яA-Za-z \'-]{1,50}$/u', $name)) {
            $errors['name'] = 'Имя должно иметь длину от 1 до 50 символов и состоять из букв русского или английского алфавита';
        }

        if (!preg_match('/^[А-Яа-яA-Za-z \'-]{1,50}$/u', $surname)) {
            $errors['surname'] = 'Фамилия должна иметь длину от 1 до 50 символов и состоять из букв русского или английского алфавита';
        }

        if (!preg_match('/^[А-Яа-я\w]{1,20}$/u', $group_number)) {
            $errors['group_number'] = 'Номер группы должен иметь длину от 1 до 20 символов и состоять из букв русского или английского алфавита';
        }

        if ($points < 0 || $points > 300) {
            $errors['points'] = 'Допустимые значения от 0 до 300';
        }

        return $errors;
    }
}
