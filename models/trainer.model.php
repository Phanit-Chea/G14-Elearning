<?php
function get_trainers(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT users.username,users.email,users.profile,users.profile,users.date_of_birth,roles.role_type,categories.category_name FROM users INNER JOIN roles on users.role_id = roles.role_id INNER JOIN categories ON users.user_id = categories.user_id WHERE roles.role_type = 'teacher';");
    $statement->execute();
    return $statement->fetchAll();
};
function get_roles(): array
{
    global $connection;
    $statement = $connection->prepare("select users.username from roles inner join users on users.role_id = roles.role_id where roles.role_type = 'teacher';");
    $statement->execute();
    return $statement->fetchAll();
};

function get_students() :array{
    global $connection;
    $statement = $connection->prepare("SELECT users.username,users.email,users.profile,users.profile,users.date_of_birth,roles.role_type,categories.category_name FROM users INNER JOIN roles on users.role_id = roles.role_id INNER JOIN categories ON users.user_id = categories.user_id WHERE roles.role_type = 'student';");
    $statement->execute();
    return $statement->fetchAll();

};

function select_role(string $role)
{
    global $connection;
    $statement = $connection->prepare("SELECT roles.role_type FROM users INNER JOIN roles on roles.role_id = users.role_id WHERE roles.role_type = $role;");
    return $statement->execute();
}
function select_all_roles()
{
    global $connection;
    $statement = $connection->prepare("select users.username from roles inner join users on users.role_id = roles.role_id where roles.role_type = 'teacher';");
    return $statement->execute();
    // return $statement->fetchall();

}
function create_course(string $course_name, string $duration, string $course_price, int $user_id, int $category_id, string $description, $course_image): bool
{
    $user_id = 1;
    global $connection;
    $statement = $connection->prepare("INSERT INTO courses (course_name , duration ,price,user_id,category_id,description,course_image) VALUES ( :course_name, :duration, :price,:user_id, :category_id,:description,:course_image)");
    // echo $category_id;
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
}
