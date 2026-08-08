# Mini Project Bagian 2 - Membuat Website Menjadi Dinamis

> **Durasi:** ±45 Menit
> **Level:** Pemula
> **Konsep:** Array, Perulangan, `foreach`, Percabangan `if`, HTML, PHP
> **Prerequisite:** Mini Project Bagian 1
>
> **Target:** Membuat halaman Tentang dan Galeri dengan data yang ditampilkan secara dinamis menggunakan PHP.

---

## Tujuan

Pada bagian sebelumnya kita sudah membuat kerangka website.

Sekarang kita akan membuat website menjadi lebih dinamis.

Kita akan mempelajari:

* Array PHP
* Perulangan `foreach`
* Percabangan `if`
* Menampilkan data secara dinamis
* Membuat halaman Tentang
* Membuat halaman Galeri

Pada akhir bagian ini, website kita akan memiliki:

```text
Home
Tentang
Galeri
Kontak
```

Namun halaman Kontak belum kita buat. Halaman tersebut akan dibuat pada **Mini Project Bagian 3**.

---

## Kondisi Project

Pada akhir Mini Project Bagian 1, struktur project kita:

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

Sekarang kita akan menambahkan:

```text
tentang.php
galeri.php
```

Sehingga menjadi:

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
└── galeri.php
```

---

## Bagian 1 - Mengenal Array

Sebelum membuat halaman Galeri, kita perlu memahami **Array**.

Array adalah sebuah variable yang dapat menyimpan **lebih dari satu nilai**.

Misalnya kita memiliki daftar kegiatan:

```text
Latihan
Lomba
Seminar
Workshop
```

Tanpa array, kita mungkin menulis:

```php
$kegiatan1 = "Latihan";
$kegiatan2 = "Lomba";
$kegiatan3 = "Seminar";
$kegiatan4 = "Workshop";
```

Cara tersebut bisa digunakan, tetapi tidak praktis.

Dengan array kita dapat menulis:

```php
$kegiatan = [
    "Latihan",
    "Lomba",
    "Seminar",
    "Workshop"
];
```

Sekarang satu variable dapat menyimpan banyak data.

---

## Membuat Array

Contoh:

```php
$buah = [
    "Apel",
    "Jeruk",
    "Mangga"
];
```

Variable:

```text
$buah
```

memiliki tiga data:

```text
Apel
Jeruk
Mangga
```

---

## Index pada Array

Setiap data dalam array memiliki nomor index.

Perlu diperhatikan:

> Index array dimulai dari **0**.

Contoh:

```text
Index     Data

0         Apel
1         Jeruk
2         Mangga
```

Kita dapat mengambil data tertentu.

```php
<?php

$buah = [
    "Apel",
    "Jeruk",
    "Mangga"
];

echo $buah[0];

?>
```

Hasil:

```text
Apel
```

---

## Bagaimana Menampilkan Semua Data?

Kita bisa menulis:

```php
echo $buah[0];
echo $buah[1];
echo $buah[2];
```

Tetapi jika datanya ada 100?

Tentu akan merepotkan.

Karena itu kita menggunakan:

> **Perulangan**

---

## Bagian 2 - Perulangan `foreach`

`foreach` digunakan untuk mengambil data dari array satu per satu.

Contoh:

```php
<?php

$buah = [
    "Apel",
    "Jeruk",
    "Mangga"
];

foreach ($buah as $item) {
    echo $item;
    echo "<br>";
}

?>
```

Hasil:

```text
Apel
Jeruk
Mangga
```

---

## Cara Kerja `foreach`

Kode:

```php
foreach ($buah as $item)
```

dapat dibaca sebagai:

> "Ambil setiap data dari `$buah`, lalu simpan sementara ke `$item`."

Kemudian:

```php
echo $item;
```

menampilkan data tersebut.

---

## Hands-on - Mencoba `foreach`

Buat file sementara:

```text
latihan.php
```

Isi:

```php
<?php

$kegiatan = [
    "Latihan",
    "Lomba",
    "Seminar",
    "Workshop"
];

foreach ($kegiatan as $item) {
    echo $item;
    echo "<br>";
}

