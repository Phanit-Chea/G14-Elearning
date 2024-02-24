<?php 
function createAccount(string $name, string $email,string $password,$image, $role_id): bool{

    global $connection;
    $statement = $connection->prepare("INSERT INTO users (username,email,password,role_id,image) VALUES(:username, :email, :password, :role_id, :image)");
    $statement->execute([
        ':username'=>$name,
        ':email'=>$email,
        ':password'=>$password,
        ':role_id'=>  $role_id,
        ':image' => $image
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
