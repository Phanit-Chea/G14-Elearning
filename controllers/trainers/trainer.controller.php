<?php
require ("database/database.php");
require ("models/trainer.model.php");
$trainers = get_trainers();
require ("views/trainers/trainer_list.view.php");


