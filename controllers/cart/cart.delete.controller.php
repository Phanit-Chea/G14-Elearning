<?php

require "../../database/database.php";
require "../../models/cart.model.php";

$id = $_GET['id'] ?? null;
if (isset($id)) {
    deleteCart($id);
    header('Location: /cart');
}