<?php
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="header">
            <img src="foto1.jpg" class="foto">
            <h2>Michael Angelo</h2>
            <p>NIM : 245314003</p>
        </div>

        <div class="todo-box">

            <h2>TO DO LIST</h2>

            <form action="tambah.php" method="POST">

                <input type="text" name="kegiatan" placeholder="Masukkan kegiatan..." required>

                <button type="submit">Tambah</button>

            </form>

            <br>

            <?php
            $query = mysqli_query(
                $conn,
                "SELECT * FROM todo ORDER BY id DESC"
            );

            while ($data = mysqli_fetch_assoc($query)) {
                ?>

                <div class="todo-item">

                    <?php
                    if ($data['status'] == "selesai") {
                        echo "<s>" . $data['kegiatan'] . "</s>";
                    } else {
                        echo $data['kegiatan'];
                    }
                    ?>

                    <div class="aksi">

                        <a href="selesai.php?id=<?= $data['id'] ?>">
                            Selesai
                        </a>

                        <a href="hapus.php?id=<?= $data['id'] ?>" class="hapus">
                            Hapus
                        </a>

                    </div>

                </div>

            <?php } ?>

            <a href="logout.php" class="logout">
                Logout
            </a>

        </div>

    </div>

</body>

</html>