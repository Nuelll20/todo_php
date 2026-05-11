<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-body">

    <div class="login-box">
        <h2>LOGIN TODO LIST</h2>

        <form action="proses_login.php" method="POST">

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>

        </form>
    </div>

</body>

</html>