<?php
require("../../database/database.php");
require("../../models/trainer.model.php");

    $video_id = $_GET['id'];
    // Retrieve the video information from the database
    $video = delete_videos($video_id);
    echo $video;
    if ($video) {
        // Delete the video file
        $video_path = '../../assets/images/videos/' . $video['video_name'];
        if (file_exists($video_path)) {
            unlink($video_path);
        }
        exit();
    }
    header('Location: /trainer_manage_video');

