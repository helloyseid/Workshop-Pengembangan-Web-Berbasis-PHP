# Mini Project Bagian 4 - Finalisasi Website

> **Durasi:** ±45 Menit
> **Level:** Pemula
> **Konsep:** `include`, variable, array, `foreach`, `if`, form, navigasi, struktur website, final testing
> **Prerequisite:** Mini Project Bagian 1, 2, dan 3
>
> **Target:** Menyelesaikan website sederhana berbasis PHP dengan struktur yang rapi dan menerapkan seluruh materi workshop.

---

## Tujuan

Pada Mini Project sebelumnya kita sudah memiliki beberapa halaman:

```text
Home
Tentang
Galeri
Kontak
```

Kita juga sudah mempelajari:

* Variable
* Array
* `if`
* `foreach`
* Form
* `$_POST`
* `include`

Sekarang kita akan menggabungkan semuanya menjadi satu website yang lebih rapi.

Pada bagian ini kita akan:

1. Memahami `include` lebih dalam.
2. Merapikan `header.php`.
3. Merapikan `footer.php`.
4. Membuat navigasi aktif.
5. Menggunakan variable untuk menentukan halaman.
6. Menggunakan array untuk data website.
7. Menggunakan `foreach` untuk menampilkan data.
8. Menggunakan `if` untuk menentukan kondisi.
9. Memastikan seluruh halaman terhubung.
10. Melakukan final testing.

---

## Struktur Project Final

Pada akhir workshop, struktur project kita akan menjadi:

```text
workshop-php/
│
├── assets/
│   └── css/
│       └── style.css
│
├── header.php
├── footer.php
├── index.php
├── tentang.php
├── galeri.php
└── kontak.php
```

Inilah project yang nantinya dapat kalian tunjukkan sebagai hasil workshop.

---

## Bagian 1 - Apa Itu `include`?

Sebelumnya kita sudah sering melihat:

```php
include 'header.php';
```

dan:

```php
include 'footer.php';
```

Tetapi sebenarnya apa yang dilakukan `include`?

`include` digunakan untuk memasukkan isi file PHP lain ke dalam file yang sedang dijalankan.

Contoh:

```text
index.php
```

memiliki:

```php
include 'header.php';
```

Maka PHP akan mengambil isi:

```text
header.php
```

dan memasukkannya ke dalam halaman.

Secara sederhana:

```text
index.php

    ↓

include header.php

    ↓

header.php
```

---

## Mengapa `include` Berguna?

Bayangkan kita memiliki 10 halaman.

Setiap halaman membutuhkan:

```text
Header
Navigasi
Footer
```

Tanpa `include`, kita harus menulis kode header dan footer di semua halaman.

Misalnya:

```text
index.php
tentang.php
galeri.php
kontak.php
profil.php
kegiatan.php
berita.php
...
```

Jika desain navigasi berubah, kita harus mengubah semua file.

Ini merepotkan.

Dengan `include`:

```text
header.php
footer.php
```

cukup dibuat satu kali.

Semua halaman menggunakannya.

---

## Konsepnya

```text
                 header.php
                     ↑
                     │
        ┌────────────┼────────────┐
        │            │            │
     index.php   tentang.php   galeri.php
        │            │            │
        └────────────┼────────────┘
                     │
                     ↓
                 footer.php
```

Inilah salah satu cara membuat struktur website lebih terorganisir.

---

## Bagian 2 - Merapikan `header.php`

Sekarang kita akan membuat `header.php` lebih baik.

Buka:

```text
header.php
```

Ganti seluruh isinya dengan:

```php
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
```

---

## Apa Itu `$_SERVER['PHP_SELF']`?

Kita menggunakan:

```php
$_SERVER['PHP_SELF']
```

untuk mengetahui nama file PHP yang sedang dibuka.

Misalnya pengguna membuka:

```text
index.php
```

maka:

```php
$_SERVER['PHP_SELF']
```

mengarah ke halaman tersebut.

Kemudian:

```php
basename()
```

digunakan untuk mengambil nama filenya saja.

Contoh:

```php
$halaman = basename($_SERVER['PHP_SELF']);
```

Jika halaman yang sedang dibuka:

```text
tentang.php
```

maka:

```text
$halaman
```

berisi:

```text
tentang.php
```

---

## Membuat Navigasi Aktif

Perhatikan:

```php
<?= $halaman == 'index.php' ? 'active' : '' ?>
```

Ini merupakan bentuk singkat dari kondisi `if`.

Artinya:

```text
Jika halaman sekarang adalah index.php
    ↓
tambahkan class "active"

Jika bukan
    ↓
tidak menambahkan apa-apa
```

Kita menggunakan konsep:

```text
Variable
+
If
+
HTML
```

---

## Bagian 3 - CSS Navigasi

