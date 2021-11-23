<?php
$db = mysqli_connect('localhost', 'root', '', 'alireza_users');
session_start();
if (isset($_SESSION['loggedin'])) {
    $user_username = $_SESSION['loggedin'];
} else {
    $user_username = "";
}
?>