?>
```

Buka:

```text
http://localhost/workshop-php/latihan.php
```

Hasil:

```text
Latihan
Lomba
Seminar
Workshop
```

Setelah memahami konsep ini, file `latihan.php` boleh dihapus.

---

## Bagian 3 - Membuat Halaman Tentang

Sekarang kita mulai menerapkannya ke website.

Buat file:

```text
tentang.php
```

Isi dengan:

```php
<?php
include 'header.php';
?>

<section class="card">
    <h2>Tentang Kami</h2>
    <p>
        Ekstrakurikuler Sekolah merupakan wadah
        bagi siswa untuk mengembangkan minat,
        bakat, kreativitas, dan kemampuan bekerja sama.
    </p>
    <p>
        Melalui berbagai kegiatan, siswa dapat
        belajar di luar kelas dan mendapatkan
        pengalaman baru.
    </p>
</section>

<?php
include 'footer.php';
?>
```

---

## Tambahkan CSS untuk Card

Buka:

```text
assets/css/style.css
```

Tambahkan kode berikut di bagian paling bawah:

```css
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
```

Simpan.

Kemudian buka:

```text
http://localhost/workshop-php/tentang.php
```

---

## Bagian 4 - Membuat Halaman Galeri

Sekarang kita akan membuat halaman Galeri.

Buat file:

```text
galeri.php
```

Untuk tahap pertama, kita akan menggunakan data kegiatan.

Isi:

```php
<?php
$kegiatan = [
    "Latihan Rutin",
    "Lomba Antar Sekolah",
    "Seminar Teknologi",
    "Workshop Kreativitas",
    "Kegiatan Sosial"
];

include 'header.php';
?>

<section class="card">
    <h2>Galeri Kegiatan</h2>
    <ul>
        <?php foreach ($kegiatan as $item) { ?>
            <li><?= $item ?></li>
        <?php } ?>
    </ul>
</section>

<?php
include 'footer.php';
?>
```

---

## Perhatikan Bagian Ini

Kita memiliki array:

```php
$kegiatan = [
    "Latihan Rutin",
    "Lomba Antar Sekolah",
    "Seminar Teknologi",
    "Workshop Kreativitas",
    "Kegiatan Sosial"
];
```

Kemudian kita menggunakan:

```php
foreach ($kegiatan as $item)
```

untuk mengambil setiap data.

Lalu:

```php
<?= $item ?>
```

menampilkan data tersebut.

---

## Coba Buka Galeri

Buka:

```text
http://localhost/workshop-php/galeri.php
```

Hasilnya kurang lebih:

```text
Galeri Kegiatan

• Latihan Rutin
• Lomba Antar Sekolah
• Seminar Teknologi
• Workshop Kreativitas
• Kegiatan Sosial
```

---

## Mengapa Perulangan Berguna?

Bayangkan kita memiliki 50 kegiatan.

Tanpa perulangan:

```php
echo "Latihan Rutin";
echo "Lomba Antar Sekolah";
echo "Seminar Teknologi";
echo "Workshop Kreativitas";
...
```

Dengan perulangan:

```php
foreach ($kegiatan as $item) {
    echo $item;
}
```

Kita hanya membutuhkan beberapa baris kode.

Inilah salah satu alasan mengapa bahasa pemrograman sangat membantu dalam membuat website.

---

## Menambahkan Data

Sekarang coba tambahkan kegiatan baru.

Misalnya:

```php
$kegiatan = [
    "Latihan Rutin",
    "Lomba Antar Sekolah",
    "Seminar Teknologi",
    "Workshop Kreativitas",
    "Kegiatan Sosial",
    "Study Tour"
];
```

Refresh browser.

Data baru akan otomatis muncul.

Kita tidak perlu mengubah kode `foreach`.

---

## Bagian 5 - Percabangan `if`

Sekarang kita akan belajar konsep berikutnya:

> **Percabangan**

Percabangan memungkinkan program mengambil keputusan.

Contohnya:

```text
Jika nilai >= 75
    Lulus

Jika nilai < 75
    Tidak Lulus
```

Dalam PHP kita menggunakan:

```php
if
```

---

## Contoh `if`

```php
<?php

$jumlahAnggota = 30;

