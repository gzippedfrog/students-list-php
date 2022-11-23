<?php

class StudentsGateway
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTable(): void
    {
        $sql = "CREATE TABLE IF NOT EXISTS `students` (
            `id` int NOT NULL AUTO_INCREMENT,
            `name` varchar(50) NOT NULL,
            `surname` varchar(50) NOT NULL,
            `group_number` varchar(20) NOT NULL,
            `points` int NOT NULL,
            `hash` varchar(32) NOT NULL UNIQUE,
            PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";

        $this->pdo->query($sql);
    }

    public function getAndCountStudents($page = 1, $sortColumn = null, $searchQuery = null, $perPage = 10): array
    {
        if (!in_array($sortColumn, ['name', 'surname', 'group_number', 'points'])) {
            $sortColumn = 'points';
        }

        $sql1 = "SELECT * FROM students";
        $sql2 = "SELECT COUNT(*) FROM students";

        if ($searchQuery) {
            $whereSql = " WHERE CONCAT(name, surname, group_number, points) LIKE CONCAT('%', :query, '%')";
            $sql1 = $sql1 . $whereSql;
            $sql2 = $sql2 . $whereSql;
        }

        $sql1 = $sql1 . " ORDER BY $sortColumn ASC LIMIT :limit OFFSET :offset";

        $stmt1 = $this->pdo->prepare($sql1);
        $stmt2 = $this->pdo->prepare($sql2);

        if ($searchQuery) {
            $stmt1->bindValue(':query', $searchQuery);
            $stmt2->bindValue(':query', $searchQuery);
        }

        $stmt1->bindValue(':limit', $perPage);
        $stmt1->bindValue(':offset', ($page - 1) * $perPage);

        $stmt1->execute();
        $stmt2->execute();

        $students = $stmt1->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Student");
        $total = $stmt2->fetchColumn();

        return [
            'students' => $students,
            'total' => $total,
        ];
    }

    public function updateStudent(Student $student): void
    {
        $sql = "UPDATE `students` SET
            `name` = :name,
            `surname` = :surname,
            `group_number` = :group_number,
            `points` = :points
            WHERE hash = :hash";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            'name' => $student->name,
            'surname' => $student->surname,
            'group_number' => $student->group_number,
            'points' => $student->points,
            'hash' => $student->hash,
        ]);
    }

    public function insertStudent(Student $student): void
    {
        $sql = "INSERT INTO `students` 
            (`id`, `name`, `surname`, `group_number`, `points`, `hash`) 
            VALUES (:id, :name, :surname, :group_number, :points, :hash)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            'id' => $student->id,
            'name' => $student->name,
            'surname' => $student->surname,
            'group_number' => $student->group_number,
            'points' => $student->points,
            'hash' => $student->hash,
        ]);
    }

    public function getStudentByHash($hash)
    {
        $sql = 'SELECT * FROM students WHERE hash = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$hash]);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Student');

        return $stmt->fetch();
    }

    public function populateTable(): void
    {
        require __DIR__ . '/database/data.php';

        foreach ($students as $student) {
            $studentObj = new Student(...$student);

            $this->insertStudent($studentObj);
        }
    }
}