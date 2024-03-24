<?php 
function information_student_patment(){
    global $connection;
    $statement = $connection->prepare("SELECT courses.course_name,courses.course_price ,payment.date from payment inner join courses on courses.course_id = payment.course_id");
    $statement->execute([]);
    return $statement->fetchAll();
}