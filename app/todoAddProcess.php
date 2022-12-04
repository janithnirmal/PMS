<?php
require ("connection.php");

$title = $_GET["title"];
$description = $_GET["des"];
$userMail = $_GET["user"];


Database::iud("INSERT INTO todo (title, datetime_added, `description`, starting_date, ending_date, todo_importance_id, todo_urgancy_todo_urgancy_id, user_email, todo_status_id)
VALUES ('".$title."', '2022-10-15 08:18:03', '".$description."',  '2022-10-11', '2022-10-15', '1', '1', '".$userMail."', '1') ");

echo("added");