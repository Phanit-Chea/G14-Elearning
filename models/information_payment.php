<?php 
function information_student_patment($user_id) {
    global $connection;
    $statement = $connection->prepare(" SELECT courses.course_name, courses.course_price, payment.date
    FROM payment
     INNER JOIN courses ON courses.course_id = payment.course_id
    WHERE payment.user_id = :user_id;");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}