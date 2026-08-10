<?php

$visi = "Menjadi wadah bagi siswa untuk berkembang, berkarya, dan berprestasi.";

$misi = [
    "Mengembangkan minat dan bakat siswa.",
    "Meningkatkan kemampuan bekerja sama.",
    "Mendorong siswa untuk berani berkarya.",
    "Mempersiapkan siswa menghadapi dunia teknologi."
];

include 'header.php';

?>

<section class="card">
    <h2>Tentang Kami</h2>
    <p>
        Ekstrakurikuler
        <strong>Teknologi dan Komputer</strong>
        merupakan wadah bagi siswa yang
        memiliki minat terhadap teknologi.
    </p>
    <h3>Visi</h3>
    <p>
        <?= $visi ?>
    </p>
</section>

<section class="card">
    <h2>Misi</h2>
    <ol>
        <?php foreach ($misi as $item) { ?>
            <li>
                <?= $item ?>
            </li>
        <?php } ?>
    </ol>
</section>

<?php
include 'footer.php';
?>