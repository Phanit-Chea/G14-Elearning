<?php
function get_trainers() :array{
    global $connection;
    $statement= $connection->prepare("select * from trainers_list;");
    $statement->execute();
    return $statement->fetchAll();

};

function get_students_list() :array{
    global $connection;
    $statement = $connection->prepare("SELECT * from students_list");
    $statement->execute();
    return $statement->fetchAll();
}

