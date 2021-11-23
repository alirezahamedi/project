<?php
require_once "db.php";

$first_name = $_POST["first-name"];
$last_name = $_POST["last-name"];
$phone = $_POST["phone"];
$username = $_POST["username"];
$password = md5($_POST["password"]);
$email = $_POST["email"];
$check = mysqli_query($db, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($check) == 0) {
    $register = mysqli_query($db, "INSERT INTO users(firstname, lastname, phone, username, email, password) VALUES ('$first_name','$last_name','$phone','$username','$email','$password')");
}
if ($register) {
    $_SESSION['loggedin'] = $username;
    header('Location: ../profile.php');
} else {
    header('Location: ../err1.html');
}
?>