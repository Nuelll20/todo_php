<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query(
    $conn,
    "UPDATE todo 
SET status='selesai'
WHERE id='$id'"
);

header("Location: index.php");
?>