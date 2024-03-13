<?php 

function purchaseCourse(int $courseId, int $userId): bool{
    global $connection;
    $statement = $connection->prepare("INSERT INTO payment (user_id, course_id) VALUES (:userId, :courseId)");
    $statement->execute([
        ':userId' => $userId,
        ':courseId' => $courseId
    ]);
    return $statement->rowCount()>0;
}