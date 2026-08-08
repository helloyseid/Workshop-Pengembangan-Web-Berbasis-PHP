# Mini Project Bagian 1 - Membangun Kerangka

> **Durasi:** ±45 Menit
> **Level:** Pemula
> **Konsep:** HTML, CSS, PHP, Variable
> **Prerequisite:**
>
> * 01 - Mengenal Website
> * 02 - Instalasi XAMPP
> * 03 - Dasar PHP
>
> **Target:** Membuat kerangka awal website profil sederhana.

---

## Tujuan

Pada bagian pertama mini project ini, kita akan mulai membangun website secara bertahap.

Kita akan membuat:

* Halaman Home
* Header sederhana
* Footer sederhana
* CSS untuk mengatur tampilan
* Variable PHP
* Struktur folder project

Pada akhir bagian ini, website kita akan terlihat seperti sebuah website sungguhan, meskipun fiturnya masih sederhana.

---

## Website yang Akan Kita Buat

Kita akan membuat sebuah website bernama:

> **Profil Ekstrakurikuler Sekolah**

Contohnya:

```text
=========================================

       EKSTRAKURIKULER SEKOLAH

   Berani Berkarya, Berani Berprestasi

-----------------------------------------

Home | Tentang | Galeri | Kontak

-----------------------------------------

        Selamat Datang!

   Mari mengenal kegiatan
   ekstrakurikuler sekolah kita.

-----------------------------------------

       © 2026 Ekstrakurikuler Sekolah

=========================================
```

Website ini nantinya akan kita kembangkan sedikit demi sedikit.

---

## Roadmap Mini Project

Mini project akan kita kerjakan dalam 4 bagian.

```text
Mini Project Bagian 1
│
├── Struktur Project
├── HTML
├── CSS
├── PHP
└── Variable
        ↓
Mini Project Bagian 2
│
├── Percabangan
├── Perulangan
└── Halaman Tentang & Galeri
        ↓
Mini Project Bagian 3
│
├── Form
├── $_POST
└── Menyimpan Pesan
        ↓
Mini Project Bagian 4
│
├── Include
├── Header
├── Footer
└── Finalisasi Website
```

Pada bagian ini kita hanya fokus pada **Mini Project Bagian 1**.

---

## Langkah 1 - Membuat Folder Project

Pastikan Apache sudah berjalan.

Kemudian buka:

```text
C:\xampp\htdocs
```

Buat folder baru:

```text
workshop-php
```

---

## Langkah 2 - Membuat Struktur Folder

Di dalam folder `workshop-php`, buat folder:

```text
assets
```

Kemudian di dalam `assets`, buat folder:

```text
css
```

Struktur awal kita:

```text
workshop-php/
│
└── assets/
    └── css/
```

---

## Langkah 3 - Membuat File

Sekarang buat file berikut:

```text
index.php
header.php
footer.php
```

Sehingga struktur project menjadi:

```text
workshop-php/
│
├── assets/
│   └── css/
│
├── header.php
├── footer.php
└── index.php
```

Untuk saat ini kita belum membuat:

```text
tentang.php
galeri.php
kontak.php
pesan.txt
```

File tersebut akan kita buat pada bagian berikutnya.

---

## Langkah 4 - Membuat File CSS

Masuk ke:

```text
assets/css
```

Buat file:

```text
style.css
```

Sehingga sekarang struktur project menjadi:

```text
workshop-php/
│
├── assets/
│   └── css/
│       └── style.css
│
├── header.php
├── footer.php
└── index.php
```

---

## Langkah 5 - Membuat Header

Buka file:

```text
header.php
```

Copy kode berikut:

```php
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler Sekolah</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>Ekstrakurikuler Sekolah</h1>
        <p>Berani Berkarya, Berani Berprestasi</p>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="tentang.php">Tentang</a>
        <a href="galeri.php">Galeri</a>
        <a href="kontak.php">Kontak</a>
    </nav>
    <main>
```

Jangan khawatir jika beberapa link belum bisa dibuka.

Saat ini kita memang baru memiliki `index.php`.

Halaman lainnya akan kita buat nanti.

---

## Langkah 6 - Membuat Footer

Buka file:

```text
footer.php
```

Copy kode berikut:

```php
    </main>

    <footer>
        <p>&copy; 2026 Ekstrakurikuler Sekolah</p>
    </footer>
</body>
</html>
```

Perhatikan bahwa file ini tidak dimulai dengan:

```html
<!DOCTYPE html>
```

Karena file `footer.php` nantinya akan menjadi bagian dari halaman utama website.

---

## Langkah 7 - Membuat Halaman Home

Sekarang buka:

```text
index.php
```

Masukkan:

```php
<?php
include 'header.php';
?>

<section class="hero">
    <h2>Selamat Datang!</h2>
    <p>
        Selamat datang di website
        Ekstrakurikuler Sekolah.
    </p>
    <p>
        Mari belajar, berkarya,
        dan berprestasi bersama.
    </p>
</section>

<?php
include 'footer.php';
?>
```

