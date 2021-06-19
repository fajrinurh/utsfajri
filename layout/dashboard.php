<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Untuk Album">
    <meta name="author" content="Fajri">
    <meta name="keywords" content="sistem, album, baru"> 
    <title>Sistem Pengeluaran Album Baru</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    

    <main>
        <header>
        <img src="<?php echo ASSET; ?>image/album.jpg" alt="[IMG]" width="100%">

        </header>

        <nav>

            <ul>
                <li>
                    <a href="index.php" class="active">Dashboard</a>
                </li>
                <li>
                    <a href="index.php?page=album_tampil">Album</a>
                </li>
                <li>
                    <a href="index.php?page=category_tampil">Category</a>
                </li>
                <li>
                    <a href="index.php?page=photos_tampil">Photos</a>
                </li>
                <li>
                    <a href="index.php?page=post_tampil">Post</a>
                </li>
                <li>
                <li>
                    <a href="login_logout.php">Logout</a>
                </li>
            </ul>
        </nav>

        <section>
            <?php
            if (isset($_GET['page'])) {
                include $_GET['page'] . ".php";
            } else {
                include "main_index.php";
            }

            ?>

        </section>

        <footer>
            Copyright &copy; 2020 'Fajrinurhidayahti
        </footer>
    </main>
</body>
</html>