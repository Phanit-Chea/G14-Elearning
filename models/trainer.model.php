<?php

//==============get list trainers =================//
function get_trainers(): array
{
    global $connection;
    $statement = $connection->prepare("select * from trainers_list");
    $statement->execute();
    return $statement->fetchAll();
};

//===============get list course =============//
function get_courses(): array
{
    global $connection;
    $statement = $connection->prepare("select * from courses_list;");
    $statement->execute();
    return $statement->fetchAll();
};

//================create course ====================//
function create_course(string $course_name, int $duration, int $course_price, int $user_id, int $category_id, string $description, string $course_image,string $video): bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO courses (course_name, course_duration, course_price, user_id, category_id, description, course_image,video_path_file) VALUES (:course_name, :course_duration, :course_price, :user_id, :category_id, :description, :course_image,:video_path_file)");
    $statement->execute([
        ':course_name' => $course_name,
        ':course_duration' => $duration,
        ':course_price' => $course_price,
        ':user_id' => $user_id,
        ':category_id' => $category_id,
        ':description' => $description,
        ':course_image' => $course_image,
        ':video_path_file' => $video
    ]);
    return $statement->rowCount() > 0;
};

//==================get list categories ================
function get_categories()
{
    global $connection;
    $statement = $connection->prepare("SELECT category_id, category_name FROM categories");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

// == insert video 

// ====== select row count of table ===========
// function get_nb_row(){
//     global $connection;
//     $statement = $connection->prepare("SELECT COUTN(*) AS row_count FROM users;");
//     $statement->execute();
//     return $statement->rowCount()>0;
// }

function get_last_user_id()
{
    global $connection;
    $statement = $connection->prepare("SELECT user_id
    FROM users
    ORDER BY user_id DESC
    LIMIT 1;");
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result['user_id'];
}

// ======= get user_id sign in ==========
function get_user_signin($email) {
    global $connection;
    $statement = $connection->prepare("SELECT users.user_id FROM users WHERE users.email = :email;");
    $statement->execute([
        ':email' => $email
    ]);
    return $statement->rowCount() > 0;
}