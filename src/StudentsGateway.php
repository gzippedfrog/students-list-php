<?php

class StudentsGateway
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getStudents($page, $perPage)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM students LIMIT :limit OFFSET :offset');
        $stmt->execute([
            'limit' => $perPage,
            'offset' => ($page - 1) * $perPage
        ]);

        $students = $stmt->fetchAll(PDO::FETCH_CLASS, "Student");

        return $students;
    }

    public function addStudent(Student $student)
    {
        $sql = "INSERT INTO `students` (`id`, `name`, `surname`, `group_number`, `points`, `hash`) VALUES (NULL, :name, :surname, :group_number, :points, :hash)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            'name' => $student->name,
            'surname' => $student->surname,
            'group_number' => $student->group_number,
            'points' => $student->points,
            'hash' => $student->hashs,
        ]);
    }

    public function countStudents()
    {
        $stmt = $this->pdo->query('SELECT COUNT(*) FROM students');
        $amount = $stmt->fetchColumn();

        return $amount;
    }
}