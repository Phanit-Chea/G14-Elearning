<?php 

function purchaseCourse(int $courseId, int $userId, string $date): bool{
    global $connection;
    $statement = $connection->prepare("INSERT INTO payment (user_id, course_id, date) VALUES (:userId, :courseId, :date)");
    $statement->execute([
        ':userId' => $userId,
        ':courseId' => $courseId,
        ':date' => $date
    ]);
    return $statement->rowCount()>0;
}


function isPaymentExist(int $courseId, int $userId): bool{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM payment WHERE course_id = :courseId AND user_id = :userId");
    $statement->execute([
        ':userId' => $userId,
        ':courseId' => $courseId
    ]);
    return $statement->rowCount()>0;
}

// ========== get all payment to display on admin payment ========
function getAllPayments(): array{
    global $connection;
    $statement = $connection->prepare("
    SELECT payment.payment_id, courses.course_name, users.email, courses.course_price, payment.date
    FROM payment 
    INNER JOIN users ON users.user_id = payment.user_id 
    INNER JOIN courses ON courses.course_id = payment.course_id");
    $statement->execute();
    return $statement->fetchAll();
}




