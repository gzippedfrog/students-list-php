<?php

class StudentsGateway
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllStudents()
    {
        $stmt = $this->pdo->query('SELECT * FROM students');
        $students = $stmt->fetchAll(PDO::FETCH_CLASS, "Student");

        return $students;
    }

    public function addStudent(Student $student)
    {
        $sql = "INSERT INTO `students` (`id`, `name`, `surname`, `group_number`, `points`) VALUES (NULL, :name, :surname, :group_number, :points)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'name' => $student->name,
            'surname' => $student->surname,
            'group_number' => $student->group_number,
            'points' => $student->points,
        ]);
    }

    public function countStudents()
    {
        $stmt = $this->pdo->query('SELECT COUNT(*) FROM students');
        $amount = $stmt->fetchColumn();

        return $amount;
    }
}
