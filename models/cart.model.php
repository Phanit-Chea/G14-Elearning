<?php 

// ============ add cart to database =================
function createCart(int $user_id, int $courses_id): bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO cart (user_id,courses_id) VALUES (:user_id, :course_id);");
    $statement->execute([
        ':user_id' => $user_id,
        ':course_id' => $courses_id
    ]);

    return $statement->rowCount() > 0;
};


// ==================== get cart to display ===================
function getCart($userId): array
{
    global $connection;
    $statement = $connection->prepare("
        SELECT courses.course_image,cart.user_id,cart.cart_id, cart.courses_id, courses.course_name,courses.course_price 
        FROM cart 
        INNER join courses ON courses.course_id = cart.courses_id 
        WHERE cart.user_id = :userId;
    ");
    $statement->bindParam(':userId', $userId);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// ====================== delete cart ========================
function deleteCart(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("DELETE from cart where cart_id = :cart_id");
    $statement->execute([':cart_id' => $id]);
    return $statement->rowCount() > 0;
}