Sekarang buka:

```text
assets/css/style.css
```

Tambahkan:

```css
header {
    background-color: #1f4e79;
    color: white;
    padding: 30px 0;
    margin-bottom: 30px;
}

header h1 {
    margin: 0;
}

header p {
    margin-top: 8px;
}

nav {
    margin-top: 20px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 10px 16px;
    border-radius: 6px;
}

nav a:hover {
    background-color: rgba(255, 255, 255, 0.15);
}

nav a.active {
    background-color: white;
    color: #1f4e79;
    font-weight: bold;
}
```

---

## Coba Navigasi

Buka:

```text
http://localhost/workshop-php/
```

Kemudian klik:

```text
Tentang
```

Perhatikan navigasi.

Link:

```text
Tentang
```

seharusnya memiliki tampilan berbeda.

Klik:

```text
Galeri
```

Sekarang:

```text
Galeri
```

yang menjadi aktif.

Klik:

```text
Kontak
```

Sekarang:

```text
Kontak
```

yang aktif.

Kita baru saja membuat **active navigation** menggunakan PHP.

---

## Bagian 5 - Merapikan `footer.php`

Buka:

```text
footer.php
```

Ganti isinya dengan:

```php
    </main>

    <footer>
        <div class="container">
            <p>
                &copy;
                <?= date('Y') ?>
                Ekstrakurikuler Sekolah
            </p>
            <p>
                Dibuat menggunakan PHP
            </p>
        </div>
    </footer>
</body>
</html>
```

---

## Mengenal `date()`

Perhatikan:

```php
<?= date('Y') ?>
```

`date()` digunakan untuk mendapatkan informasi tanggal atau waktu.

Format:

```text
Y
```

digunakan untuk mendapatkan tahun.

Misalnya tahun sekarang:

```text
2026
```

Maka:

```php
date('Y')
```

akan menghasilkan:

```text
2026
```

Keuntungannya, kita tidak perlu mengubah tahun secara manual setiap tahun.

---

## CSS Footer

Tambahkan ke:

```text
assets/css/style.css
```

```css
footer {
    margin-top: 50px;
    padding: 30px 0;
    background-color: #1f2937;
    color: white;
    text-align: center;
}

footer p {
    margin: 5px 0;
}
```

---

## Bagian 6 - Pastikan `main` Sudah Ditutup

Perhatikan:

```text
header.php
```

di bagian akhir terdapat:

```html
<main class="container">
```

Sedangkan:

```text
footer.php
```

dimulai dengan:

```html
</main>
```

Jadi setiap halaman yang menggunakan:

```php
include 'header.php';
```

dan:

```php
include 'footer.php';
```

secara otomatis mendapatkan:

```html
<html>
    <head>
    ...
    </head>

    <body>
        <header>
        ...
        </header>

        <main>
        ...
        </main>

        <footer>
        ...
        </footer>
    </body>
</html>
```

Inilah manfaat `include`.

---

## Bagian 7 - Merapikan `index.php`

Sekarang kita akan membuat Home menggunakan variable dan array.

Buka:

```text
index.php
```

Ganti seluruh isinya dengan:

```php
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
```

---

## Apa Saja yang Digunakan?

Pada satu halaman kita sudah menggunakan:

### Variable

```php
$namaEkstrakurikuler
```

dan:

```php
$jumlahAnggota
```

### Array

```php
$jadwal = [
    "Senin - 15:00",
    "Rabu - 15:00",
    "Jumat - 14:00"
];
```

### `foreach`

```php
foreach ($jadwal as $hari)
```

### `if`

```php
if ($jumlahAnggota >= 30)
```

### `include`

```php
include 'header.php';

include 'footer.php';
```

Ini adalah gabungan dari materi yang sudah kita pelajari.

---

## Bagian 8 - Merapikan `tentang.php`

Buka:

```text
tentang.php
```

Ganti dengan:

```php
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
```

---

## Apa yang Kita Gunakan?

Halaman Tentang menggunakan:

```text
Variable
```

untuk visi:

```php
$visi
```

Array:

```php
$misi
```

Perulangan:

```php
foreach
```

dan:

```php
include
```

Sekarang materi kita benar-benar mulai terintegrasi.

---

## Bagian 9 - Merapikan `galeri.php`

Buka:

```text
galeri.php
```

Ganti dengan:

```php
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
```

---

## Perhatikan Polanya

Hampir semua halaman sekarang memiliki struktur:

```text
1. Data / Variable
       ↓
2. include header
       ↓
3. Isi halaman
       ↓
4. include footer
```

Contoh:

```php
$kegiatan = [
    ...
];

include 'header.php';

?>

<!-- Isi halaman -->

<?php

include 'footer.php';
```

Pola seperti ini sangat umum digunakan dalam aplikasi PHP sederhana.

