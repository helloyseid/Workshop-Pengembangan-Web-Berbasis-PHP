<?php

$error = "";
$berhasil = false;

if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    if (empty($nama)) {
        $error = "Nama wajib diisi.";
    } elseif (empty($email)) {
        $error = "Email wajib diisi.";
    } elseif (empty($pesan)) {
        $error = "Pesan wajib diisi.";
    } else {
        $berhasil = true;
    }
}

include 'header.php';

?>

<section class="card">
    <h2>Hubungi Kami</h2>
    <p>
        Silakan kirim pesan kepada kami
        melalui form berikut.
    </p>
    <?php if ($error) { ?>
        <div class="error">
            <?= $error ?>
        </div>
    <?php } ?>

    <?php if ($berhasil) { ?>
        <div class="success">
            <h3>
                Terima kasih, <?= $nama ?>!
            </h3>
            <p>
                Pesan kamu berhasil diterima.
            </p>
            <p>
                Kami akan menghubungi kamu
                melalui email:
                <strong><?= $email ?></strong>
            </p>
        </div>
    <?php } ?>

    <form method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        
        <label for="pesan">Pesan</label>
        <textarea id="pesan" name="pesan" rows="5"></textarea>
        
        <button type="submit">Kirim Pesan</button>
    </form>
</section>

<?php
include 'footer.php';
?>