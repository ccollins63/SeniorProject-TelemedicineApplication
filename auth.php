<?php
session_start();
if (empty($_SESSION['userID'])) {
    // The username session key does not exist or it's empty.
    header('location: /login.php');
    exit;
}