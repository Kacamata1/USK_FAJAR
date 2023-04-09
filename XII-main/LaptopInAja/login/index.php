<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container">
        <h2 class="judul">Login In Here</h2><hr>
        <form action="proses.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="username"><br><br>

            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="password"><br><br>
            <button type="submit" name="login" class="btn">Login</button>
            <br><br>
            <div class="register">
                <small>Belum Punya Akun? <a href="../register/index.php">Silahkan Daftar</a></small>
            </div>
        </form>
    </div>
</body>

</html>