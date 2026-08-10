<?php

$kegiatan = [
    "Latihan Rutin",
    "Lomba Antar Sekolah",
    "Seminar Teknologi",
    "Workshop Kreativitas",
    "Kegiatan Sosial",
    "Study Tour"
];

include 'header.php';

?>

<section class="card">
    <h2>Galeri Kegiatan</h2>

    <?php if (count($kegiatan) > 0) { ?>
        <p>
            Berikut adalah beberapa kegiatan
            yang dilakukan oleh anggota kami.
        </p>
        <div class="gallery">
            <?php foreach ($kegiatan as $item) { ?>
                <div class="gallery-item">
                    <h3>
                        <?= $item ?>
                    </h3>
                    <p>
                        Kegiatan ekstrakurikuler
                        untuk mengembangkan kemampuan
                        dan pengalaman siswa.
                    </p>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <p>
            Belum ada kegiatan.
        </p>
    <?php } ?>
</section>

<?php
include 'footer.php';
?>