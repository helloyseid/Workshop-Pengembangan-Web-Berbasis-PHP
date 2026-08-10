<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>
        Ekstrakurikuler Sekolah
    </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>
                Ekstrakurikuler Sekolah
            </h1>
            <p>
                Belajar, Berkarya, dan Berprestasi
            </p>
            <nav>
                <a href="index.php" class="<?= $halaman == 'index.php' ? 'active' : '' ?>">Home</a>
                <a href="tentang.php" class="<?= $halaman == 'tentang.php' ? 'active' : '' ?>">Tentang</a>
                <a href="galeri.php" class="<?= $halaman == 'galeri.php' ? 'active' : '' ?>">Galeri</a>
                <a href="kontak.php" class="<?= $halaman == 'kontak.php' ? 'active' : '' ?>">Kontak</a>
            </nav>
        </div>
    </header>

    <main class="container">