Untuk sementara kita menggunakan `include`.

Jangan khawatir jika belum memahami `include` secara mendalam.

Pada bagian terakhir mini project nanti kita akan membahasnya secara khusus.

Untuk sekarang, anggap saja:

> `include` digunakan untuk mengambil isi dari file lain.

---

## Langkah 8 - Membuat Tampilan dengan CSS

Buka:

```text
assets/css/style.css
```

Copy kode berikut:

```css
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f6f8;
    color: #333;
}

header {
    text-align: center;
    padding: 40px 20px;
    background-color: #1f4e79;
    color: white;
}

header h1 {
    margin: 0 0 10px 0;
}

header p {
    margin: 0;
}

nav {
    display: flex;
    justify-content: center;
    gap: 25px;
    padding: 15px;
    background-color: white;
    border-bottom: 1px solid #ddd;
}

nav a {
    text-decoration: none;
    color: #1f4e79;
    font-weight: bold;
}

nav a:hover {
    text-decoration: underline;
}

main {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 20px;
}

.hero {
    text-align: center;
    background-color: white;
    padding: 50px 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

.hero h2 {
    margin-top: 0;
    font-size: 32px;
}

footer {
    text-align: center;
    padding: 25px;
    margin-top: 50px;
    background-color: #1f4e79;
    color: white;
}
```

---

## Langkah 9 - Menjalankan Website

Pastikan Apache masih berjalan.

Kemudian buka:

```text
http://localhost/workshop-php
```

Jika semua benar, website akan tampil.

Kira-kira hasilnya:

```text
┌─────────────────────────────────────┐
│                                     │
│     EKSTRAKURIKULER SEKOLAH         │
│   Berani Berkarya, Berprestasi      │
│                                     │
├─────────────────────────────────────┤
│   Home   Tentang   Galeri   Kontak  │
├─────────────────────────────────────┤
│                                     │
│         Selamat Datang!             │
│                                     │
│  Selamat datang di website          │
│  Ekstrakurikuler Sekolah.           │
│                                     │
│  Mari belajar, berkarya,            │
│  dan berprestasi bersama.           │
│                                     │
└─────────────────────────────────────┘
```


Kita sudah memiliki website pertama!

---

## Memahami Variable PHP

Sekarang kita mulai menggunakan konsep PHP.

Salah satu konsep paling penting dalam pemrograman adalah:

> **Variable**

Variable digunakan untuk menyimpan sebuah nilai.

Contohnya:

```php
$nama = "Andi";
```

Artinya kita membuat variable bernama:

```text
$nama
```

dan memberikan nilai:

```text
Andi
```

---

## Analogi Variable

Bayangkan kita memiliki sebuah kotak.

```text
┌──────────────┐
│    $nama     │
├──────────────┤
│    "Andi"    │
└──────────────┘
```

Nama kotaknya adalah:

```text
$nama
```

Isi kotaknya adalah:

```text
Andi
```

Kita bisa menggunakan isi kotak tersebut kapan pun dibutuhkan.

---

## Membuat Variable

Contoh:

```php
<?php

$nama = "Andi";

echo $nama;

?>
```

Hasil:

```text
Andi
```

---

## Variable di Website Kita

Sekarang kita akan menggunakan variable untuk menyimpan informasi website.

Buka:

```text
index.php
```

Ubah menjadi:

```php
<?php
$namaWebsite = "Ekstrakurikuler Sekolah";
$slogan = "Berani Berkarya, Berani Berprestasi";
include 'header.php';
?>

<section class="hero">
    <h2>Selamat Datang!</h2>
    <p>
        Selamat datang di website
        <?php echo $namaWebsite; ?>.
    </p>
    <p>
        <?php echo $slogan; ?>
    </p>
</section>

<?php
include 'footer.php';
?>
```

---

## Apa yang Terjadi?

Kita memiliki:

```php
$namaWebsite = "Ekstrakurikuler Sekolah";
```

dan:

```php
$slogan = "Berani Berkarya, Berani Berprestasi";
```

Kemudian kita menampilkan variable tersebut:

```php
echo $namaWebsite;
```

dan:

```php
echo $slogan;
```

PHP akan mengganti variable tersebut dengan nilainya.

---

## Kenapa Variable Berguna?

Bayangkan website kita memiliki nama:

```text
Ekstrakurikuler Sekolah
```

dan nama tersebut muncul di:

* Header
* Home
* Footer
* Tentang
* Galeri

Jika kita menulis langsung:

```text
Ekstrakurikuler Sekolah
```

di setiap tempat, maka ketika ingin mengganti nama, kita harus mengubah banyak file.

Dengan variable:

```php
$namaWebsite = "Ekstrakurikuler Sekolah";
```

kita dapat menggunakan:

