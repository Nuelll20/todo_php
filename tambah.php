<?php
include 'config.php';
$kegiatan = $_POST['kegiatan'];
$user_id = $_SESSION['user_id'];

mysqli_query($conn,"INSERT INTO todos (user_id, kegiatan) VALUES ('$user_id', '$kegiatan')");

header("location: index.php");
?>