---

## Bagian 10 - Rapikan CSS

Sekarang kita akan memastikan seluruh halaman memiliki tampilan yang konsisten.

Buka:

```text
assets/css/style.css
```

Ganti seluruh isinya dengan:

```css
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    color: #333;
    line-height: 1.6;
}

.container {
    width: 90%;
    max-width: 1000px;
    margin: auto;
}

header {
    background-color: #1f4e79;
    color: white;
    padding: 30px 0;
    margin-bottom: 30px;
}

header h1 {
    margin: 0;
}

header p {
    margin-top: 8px;
}

nav {
    margin-top: 20px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 10px 16px;
    border-radius: 6px;
}

nav a:hover {
    background-color: rgba(255, 255, 255, 0.15);
}

nav a.active {
    background-color: white;
    color: #1f4e79;
    font-weight: bold;
}

main {
    min-height: 400px;
}

.hero {
    background-color: white;
    padding: 40px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

.hero h2 {
    margin-top: 0;
    color: #1f4e79;
}

.card {
    background-color: white;
    padding: 30px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

.card h2 {
    margin-top: 0;
    color: #1f4e79;
}

.card li {
    margin-bottom: 8px;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 25px;
}

.gallery-item {
    background-color: #f8f9fa;
    padding: 25px;
    border-radius: 10px;
    border: 1px solid #ddd;
}

.gallery-item h3 {
    margin-top: 0;
    color: #1f4e79;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 25px;
}

form label {
    font-weight: bold;
    margin-top: 10px;
}

form input,
form textarea {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    font-family: inherit;
}

form button {
    padding: 12px 20px;
    margin-top: 10px;
    border: none;
    border-radius: 6px;
    background-color: #1f4e79;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

form button:hover {
    opacity: 0.9;
}

.error {
    padding: 15px;
    margin: 20px 0;
    background-color: #ffe5e5;
    border: 1px solid #ffaaaa;
    border-radius: 6px;
    color: #b00000;
}

.success {
    padding: 20px;
    margin-top: 25px;
    margin-bottom: 25px;
    background-color: #e8f5e9;
    border: 1px solid #a5d6a7;
    border-radius: 6px;
}

footer {
    margin-top: 50px;
    padding: 30px 0;
    background-color: #1f2937;
    color: white;
    text-align: center;
}

footer p {
    margin: 5px 0;
}

@media (max-width: 600px) {
    .gallery {
        grid-template-columns: 1fr;
    }

    nav {
        flex-direction: column;
    }

    nav a {
        display: block;
    }

    .hero,
    .card {
        padding: 20px;
    }
}
```

---

## Bagian 11 - Final Testing

Sekarang kita akan melakukan pengujian.

Jangan langsung menganggap project selesai.

Developer harus melakukan testing.

---

## Test 1 - Home

Buka:

```text
http://localhost/workshop-php/
```

Pastikan:

* [ ] Header muncul.
* [ ] Navigasi muncul.
* [ ] Home menjadi menu aktif.
* [ ] Nama ekstrakurikuler muncul.
* [ ] Jumlah anggota muncul.
* [ ] Jadwal muncul.
* [ ] Footer muncul.

---

## Test 2 - Tentang

Buka:

```text
http://localhost/workshop-php/tentang.php
```

Pastikan:

* [ ] Tentang menjadi menu aktif.
* [ ] Visi muncul.
* [ ] Semua misi muncul.
* [ ] Footer muncul.

---

## Test 3 - Galeri

Buka:

```text
http://localhost/workshop-php/galeri.php
```

Pastikan:

* [ ] Galeri menjadi menu aktif.
* [ ] Semua kegiatan muncul.
* [ ] Card kegiatan muncul.
* [ ] Footer muncul.

---

## Test 4 - Kontak

Buka:

```text
http://localhost/workshop-php/kontak.php
```

Pastikan:

* [ ] Kontak menjadi menu aktif.
* [ ] Form muncul.
* [ ] Nama dapat diisi.
* [ ] Email dapat diisi.
* [ ] Pesan dapat diisi.
* [ ] Tombol dapat diklik.

---

## Test 5 - Validasi Form

Coba klik:

```text
Kirim Pesan
```

tanpa mengisi apapun.

Seharusnya:

```text
Nama wajib diisi.
```

Kemudian isi nama tetapi kosongkan email.

Seharusnya:

```text
Email wajib diisi.
```

Kemudian isi nama dan email tetapi kosongkan pesan.

Seharusnya:

```text
Pesan wajib diisi.
```

---

## Test 6 - Form Berhasil

Isi:

```text
Nama:
Budi

Email:
budi@email.com

Pesan:
Halo, saya sedang belajar PHP.
```

Klik:

```text
Kirim Pesan
```

