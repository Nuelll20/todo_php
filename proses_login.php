<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);
    $_SESSION['user_id'] = $data['id'];
    header("location: index.php");
} else {
    echo "Login Gagal!";
}
?>