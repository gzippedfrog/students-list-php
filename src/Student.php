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
    )
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->group_number = $group_number;
        $this->points = $points;
    }

    public static function setConnection(PDO $connection)
    {
        self::$connection = $connection;
    }


    public static function get($query = '', $page = 1, $perPage = 10)
    {
        $page = $page ? $page : 1;
        $perPage = $perPage ? $perPage : 10;

        $sql1 = "SELECT * 
            FROM students 
            WHERE 
                first_name LIKE :query OR
                last_name LIKE :query OR
                group_number LIKE :query OR
                points LIKE :query
            LIMIT $perPage OFFSET :offset";

        $sql2 = 'SELECT COUNT(*) 
            FROM students 
            WHERE 
                first_name LIKE :query OR
                last_name LIKE :query OR
                group_number LIKE :query OR
                points LIKE :query';

        $stmt1 = self::$connection->prepare($sql1);
        $stmt2 = self::$connection->prepare($sql2);

        $stmt1->bindValue(':query', "%$query%");
        $stmt2->bindValue(':query', "%$query%");
        $stmt1->bindValue(':offset', ($page - 1) * $perPage, PDO::PARAM_INT);

        $stmt1->execute();
        $stmt2->execute();

        return [
            'list' => $stmt1->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Student'),
            'pages' => ceil($stmt2->fetchColumn() / $perPage),
        ];
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
}