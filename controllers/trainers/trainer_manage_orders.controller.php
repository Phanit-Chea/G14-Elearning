<?php
require("database/database.php");
require("models/trainer.model.php");
$orders = get_orders();
require ("views/trainers/trainer_manage_orders.view.php");
?>
