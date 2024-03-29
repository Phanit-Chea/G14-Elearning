<?php

//==============get list trainers =================//
function get_trainers(): array
{
    global $connection;
    $statement = $connection->prepare("select * from trainers_list");
    $statement->execute();
    return $statement->fetchAll();
};

//===============get list course =============//
function get_courses($user_id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT courses.course_id, courses.course_name, courses.course_image, courses.course_price, categories.category_name
    FROM courses
    INNER JOIN categories ON categories.category_id = courses.category_id
    WHERE courses.user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

//================create course ====================//
function create_course(string $course_name, int $duration, int $course_price, int $user_id, int $category_id, string $description, string $course_image, string $video): bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO courses (course_name, course_duration, course_price, user_id, category_id, description, course_image,video_path_file) VALUES (:course_name, :course_duration, :course_price, :user_id, :category_id, :description, :course_image,:video_path_file)");
    $statement->execute([
        ':course_name' => $course_name,
        ':course_duration' => $duration,
        ':course_price' => $course_price,
        ':user_id' => $user_id,
        ':category_id' => $category_id,
        ':description' => $description,
        ':course_image' => $course_image,
        ':video_path_file' => $video
    ]);
    return $statement->rowCount() > 0;
};

//==================get list categories ================
function get_categories($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT category_id, category_name FROM categories WHERE user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


// ======== total course =========
function total_course($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(c.course_name) AS total FROM courses c where c.user_id = :user_id;");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result['total'];
};

//================Edit profile========================
function edit_profile(string $username, string $email, string $image, string $password, int $id)
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET username = :username, email = :email, image = :image, password = :password WHERE user_id = :user_id ");
    $statement->execute([
        ':username' => $username,
        ':email' => $email,
        ':image' => $image,
        ':password' => $password,
        ':user_id' => $id
    ]);
    return $statement->rowCount() > 0;
}

// ==== get the last user_id ============

function get_last_user_id()
{
    global $connection;
    $statement = $connection->prepare("SELECT user_id
    FROM users
    ORDER BY user_id DESC
    LIMIT 1;");
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result['user_id'];
}

// ======= get user_id sign in ==========
function get_user_signin($email)
{
    global $connection;
    $statement = $connection->prepare("SELECT users.user_id FROM users WHERE users.email = :email;");
    $statement->execute([
        ':email' => $email
    ]);
    return $statement->rowCount() > 0;
}

// === get course info
function course_info(int $id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM courses WHERE course_id = :id;");
    $statement->execute([
        ':id' => $id,
    ]);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
};
// ======== update course =======
function update_course(int $course_id, string $course_name, int $course_duration, int $course_price, int $course_category, string $course_description)
{
    global $connection;
    $statement = $connection->prepare("UPDATE courses SET course_name = :course_name, course_duration = :course_duration, course_price = :course_price, category_id = :category_id, description = :description WHERE course_id = :course_id");
    $statement->execute([
        ':course_id' => $course_id,
        ':course_name' => $course_name,
        ':course_duration' => $course_duration,
        ':course_price' => $course_price,
        ':category_id' => $course_category,
        ':description' => $course_description
    ]);
}
// ============ update image ==========
function update_image($course_id, $image)
{
    global $connection;
    $statement = $connection->prepare("UPDATE courses SET course_image = :course_image where course_id = :course_id;");
    $statement->execute([
        ':course_image' => $image,
        ':course_id' => $course_id
    ]);
}

// ========== update video ============
function update_video($course_id, $video)
{
    global $connection;
    $statement = $connection->prepare("UPDATE courses SET video_path_file = :video_path_file WHERE course_id = :course_id;");
    $statement->execute([
        ':video_path_file' => $video,
        ':course_id' => $course_id
    ]);
}
// insert video to table videos
function insert_video($video_path, $course_name)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO videos (video_name, file_path, video_type) VALUES (:title, :file_path, :video_type);");
    $statement->execute([
        ':title' => $course_name,
        ':file_path' => $video_path,
        ':video_type' => "Free"
    ]);
}

