<?php

session_start();
require("connection.php");

if (isset($_GET["status"])) {
    $todoId = $_GET["todoId"];
    $status = $_GET["status"];
    Database::iud("UPDATE todo SET `todo_status_id` = '" . $status . "' WHERE `todo_id` = '" . $todoId . "' ");

    echo ("success");
} else {
    echo ("false");
}