if ($jumlahAnggota >= 20) {
    echo "Ekstrakurikuler memiliki banyak anggota.";
}

?>
```

Jika jumlah anggota adalah 30:

```text
Ekstrakurikuler memiliki banyak anggota.
```

---

## `if` dan `else`

Kita dapat memberikan dua kemungkinan.

```php
<?php

$jumlahAnggota = 15;

if ($jumlahAnggota >= 20) {
    echo "Anggota cukup banyak.";
} else {
    echo "Anggota masih sedikit.";
}

?>
```

Karena:

```text
15 < 20
```

maka hasilnya:

```text
Anggota masih sedikit.
```

---

## Cara Membaca `if`

Kode:

```php
if ($jumlahAnggota >= 20)
```

dapat dibaca:

> "Jika jumlah anggota lebih besar atau sama dengan 20..."

Maka:

```php
echo "Anggota cukup banyak.";
```

akan dijalankan.

Jika kondisi tidak terpenuhi, bagian:

```php
else
```

akan dijalankan.

---

## Menerapkan `if` ke Website

Sekarang kita akan menggunakan percabangan pada halaman Home.

Buka:

```text
index.php
```

Cari:

```php
$jumlahAnggota = 30;
```

Kemudian di bawah bagian informasi jumlah anggota, tambahkan:

```php
<?php

if ($jumlahAnggota >= 30) {
    echo "<p>Anggota kami cukup banyak!</p>";
} else {
    echo "<p>Yuk bergabung bersama kami!</p>";
}

?>
```

Sehingga bagian tersebut menjadi:

```php
<p>
    Saat ini kami memiliki
    <strong><?= $jumlahAnggota ?></strong>
    anggota.
</p>

<?php

if ($jumlahAnggota >= 30) {
    echo "<p>🎉 Anggota kami cukup banyak!</p>";
} else {
    echo "<p>Yuk bergabung bersama kami!</p>";
}

?>
```

---

## Coba Ubah Jumlah Anggota

Coba ubah:

```php
$jumlahAnggota = 30;
```

menjadi:

```php
$jumlahAnggota = 10;
```

Refresh halaman.

Apa yang terjadi?

Sekarang ubah kembali menjadi:

```php
$jumlahAnggota = 35;
```

Refresh kembali.

Pesan akan berubah secara otomatis.

---

## Inilah Website Dinamis

Sebelumnya kita belajar bahwa website dinamis dapat menghasilkan tampilan yang berbeda berdasarkan data atau kondisi.

Sekarang kita sudah membuat contohnya.

Ketika:

```text
jumlahAnggota = 10
```

website menampilkan:

```text
Yuk bergabung bersama kami!
```

Ketika:

```text
jumlahAnggota = 35
```

website menampilkan:

```text
Anggota kami cukup banyak!
```

Kita tidak membuat dua halaman berbeda.

PHP yang menentukan tampilan berdasarkan kondisi.

---

## Menggunakan `if` pada Galeri

Kita juga dapat menggunakan `if` pada halaman Galeri.

Buka:

```text
galeri.php
```

Di bawah judul:

```php
<h2>Galeri Kegiatan</h2>
```

tambahkan:

```php
<?php

if (count($kegiatan) > 0) {
    echo "<p>Berikut adalah kegiatan kami:</p>";
} else {
    echo "<p>Belum ada kegiatan.</p>";
}

?>
```

---

## Apa Itu `count()`?

`count()` digunakan untuk menghitung jumlah data dalam array.

Misalnya:

```php
$kegiatan = [
    "Latihan",
    "Lomba",
    "Seminar"
];
```

Maka:

```php
count($kegiatan)
```

menghasilkan:

```text
3
```

---

## Cara Kerja Kondisi Galeri

Kita menulis:

```php
if (count($kegiatan) > 0)
```

Artinya:

> Jika jumlah kegiatan lebih dari 0...

maka:

```text
Berikut adalah kegiatan kami:
```

Jika tidak ada kegiatan:

```text
Belum ada kegiatan.
```

---

## Bagian 6 - Menggabungkan Array + Loop + If

Sekarang kita sudah memiliki tiga konsep penting:

```text
Array
   ↓
Menyimpan banyak data

Foreach
   ↓
Mengulang data

If
   ↓
