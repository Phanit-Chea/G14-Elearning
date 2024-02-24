<?php
function get_trainers(): array
{
    global $connection;
    $statement = $connection->prepare("select * from trainers_list");
    $statement->execute();
    return $statement->fetchAll();

};

function create_course(string $course_name, string $duration, string $course_price, int $user_id, int $category_id, string $description, $course_image): bool
{
    $user_id = 1;
    global $connection;
    $statement = $connection->prepare("INSERT INTO courses (course_name , duration ,price,user_id,category_id,description,course_image) VALUES ( :course_name, :duration, :price,:user_id, :category_id,:description,:course_image)");
    $statement->execute([
        ':course_name' => $course_name,
        ':duration' => $duration,
        ':price' => $course_price,
        ':user_id' => $user_id,
        ':category_id' => $category_id,
        ':description' => $description,
        ':course_image' => $course_image,
    ]);
    return $statement->rowCount() > 0;
};

function get_categories(){
    global $connection;
    $statement = $connection->prepare("select categories.category_name from categories;");
    return $statement->execute();
};