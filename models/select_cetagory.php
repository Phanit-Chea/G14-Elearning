<?php 



function select_lesson($user_id){
    global $connection;
    $statement = $connection->prepare("SELECT lessons.lesson_id, lessons.title
    FROM lessons
    INNER JOIN courses ON courses.course_id = lessons.course_id
    INNER JOIN users ON users.user_id = courses.user_id
    WHERE courses.user_id = :user_id;");

    $statement->execute([
        ':user_id' => $user_id
    ]);
    return $statement->fetchAll();
}
?>