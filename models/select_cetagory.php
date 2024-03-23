<?php
global $connection;

function select_lesson($user_id){
    global $connection;
    $statement = $connection->prepare(" select title,lesson_id from lessons inner join courses on courses.course_id = lessons.course_id
    inner join users on users.user_id = courses.user_id where courses.user_id = :user_id");

    $statement->execute([
        ':user_id'=>$user_id
    ]);
    return $statement->fetchAll();
}
?>