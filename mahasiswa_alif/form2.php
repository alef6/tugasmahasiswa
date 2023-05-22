<!DOCTYPE html>
    <hatml lang="en">
        <head>
    <title>formulir pendaftaran</title>
</head>
<body>
    <h2>formulir pendaftaaran</h2>
    <form action ="proses_pendaftaran.php" method="post">
        <label for= "nama">nama lengkap:</label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">alamat email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="daftar">
    </form>
</body>
    </hatml>