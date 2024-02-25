<?php
function get_trainers(): array
{
    global $connection;
    $statement = $connection->prepare("select * from trainers_list");
    $statement->execute();
    return $statement->fetchAll();
};

function get_courses() :array{
    global $connection;
    $statement = $connection->prepare("select * from courses_list;");
    $statement->execute();
    return $statement->fetchAll();


}

function create_course(string $course_name, int $duration, int $course_price, int $user_id, int $category_id, string $description, string $course_image): bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO courses (course_name, course_duration, course_price, user_id, category_id, description, course_image) VALUES (:course_name, :course_duration, :course_price, :user_id, :category_id, :description, :course_image)");
    $statement->execute([
        ':course_name' => $course_name,
        ':course_duration' => $duration,
        ':course_price' => $course_price,
        ':user_id' => $user_id,
        ':category_id' => $category_id,
        ':description' => $description,
        ':course_image' => $course_image,
    ]);
    return $statement->rowCount() > 0;
}

function get_categories()
{
    global $connection;
    $statement = $connection->prepare("SELECT category_id, category_name FROM categories");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
