<?php
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
}

$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>To-DO List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Nama: Michael Angelo Praha Jeshua Immanuel || NIM: 245314003</h2>
    <a href="logout.php">Logout</a>

    <form action="proses_tambah.php" method="POST">
        <input type="text" name="kegiatan" placeholder="Masukkan tugas...">
        <button type="submit">Tambah</button>
    </form>

    <hr>

    <?php
    $data = mysqli_query($conn, "SELECT * FROM todos WHERE user_id='$user_id'");

    while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <p>
            <?= $d['kegiatan']; ?>

            <a href="selesai.php?id=<?= $d['id']; ?>">Selesai</a>
            <a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
        </p>
    <?php } ?>
</body>

</html>