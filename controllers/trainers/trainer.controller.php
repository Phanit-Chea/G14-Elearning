<?php
require "models/trainer.model.php";
require "database/database.php";
$list_trainers = get_trainers();
require "views/trainers/trainer_list.view.php";


