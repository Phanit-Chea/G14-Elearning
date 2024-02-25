<?php

function createPost(string $title, string $description) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description

    ]);

    return $statement->rowCount() > 0;
}

function getPost(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function getPosts() : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts");
    $statement->execute();
    return $statement->fetchAll();
}

function updateUser(string $username, string $email, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE users set username = :username, email = :email where user_id = :user_id");
    $statement->execute([
        ':username' => $username,
        ':email' => $email,
        ':user_id' => $id

    ]);

    return $statement->rowCount() > 0;
}

function deleteUser(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("DELETE from users where user_id = :user_id");
    $statement->execute([':user_id' => $id]);
    return $statement->rowCount() > 0;
}

// ===============Function Create Category================
function addCate($name, $description, $userId){
    global $connection;
    $statement=$connection->prepare("insert into categories (category_name, category_description, user_id) values(:name, :description, :userId)");
    $statement->execute([
        ':name'=> $name,
        ':description'=> $description,
        ':userId'=> $userId,
    ]);
}

function getData(){
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();
}

// ===============Function Delete Category================

function deleteCategory(int $id):bool {
    global $connection;
    $statement = $connection->prepare("delete from categories where category_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

// ===============Function edit Category================
// function getCategory(int $id)
// {
//     global $connection;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
//     $statement = $connection->prepare("select * from categories where category_id = :id");
//     $statement->execute([':id' => $id]);
//     return $statement->fetch();
// }

function updateCategory(string $name, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE categories SET category_name = :name, category_description = :description where category_id = :id");
    $statement->execute([
        ':name' => $name,
        ':description' => $description,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}
