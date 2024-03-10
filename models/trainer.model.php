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
function get_courses(): array
{
    global $connection;
    $statement = $connection->prepare("select * from courses_list;");
    $statement->execute();
    return $statement->fetchAll();
};

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
function get_categories()
{
    global $connection;
    $statement = $connection->prepare("SELECT category_id, category_name FROM categories");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

// ====selectcour

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
    $statement = $connection->prepare("INSERT INTO videos (title, file_path, video_type) VALUES (:title, :file_path, :video_type);");
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

// ==== insert into lessons =======
function insert_lesson($lesson_title, $lesson_course, $lesson_description)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO lessons (title, course_id, lesson_description) VALUES (:title, :course, :description)");
    $statement->execute([
        ':title' => $lesson_title,
        ':course' => $lesson_course,
        ':description' => $lesson_description
    ]);
}

//  get name and cateogry of course ========
function coures_lesson($user_id)
{
    global $connection;
    $statement = $connection->prepare("
        SELECT courses.course_id, lessons.title, courses.course_name
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
// ======== get nub of free video =======
function nb_vdo_free($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(videos.title) FROM videos 
        INNER JOIN lessons ON lessons.lesson_id = videos.lesson_id 
        INNER JOIN courses ON courses.course_id = lessons.course_id 
        INNER JOIN users ON users.user_id = courses.user_id 
        WHERE users.user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// ======== get number of lesson that not free =============
function nb_vdo_not_free($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(videos.title) FROM videos 
        INNER JOIN lessons ON lessons.lesson_id = videos.lesson_id 
        INNER JOIN courses ON courses.course_id = lessons.course_id 
        INNER JOIN users ON users.user_id = courses.user_id 
        WHERE users.user_id = :user_id and video_type != 'free'");
    $statement->execute([
        ':user_id' => $user_id
    ]);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
