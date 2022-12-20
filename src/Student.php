<?php

class Student
{
    private static PDO $connection;

    public ?int $id;
    public ?string $first_name;
    public ?string $last_name;
    public ?string $group_number;
    public ?int $points;

    public function __construct(
        $id = null,
        $first_name = null,
        $last_name = null,
        $group_number = null, 
        $points = null,
    ) {
        $this->id = (int) $id;
        $this->first_name = (string) $first_name;
        $this->last_name = (string) $last_name;
        $this->group_number = (string) $group_number; 
        $this->points = (int) $points;
    }

    public static function setConnection(PDO $connection)
    {
        self::$connection = $connection;
    }

    public static function get($query = '')
    {
        $sql = 'SELECT * FROM students';

        $placeholders = [];
        $conditions = [];

        if ($query) {
            $placeholders = ["%$query%", "%$query%", "%$query%", "%$query%"];
            $conditions = ['first_name LIKE ?', 'last_name LIKE ?', 'group_number LIKE ?', 'points LIKE ?'];
            $sql .= ' WHERE ' . implode(' OR ', $conditions);
        }

        $stmt = self::$connection->prepare($sql);
        $stmt->execute($placeholders);

        return $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Student');
    }

    public static function getById($id)
    {
        $stmt = self::$connection->prepare('SELECT * FROM students WHERE id = ?');
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Student');
        return $stmt->fetch();
    }

    public function save()
    {
        $sql = "REPLACE INTO students
        VALUES (
            :id,
            :first_name, 
            :last_name, 
            :group_number, 
            :points
        )";

        $stmt = self::$connection->prepare($sql);

        $stmt->execute([
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'group_number' => $this->group_number,
            'points' => $this->points,
        ]);
    }

    function validate()
{
    $errors = [];

    if (!preg_match('/^[\p{Cyrillic}A-z \'-]{1,255}$/u', $this->first_name)) {
        $errors['first_name'] = 'Only cyrillic and latin letters, whitespace, \' and -. Length from 1 to 255 characters.';
    }

    if (!preg_match('/^[\p{Cyrillic}A-z \'-]{1,255}$/u', $this->last_name)) {
        $errors['last_name'] = 'Only cyrillic and latin letters, whitespace, \' and -. Length from 1 to 255 characters.';
    }

    if (!preg_match('/^[\p{Cyrillic}A-z\d]{1,20}$/u', $this->group_number)) {
        $errors['group_number'] = 'Only cyrillic and latin letters and numbers. Length from 1 to 20 characters.';
    }

    if ($this->points < 0 || $this->points > 300) {
        $errors['points'] = 'Only values from 0 to 300.';
    }

    return $errors;
}
}