Mengambil keputusan
```

Kita dapat menggabungkan ketiganya.

Contoh:

```php
<?php

$kegiatan = [
    "Latihan Rutin",
    "Lomba Antar Sekolah",
    "Seminar Teknologi"
];

if (count($kegiatan) > 0) {
    foreach ($kegiatan as $item) {
        echo "<li>$item</li>";
    }
} else {
    echo "<p>Belum ada kegiatan.</p>";
}

?>
```

Kode tersebut berarti:

1. Simpan daftar kegiatan.
2. Cek apakah ada kegiatan.
3. Jika ada, tampilkan semua kegiatan.
4. Jika tidak ada, tampilkan pesan.

---

## Membuat Tampilan Galeri Lebih Menarik

Sekarang kita akan mengubah daftar kegiatan menjadi card.

Buka:

```text
assets/css/style.css
```

Tambahkan:

```css
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
```

---

## Ubah Galeri

Sekarang buka:

```text
galeri.php
```

Ganti seluruh isinya dengan:

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
    <?php
    if (count($kegiatan) > 0) {
    ?>
        <p>
            Berikut adalah beberapa kegiatan
            yang dilakukan oleh anggota kami.
        </p>
        <div class="gallery">
            <?php foreach ($kegiatan as $item) { ?>
                <div class="gallery-item">
                    <h3><?= $item ?></h3>
                    <p>
                        Kegiatan ekstrakurikuler
                        untuk mengembangkan kemampuan
                        dan pengalaman siswa.
                    </p>
                </div>
            <?php } ?>
        </div>
    <?php
    } else {
    ?>
        <p>Belum ada kegiatan.</p>
    <?php
    }
    ?>
</section>

<?php
include 'footer.php';
?>
```

---

## Perhatikan Struktur Kodenya

Sekarang kode kita memiliki pola:

```text
IF

└── Ada kegiatan?
        │
        ├── YA
        │    │
        │    └── FOREACH
        │          │
        │          ├── Kegiatan 1
        │          ├── Kegiatan 2
        │          ├── Kegiatan 3
        │          └── ...
        │
        └── TIDAK
             │
             └── "Belum ada kegiatan"
```

Inilah contoh sederhana bagaimana PHP dapat membuat halaman website secara dinamis.

---

## Struktur Project Saat Ini

Setelah menyelesaikan Mini Project 2:

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
└── galeri.php
```

---

## Checklist

Sebelum melanjutkan, pastikan:

* [ ] Halaman Home berjalan.
* [ ] Halaman Tentang berjalan.
* [ ] Halaman Galeri berjalan.
* [ ] Array berhasil dibuat.
* [ ] `foreach` berhasil menampilkan data.
* [ ] `if` dan `else` berhasil digunakan.
* [ ] `count()` berhasil digunakan.
* [ ] Data baru dapat ditambahkan ke array.
* [ ] Galeri berubah secara otomatis ketika data array berubah.
* [ ] Navigasi Home, Tentang, dan Galeri dapat digunakan.

---

## Ringkasan

Pada Mini Project 2 kita telah mempelajari:

## Array

Digunakan untuk menyimpan banyak data.

```php
$kegiatan = [
    "Latihan",
    "Lomba",
    "Seminar"
];
```

## `foreach`

Digunakan untuk mengulang data.

```php
foreach ($kegiatan as $item) {
    echo $item;
}
```

## `if`

Digunakan untuk membuat keputusan.

```php
if ($jumlahAnggota >= 30) {
    echo "Anggota cukup banyak.";
} else {
    echo "Ayo bergabung.";
}
```

## `count()`

Digunakan untuk menghitung jumlah data.

```php
count($kegiatan)
```

---

## Berikutnya

Website kita sekarang sudah memiliki:

```text
Home
Tentang
Galeri
```

Kita sudah menggunakan:

```text
Variable
Array
If
Foreach
```

Namun pengguna belum dapat berinteraksi dengan website.

Pada **Mini Project Bagian 3**, kita akan membuat halaman:

> **Kontak**

Pengunjung dapat mengisi:

* Nama
* Email
* Pesan

Kemudian PHP akan menerima data tersebut menggunakan **Form** dan `$_POST`.