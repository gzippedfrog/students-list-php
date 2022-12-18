UPDATE `students`
SET `first_name` = :first_name,
    `last_name` = :last_name,
    `group_number` = :group_number,
    `points` = :points
WHERE id = :id