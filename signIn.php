<?php
require "app/connection.php";
session_start();
$user_rs = Database::search("SELECT * FROM user WHERE `email`='rmjanithnirmal@gmail.com' ");
$_SESSION["pms_u"] = $user_rs;
?>