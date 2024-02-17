<?php 
function createAccount(string $name,$email,string $password, int $role = 2): bool{

    global $connection;
    $statement = $connection->prepare("INSERT INTO users (username,email,password,role) VALUES(:username, :email, :password, :role)");
    $statement->execute([
        ':username'=>$name,
        ':email'=>$email,
        ':password'=>$password,
        ':role'=>  $role
    ]);
    return $statement->rowCount() > 0;
}


function get_values_from_input( string $email){
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email =:email");
    $statement->execute([
        ':email'=>$email,
    ]);
    if($statement->rowCount()>0){
        return $statement->fetch();
    }else{
        return [];
    }
}
