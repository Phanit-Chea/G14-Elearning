<?php
// ====== 
function course_view(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT courses.course_name,courses.course_id, categories.category_name, courses.course_price, users.image, courses.course_image, COUNT(student_enrollment.user_id)
    FROM student_enrollment
    INNER JOIN courses ON courses.course_id = student_enrollment.course_id
    INNER JOIN categories ON categories.category_id = courses.category_id
    INNER JOIN users ON users.user_id = courses.user_id
    GROUP BY courses.course_id, courses.course_name, categories.category_name, courses.course_price, users.image, courses.course_image;");
    $statement->execute();
    $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $courses;
}

function top_courses(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM top_course;");
    $statement->execute();
    $top_courses = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $top_courses;
}
function get_course(int $id): array {
    global $connection;
    $statement = $connection->prepare("SELECT * FROM courses WHERE course_id = :id;");
    $statement->execute([
        ':id' => $id
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
function get_name_trainer($id) {
    global $connection;
    $statement = $connection->prepare("SELECT users.username,users.image,users.email from courses inner join users on users.user_id = courses.user_id where courses.course_id = :id");
    $statement->execute([
        ":id" => $id
    ]);
    return $statement->fetch();
}

