<?php

$namaEkstrakurikuler = "Teknologi dan Komputer";
$jumlahAnggota = 35;
$jadwal = [
    "Senin - 15:00",
    "Rabu - 15:00",
    "Jumat - 14:00"
];

include 'header.php';

?>

<section class="hero">
    <h2>
        Selamat Datang!
    </h2>
    <p>
        Selamat datang di website
        Ekstrakurikuler
        <?= $namaEkstrakurikuler ?>.
    </p>
    <p>
        Saat ini kami memiliki
        <strong><?= $jumlahAnggota ?></strong>
        anggota.
    </p>
</section>

<section class="card">
    <h2>Jadwal Kegiatan</h2>
    <ul>
        <?php foreach ($jadwal as $hari) { ?>
            <li>
                <?= $hari ?>
            </li>
        <?php } ?>
    </ul>
</section>

<section class="card">
    <h2>Informasi</h2>
    <?php if ($jumlahAnggota >= 30) { ?>
        <p>
            Anggota kami cukup banyak!
            Yuk terus berkembang bersama.
        </p>
    <?php } else { ?>
        <p>
            Yuk ajak teman-temanmu
            untuk bergabung!
        </p>
    <?php } ?>
</section>

<?php
include 'footer.php';
?>