// ========== get number of course =====
function get_nb_course($user_id)
{
    global $connection;
    $statement = $connection->prepare(" select courses.course_name,courses.course_id from courses inner join users on users.user_id = courses.user_id where users.user_id = :user_id;");
    $statement->execute([
        ':user_id' => $user_id,
    ]);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// ======= get the name of lesson ========
function name_lesson($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT lessons.title FROM lessons 
        INNER JOIN courses ON courses.course_id = lessons.course_id 
        INNER JOIN users ON users.user_id = courses.user_id 
        WHERE users.user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// ==== insert into lessons =======

function insert_lesson(string $lesson_title, string $lesson_course, string $lesson_description, string $image)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO lessons (title, course_id, lesson_description, image)
    VALUES (:title, :course_id, :description, :image)");
    $statement->execute([
        ':title' => $lesson_title,
        ':course_id' => $lesson_course,
        ':description' => $lesson_description,
        ':image' => $image
    ]);
}


function get_all_lessons()
{
    global $connection;
    $statement = $connection->prepare("SELECT lessons.*, courses.course_name FROM lessons INNER JOIN courses ON lessons.course_id = courses.course_id;");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//  get name and cateogry of course ========
function coures_lesson($user_id)
{
    global $connection;
    $statement = $connection->prepare("
        SELECT lessons.lesson_id,courses.course_id, lessons.title, courses.course_name
        FROM lessons
        INNER JOIN courses ON lessons.course_id = courses.course_id
        INNER JOIN users ON courses.user_id = users.user_id
        WHERE users.user_id = :user_id
    ");
    $statement->execute([
        ':user_id' => $user_id
    ]);

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
};


// =======display_video=========
function getAllvideo()
{
    global $connection;
    $statement = $connection->prepare("select * from videos");
    $statement->execute();
    return $statement->fetchAll();
}
// ======== delete course =================
function  delete_course($course_id)
{
    global $connection;
    $statement = $connection->prepare("DELETE from courses where course_id = :course_id;");
    $statement->execute([
        ':course_id' => $course_id
    ]);
}

//============ delete lesson ===============
function delete_lesson($lesson_id)
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM lessons WHERE lesson_id = :lesson_id");
    $statement->execute([
        ":lesson_id" => $lesson_id
    ]);
}
// ==========update videos course=========
function update_vides($video_id, $courseName, $vd_name)
{
    global $connection;
    $statement = $connection->prepare("UPDATE videos SET video_name = :video_name , file_path = :file_path WHERE video_id = :video_id");
    $statement->execute([
        'video_name' => $vd_name,
        'file_path' => $courseName,
        'video_id' => $video_id
    ]);
    return $statement->fetchAll();
}

//=============== edit lesson ================


function edit_lesson($lesson_id, $new_lesson_title, $new_lesson_description, $image)
{

    global $connection;
    $statement = $connection->prepare("UPDATE lessons SET title = :title, lesson_description = :lesson_description, image = :image WHERE lesson_id = :lesson_id");
    $statement->execute([
        ":title" => $new_lesson_title,
        ":lesson_description" => $new_lesson_description,
        ":lesson_id" => $lesson_id,
        ":image" => $image
    ]);
    if ($statement->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}

// ============== count number of course in each trainer ============
function count_course($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(course_id) AS course_count FROM courses WHERE user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $course_count = $result['course_count'];
    return $course_count;
}
// ============delete vidoes course===========
function delete_videos($video_id)
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM videos WHERE video_id = :video_id");
    $statement->execute([
        ':video_id' => $video_id
    ]);
    return $statement->fetch();
}

// ========== count category ===============
function count_category($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(category_id) AS category_count FROM categories WHERE user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $category_count = $result['category_count'];
    return $category_count;
}

// ============ count in category ===============
function nb_course_category($category_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(course_id) AS course_count FROM courses WHERE category_id = :category_id");
    $statement->execute([
        ':category_id' => $category_id
    ]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $course_count = $result['course_count'];
    return $course_count;
}

// ========== get one category========
function total_Revenue($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT SUM(courses.course_price) AS total_price
    FROM payment
    INNER JOIN courses ON courses.course_id = payment.course_id
    INNER JOIN users ON users.user_id = courses.user_id
    WHERE users.user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result['total_price'];
}
// ============== count customer=================
function total_customer($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(payment.user_id) AS user_count
    FROM payment
    INNER JOIN courses ON courses.course_id = payment.course_id
    INNER JOIN users ON users.user_id = courses.user_id
    WHERE courses.user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result['user_count'];
}

// ============= top course selling =================
function most_selling($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT courses.course_name, courses.course_image, COUNT(courses.course_id) AS course_count, SUM(courses.course_price) AS total_price
    FROM payment
    INNER JOIN courses ON courses.course_id = payment.course_id
    WHERE courses.user_id = :user_id
    GROUP BY courses.course_id order by course_count DESC");
    $statement->execute([
        ':user_id' => $user_id
    ]);

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

// ============= get student ==============
function get_student($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT users.username, users.email, payment.date
    FROM payment
    INNER JOIN users ON users.user_id = payment.user_id
    INNER JOIN courses ON payment.course_id = courses.course_id
    WHERE courses.user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
