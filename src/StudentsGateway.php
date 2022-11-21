<?php

class StudentsGateway
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTable()
    {
        $sql = "CREATE TABLE `students` (`id` int NOT NULL AUTO_INCREMENT,`name` varchar(50) NOT NULL,`surname` varchar(50) NOT NULL,`group_number` varchar(20) NOT NULL,`points` int NOT NULL,`hash` varchar(32) NOT NULL,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";

        $this->pdo->query($sql);
    }

    public function getAllStudents($page, $perPage)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM students LIMIT :limit OFFSET :offset');
        $stmt->execute([
            'limit' => $perPage,
            'offset' => ($page - 1) * $perPage
        ]);

        return $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Student");
    }

    public function upsertStudent(Student $student)
    {
        $sql = "INSERT INTO `students` (`id`, `name`, `surname`, `group_number`, `points`, `hash`) VALUES (:id, :name, :surname, :group_number, :points, :hash)";

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
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Student',);

        return $stmt->fetch();
    }

    public function countStudents()
    {
        $stmt = $this->pdo->query('SELECT COUNT(*) FROM students');
        return $stmt->fetchColumn();
    }

    public function populateTable()
    {
        require __DIR__ . '/database/data.php';

        foreach ($students as $student) {
            $studentObj = new Student(...$student);

            $this->upsertStudent($studentObj);
        }
    }
}