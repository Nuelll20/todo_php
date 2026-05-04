<?php
include("config.php");

$id = $_GET['id'];

mysqli_query($conn, "UPDATE todos SET status='selesai' WHERE id='$id'");

header("location: index.php");
?>