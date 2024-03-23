<?php 
function store_course_student($user_id){
    global $connection;
    $statement = $connection->prepare("SELECT * from payment inner join courses on courses.course_id = payment.course_id where payment.user_id = :user_id");
    $statement->execute([':user_id'=> $user_id]);
    return $statement->fetchAll();
}










?>