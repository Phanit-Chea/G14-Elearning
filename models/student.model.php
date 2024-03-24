<?php
// ====== course detail =====================
function course_view_all(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT courses.course_name, courses.course_id, categories.category_name, courses.course_price, users.image, courses.course_image
    FROM courses
    INNER JOIN categories ON categories.category_id = courses.category_id
    INNER JOIN users ON users.user_id = courses.user_id 
    GROUP BY courses.course_id, courses.course_name, categories.category_name, courses.course_price, users.image, courses.course_image");
    $statement->execute();
    $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $courses;
}
function course_view($user_id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT courses.course_name, courses.course_id, categories.category_name, courses.course_price, users.image, courses.course_image
    FROM courses
    INNER JOIN categories ON categories.category_id = courses.category_id
    INNER JOIN users ON users.user_id = courses.user_id 
    WHERE users.user_id = :user_id
    GROUP BY courses.course_id, courses.course_name, categories.category_name, courses.course_price, users.image, courses.course_image");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    $courses = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $courses;
}
// ============= get top course =============
function top_courses(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM top_course;");
    $statement->execute();
    $top_courses = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $top_courses;
}
// =========== get one coure ========
function get_course(int $course_id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM courses WHERE course_id= :id");
    $statement->execute([
        ':id' => $course_id
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
// =========== get the specifc name of trainer ==============
function get_name_trainer($id)
{
    global $connection;
    $statement = $connection->prepare("SELECT users.username,users.image,users.email from courses inner join users on users.user_id = courses.user_id where courses.course_id = :id");
    $statement->execute([
        ":id" => $id
    ]);
    return $statement->fetch();
}

// =========== get the list of lesson ============
function get_name_lessons($course_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT lessons.lesson_id, lessons.title, lessons.image, courses.course_name, users.username 
                                      FROM lessons 
                                      INNER JOIN courses ON courses.course_id = lessons.course_id 
                                      INNER JOIN users ON users.user_id = courses.user_id 
                                      WHERE lessons.course_id = :course_id");
    $statement->execute([
        ':course_id' => $course_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// ======= get video by in each lesson
function video_free($lesson_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM videos where videos.lesson_id = :lesson_id");
    $statement->execute([
        ':lesson_id' => $lesson_id,
    ]);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// =========== get all videos ================
function get_all_videos($lesson_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * from videos where lesson_id = :lesson_id;");
    $statement->execute([
        ':lesson_id' => $lesson_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

//============= count number of lesson ============
function count_nb_lesson($course_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(lessons.lesson_id) AS lesson_count FROM lessons WHERE lessons.course_id = :course_id");
    $statement->execute([
        ':course_id' => $course_id
    ]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result['lesson_count'];
}

// ============== total course for student ==============


// ========== count total spending ====================
function total_spending($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT SUM(courses.course_price)
        FROM payment
        INNER JOIN courses ON courses.course_id = payment.course_id
        WHERE payment.user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);

    $result = $statement->fetchColumn();
    return $result;
}
