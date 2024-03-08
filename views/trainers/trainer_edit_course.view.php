<script src="../../vendor/js/searchcourseontrainer.js" defer></script>
<?php
require 'layouts/trainer/navbar.php';
?>

<body>
    <?php

    $course_info = course_info($id);
    foreach ($course_info as $course) :


    ?>
        <main class="h-100 ">
            <h4 class="text-center mt-5" id="exampleModalLabel">Edit information of course</h4>
            <div class="   bg-opacity-50">
                <form action="controllers/trainers/trainer_update_course.controller.php" method="POST" enctype="multipart/form-data" class="w-100 row g-2 d-flex justify-content-between bg bg-opacity-25" style="margin-right: 20px ;">

                    <div class="row">
                        <div class="col-5" style="display: flex; flex-direction: column; align-items: center;">
                            <img src="../../assets/images/courses/4by3/<?= $course['course_image'] ?>" alt="" class="p-3" id="courseImage" style="width:500px; height:300px; object-fit: contain;">
                            <button type="button" class="btn btn-outline-danger btn-sm mb-2 align-center" onclick="document.getElementById('imageInput').click()">Change image</button>
                            <input type="file" id="imageInput" style="display:none" name="course_image" onchange="previewImage(event)">
                        </div>
                        <div class="col">
                            <div class="form-group mt-3">
                                <input type="hidden" name="course_id" value="<?= $course['course_id'] ?>">
                                <input type="text" class="form-control bg-white" name="course_name" placeholder="course_name" value="<?= $course['course_name'] ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="number" class="form-control bg-white" name="course_duration" placeholder="Course duration" value="<?= $course['course_duration'] ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control decimal-input" name="course_price" placeholder="Course Price" aria-label="Decimal Input" value="<?= $course['course_price'] ?>" required>
                            </div>
                            <?php
                            $categories = get_categories();
                            ?>
                            <select class="form-select mt-3" aria-label="Default select example" name="course_category" required>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" name="description" required><?= $course['description'] ?></textarea>

                        </div>
                    </div>

                    <div class="col mt-5 h-100 ">
                        <video controls crossorigin="anonymous" playsinline poster="" id="courseVideo" style="width:100%; height:60vh;">
                            <source src="../../assets/images/videos/<?= $course['video_path_file'] ?>" type="video/mp4">
                            <track kind="captions" label="English" srclang="en" src="../../assets/images/videos/en.vtt" default>
                            <track kind="captions" label="French" srclang="fr" src="../../assets/images/videos/fr.vtt">
                        </video>
                        <div class=" d-flex flex-column align-items-center">
                            <button type="button" class="btn btn-outline-danger btn-sm mb-2 align-center mt-3" onclick="document.getElementById('videoInput').click()">Change video</button>
                        </div>
                        <input type="file" id="videoInput" style="display:none" name="course_video" onchange="updateVideo(event)">
                    </div>
                    <button type="submit" class="btn btn-primary m-4">Update this course</button>

                    <script>
                        function updateVideo(event) {
                            var video = document.getElementById('courseVideo');
                            var file = event.target.files[0];
                            var videoURL = URL.createObjectURL(file);
                            video.src = videoURL;
                        }
                    </script>
                    < </form>
            </div>
        </main>
    <?php endforeach; ?>
</body>
<script src="vendor/js/change_image.js" defer></script>