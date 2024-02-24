<?php
function get_trainers() :array{
    global $connection;
    $statement= $connection->prepare("select * from trainers_list;");
    $statement->execute();
    return $statement->fetchAll();

};



