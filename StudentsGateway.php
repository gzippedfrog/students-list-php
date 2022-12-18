<?php

class StudentsGateway
{
    public PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getAllStudents()
    {
        return $this->connection->query('SELECT * FROM students')->fetchAll();
    }

    public function getStudentById($id)
    {
        $stmt = $this->connection->prepare('SELECT * FROM students WHERE id = ?');
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function updateStudent($student)
    {
        $sql = "UPDATE `students` SET
        `first_name` = :first_name,
        `last_name` = :last_name,
        `group_number` = :group_number,
        `points` = :points
        WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            'id' => $student['id'],
            'first_name' => $student['first_name'],
            'last_name' => $student['last_name'],
            'group_number' => $student['group_number'],
            'points' => (int) $student['points'],
        ]);
    }

// public function insertStudent(Student $student): void
// {
//     $sql = "INSERT INTO `students` 
//         (`id`, `name`, `surname`, `group_number`, `points`, `hash`) 
//         VALUES (:id, :name, :surname, :group_number, :points, :hash)";

//     $stmt = $this->pdo->prepare($sql);

//     $stmt->execute([
//         'id' => $student->id,
//         'name' => $student->name,
//         'surname' => $student->surname,
//         'group_number' => $student->group_number,
//         'points' => $student->points,
//         'hash' => $student->hash,
//     ]);
// }

// public function getStudentByHash($hash)
// {
//     $sql = 'SELECT * FROM students WHERE hash = ?';
//     $stmt = $this->pdo->prepare($sql);
//     $stmt->execute([$hash]);
//     $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Student');

//     return $stmt->fetch();
// }

// public function populateTable(): void
// {
//     require __DIR__ . '/database/data.php';

//     foreach ($students as $student) {
//         $studentObj = new Student(...$student);

//         $this->insertStudent($studentObj);
//     }
// }
}