```php
$namaWebsite
```

di berbagai tempat.

Ini membuat program lebih mudah dikelola.

---

## Variable dengan Angka

Variable tidak hanya bisa menyimpan teks.

Contohnya:

```php
$jumlahAnggota = 30;
```

Kemudian:

```php
echo $jumlahAnggota;
```

Hasil:

```text
30
```

---

## Menambahkan Informasi Website

Sekarang kita akan menambahkan jumlah anggota ekstrakurikuler.

Ubah `index.php` menjadi:

```php
<?php
$namaWebsite = "Ekstrakurikuler Sekolah";
$slogan = "Berani Berkarya, Berani Berprestasi";
$jumlahAnggota = 30;
include 'header.php';
?>

<section class="hero">
    <h2>Selamat Datang!</h2>
    <p>
        Selamat datang di website
        <?php echo $namaWebsite; ?>.
    </p>
    <p>
        <?php echo $slogan; ?>
    </p>
    <p>
        Saat ini kami memiliki
        <?php echo $jumlahAnggota; ?>
        anggota.
    </p>
</section>

<?php
include 'footer.php';
?>
```

Refresh browser.

Sekarang akan muncul informasi:

```text
Saat ini kami memiliki 30 anggota.
```

---

## Syntax Singkat PHP

PHP memiliki cara singkat untuk menampilkan variable.

Daripada:

```php
<?php echo $namaWebsite; ?>
```

kita dapat menulis:

```php
<?= $namaWebsite ?>
```

Contoh:

```php
<h2>Selamat Datang di <?= $namaWebsite ?></h2>
```

Hasilnya sama.

Untuk workshop ini, kita akan sering menggunakan:

```php
<?= ?>
```

karena lebih singkat dan mudah dibaca.

---

## Rapikan index.php

Sekarang ubah `index.php` menjadi versi yang lebih rapi:

```php
<?php
$namaWebsite = "Ekstrakurikuler Sekolah";
$slogan = "Berani Berkarya, Berani Berprestasi";
$jumlahAnggota = 30;
include 'header.php';
?>

<section class="hero">
    <h2>Selamat Datang!</h2>
    <p>
        Selamat datang di website
        <?= $namaWebsite ?>.
    </p>
    <p>
        <?= $slogan ?>
    </p>
    <p>
        Saat ini kami memiliki
        <strong><?= $jumlahAnggota ?></strong>
        anggota.
    </p>
</section>

<?php
include 'footer.php';
?>
```

---

## Challenge - Tambahkan Variable Baru

Tambahkan variable:

```php
$namaPembina
```

Contoh:

```php
$namaPembina = "Bapak Ahmad";
```

Kemudian tampilkan pada website:

```text
Pembina: Bapak Ahmad
```

Gunakan:

```php
<?= $namaPembina ?>
```

---

## Kesalahan yang Sering Terjadi

## 1. Lupa tanda `$`

Salah:

```php
namaWebsite = "Klub Robotik";
```

Benar:

```php
$namaWebsite = "Klub Robotik";
```

---

## 2. Nama variable tidak sama

Misalnya kita membuat:

```php
$namaWebsite = "Klub Robotik";
```

Tetapi memanggil:

```php
<?= $namaWeb ?>
```

Ini berbeda.

Nama variable harus sama.

---

## 3. Lupa titik koma

Salah:

```php
$namaWebsite = "Klub Robotik"
```

Benar:

```php
$namaWebsite = "Klub Robotik";
```

---

## Kondisi Project Saat Ini

Setelah menyelesaikan Mini Project 1, struktur project kita adalah:

```text
workshop-php/
│
├── assets/
│   └── css/
│       └── style.css
│
├── header.php
├── footer.php
└── index.php
```

Website kita sudah memiliki:

* Header
* Navigation
* Home
* Footer
* CSS
* Variable PHP

---

## Checklist

Sebelum lanjut, pastikan:

* [ ] Apache berjalan.
* [ ] Project berada di `htdocs`.
* [ ] `index.php` dapat dibuka.
* [ ] CSS berhasil diterapkan.
* [ ] Header tampil.
* [ ] Footer tampil.
* [ ] Variable PHP berhasil digunakan.
* [ ] Nama website dapat diubah melalui variable.
* [ ] Slogan dapat diubah melalui variable.
* [ ] Jumlah anggota tampil pada halaman.

Jika semua sudah berhasil, berarti kamu siap melanjutkan ke bagian berikutnya.

---

## Berikutnya

Website kita sudah memiliki kerangka dasar.

Namun saat ini website masih sangat sederhana.

Pada **Mini Project Bagian 2**, kita akan membuat:

* Halaman Tentang
* Halaman Galeri
* Data menggunakan Array
* Perulangan `foreach`
* Percabangan `if`

Dengan demikian, PHP mulai benar-benar digunakan untuk membuat **konten website menjadi dinamis**.