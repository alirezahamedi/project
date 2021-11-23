<?php
require_once 'db.php';

$username = $_POST["username"];
$password = md5($_POST["password"]);

$check = mysqli_query($db, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($check) > 0) {
    $_SESSION['loggedin'] = $username;
    header('Location: ../profile.php');
} else {
    header('Location: ../err.html');
}
?>