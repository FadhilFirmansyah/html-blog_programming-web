<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Page</title>
        <link rel="stylesheet" href="../assets/style/style.css">
    </head>
    <body style="background-color: #181818;">
        <ul class="navbar-page">
            <li><a href="../">Programming</a></li>
            <li><a href="../algoritma/">Algoritma</a></li>
            <li><a href="../profile/">Profile</a></li>
            <li style="float: right;"><a href="../profile/#response">Kembali</a></li>
        </ul>
        <br>
        <h1>
            Terima Kasih Sudah Mengisi <span style="background-color: #8758FF; padding: 0 65px 0 65px; font-style:italic; font-family:Helvetica"><?= $_POST["nama"] ?></span>
        </h1>
        <blockquote>
            <?= $_POST["pesan"] ?>
        </blockquote>
    </body>
</html>