Seharusnya muncul:

```text
Terima kasih, Budi!

Pesan kamu berhasil diterima.
```
---

## Test 7 - Navigasi

Klik satu per satu:

```text
Home
Tentang
Galeri
Kontak
```

Pastikan menu yang sedang dibuka selalu memiliki tampilan:

```text
active
```

---

# 🧹 Bagian 12 - Bersihkan Project

Sebelum project dianggap selesai, pastikan tidak ada file latihan yang tidak diperlukan.

Misalnya:

```text
latihan.php
```

Jika masih ada dan sudah tidak digunakan, hapus.

Project final cukup:

```text
workshop-php/
│
├── assets/
│   └── css/
│       └── style.css
│
├── header.php
├── footer.php
├── index.php
├── tentang.php
├── galeri.php
└── kontak.php
```

---

## Bagian 13 - Mari Kita Ingat Lagi

Selama workshop, kita telah mempelajari beberapa konsep.

---

## 1. Variable

Untuk menyimpan satu nilai.

```php
$nama = "Budi";
```

---

## 2. Array

Untuk menyimpan banyak data.

```php
$kegiatan = [
    "Latihan",
    "Seminar",
    "Workshop"
];
```

---

## 3. `if`

Untuk membuat keputusan.

```php
if ($jumlahAnggota >= 30) {
    echo "Anggota cukup banyak.";
}
```

---

## 4. `foreach`

Untuk mengulang data.

```php
foreach ($kegiatan as $item) {
    echo $item;
}
```

---

## 5. Form

Untuk menerima input pengguna.

```html
<form method="POST">
```

---

## 6. `$_POST`

Untuk mengambil data dari form.

```php
$nama = $_POST['nama'];
```

---

## 7. `include`

Untuk menggunakan file PHP lain.

```php
include 'header.php';
```

---

## Dari Website Sederhana ke Aplikasi

Website kita sekarang memang masih sederhana.

Kita menggunakan:

```text
PHP
HTML
CSS
```

Website profesional biasanya akan menggunakan teknologi tambahan seperti:

```text
PHP
    +
Database
    +
JavaScript
    +
Framework
    +
Authentication
    +
API
```

Tetapi konsep dasarnya tetap sama:

```text
Input
 ↓
Proses
 ↓
Data
 ↓
Output
```

---

## Setelah Workshop Ini

Jika kalian ingin belajar PHP lebih lanjut, langkah berikutnya adalah mempelajari:

```text
1. Database
2. MySQL
3. CRUD
4. Session
5. Login & Register
6. JavaScript
7. REST API
8. Framework PHP
```

Salah satu project berikutnya yang menarik adalah:

> **Membuat sistem login dan database menggunakan PHP + MySQL.**

Dari situ kalian sudah mulai masuk ke pengembangan aplikasi web yang lebih nyata.

---

## FINAL PROJECT

Selamat!

Kalian telah menyelesaikan website sederhana berbasis PHP.

Project akhir memiliki:

```text
Home
│
├── Variable
├── Array
├── Foreach
└── If

Tentang
│
├── Variable
├── Array
└── Foreach

Galeri
│
├── Array
├── Foreach
└── If

Kontak
│
├── Form
├── POST
├── $_POST
├── If
└── Validasi

Semua halaman
│
└── Include
```

---

## Selamat!

Kalian baru saja membuat website menggunakan PHP dari awal.

Mulai dari:

```text
Menyiapkan Environment
        ↓
Memahami Cara Kerja Website
        ↓
Mengenal PHP
        ↓
Variable
        ↓
Percabangan
        ↓
Perulangan
        ↓
Form
        ↓
Include
        ↓
Mini Project
        ↓
Website Sederhana
```

Dan yang paling penting:

> **Kalian tidak hanya melihat bagaimana website dibuat. Kalian sudah membuatnya sendiri.**

---

## Ingat

Programming bukan tentang menghafalkan semua kode.

Programming adalah tentang:

```text
Memahami masalah
      ↓
Memecah masalah
      ↓
Menulis kode
      ↓
Mencoba
      ↓
Error
      ↓
Mencari tahu
      ↓
Memperbaiki
      ↓
Berhasil
```

Kalau nanti kode kalian error, jangan langsung menyerah.

Baca error-nya.

Cari tahu penyebabnya.

Coba perbaiki.

Karena:

> **Error bukan tanda bahwa kalian gagal. Error adalah bagian dari proses belajar programming.**

---

## Project Selesai

Struktur final:

```text
workshop-php/
│
├── assets/
│   └── css/
│       └── style.css
│
├── header.php
├── footer.php
├── index.php
├── tentang.php
├── galeri.php
└── kontak.php
```

**Selamat!**

Kalian telah menyelesaikan Workshop **Pengembangan Web Berbasis PHP**.