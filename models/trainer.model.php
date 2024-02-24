<?php
function get_trainers() :array{
    global $connection;
    $statement = $connection->prepare("SELECT users.username,users.email,users.image,users.image, roles.role_type,categories.category_name FROM users INNER JOIN roles on users.role_id = roles.role_id INNER JOIN categories ON users.user_id = categories.user_id WHERE roles.role_type = 'teacher';");
    $statement->execute();
    return $statement->fetchAll();

};

function get_students_list() :array{
    global $connection;
    $statement = $connection->prepare("SELECT * from students_list");
    $statement->execute();
    return $statement->fetchAll();

};

function select_role(string $role){
    global $connection;
    $statement = $connection->prepare("SELECT roles.role_type FROM users INNER JOIN roles on roles.role_id = users.role_id WHERE roles.role_type = $role;");
    return $statement->execute();
};

function create_course(string $course_name, string $duration, string $course_price,string $category_name) : bool{
    global $connection;
    $category_id = "select categories.category_id from courses inner join categories on categories.category_id = courses.category_id where categories.category_name = $category_name group by $category_name;";
    $statement = $connection -> prepare("INSERT INTO courses (course_name , duration ,price,category_id,user_id) VALUES ( :course_name, :duration, :price, :category_id,:user_id)");
    $statement -> execute([
        ':course_name' => $course_name,
        ':duration' => $duration,
        ':price' => $course_price,
        ':category_id' => $category_id,
    ]);
    return $statement->rowCount() > 0;
}
?>

