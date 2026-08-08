# Mini Project Bagian 3 - Membuat Form Kontak

> **Durasi:** ±45 Menit
> **Level:** Pemula
> **Konsep:** HTML Form, `method="POST"`, `$_POST`, `if`, validasi sederhana, `file_put_contents()`
> **Prerequisite:** Mini Project Bagian 1 & Mini Project Bagian 2
>
> **Target:** Membuat halaman Kontak yang dapat menerima data dari pengunjung.

---

## Tujuan

Pada bagian ini kita akan membuat website kita menjadi lebih interaktif.

Sebelumnya website hanya menampilkan informasi.

Sekarang pengunjung dapat mengirimkan data kepada website.

Kita akan membuat:

* Halaman Kontak
* Form Nama
* Form Email
* Form Pesan
* Proses data menggunakan PHP
* Validasi sederhana

Konsep utama yang akan dipelajari:

```text
HTML Form
    ↓
POST
    ↓
PHP
    ↓
$_POST
    ↓
Validasi
    ↓
Simpan Data
```

---

## Kondisi Project

Pada Mini Project 2, project kita sudah memiliki:

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

Sekarang kita akan menambahkan:

```text
kontak.php
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
├── galeri.php
└── kontak.php
```

---

## Bagian 1 - Apa Itu Form?

Form digunakan untuk menerima input dari pengguna.

Contohnya:

* Form login
* Form registrasi
* Form pencarian
* Form komentar
* Form kontak
* Form pendaftaran

Contoh form sederhana:

```html
<form>
    <input type="text">
    <button>Kirim</button>
</form>
```

Pengguna dapat mengetik sesuatu kemudian menekan tombol.

---

## Membuat Form Kontak

Kita akan membuat form seperti berikut:

```text
-----------------------------------------
              HUBUNGI KAMI
-----------------------------------------

Nama
[____________________________]

Email
[____________________________]

Pesan
[                            ]
[                            ]
[____________________________]

        [ Kirim Pesan ]

-----------------------------------------
```

---

## Bagian 2 - Membuat File Kontak

Buat file:

```text
kontak.php
```

Untuk tahap pertama, masukkan:

```php
<?php
include 'header.php';
?>

<section class="card">
    <h2>Hubungi Kami</h2>
    <p>
        Silakan kirim pesan kepada kami
        melalui form berikut.
    </p>
    <form method="POST">
        <label>Nama</label>
        <input type="text" name="nama">

        <label>Email</label>
        <input type="email" name="email">

        <label>Pesan</label>
        <textarea name="pesan" rows="5"></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>
</section>

<?php
include 'footer.php';
?>
```

---

## Memahami `<form>`

Perhatikan:

```html
<form method="POST">
```

Tag:

```html
<form>
```

menandakan bahwa kita sedang membuat form.

Sedangkan:

```text
method="POST"
```

menentukan bagaimana data akan dikirim.

Untuk saat ini kita akan menggunakan:

```text
POST
```

---

## Memahami `name`

Perhatikan input:

```html
<input type="text" name="nama">
```

Bagian:

```text
name="nama"
```

sangat penting.

PHP akan menggunakan nama tersebut untuk mengambil data.

Misalnya:

```html
name="nama"
```

akan diambil menggunakan:

```php
$_POST['nama']
```

Begitu juga:

```html
name="email"
```

akan diambil menggunakan:

```php
$_POST['email']
```

dan:

```html
name="pesan"
```

akan diambil menggunakan:

```php
$_POST['pesan']
```

---

## Alur Data Form

Ketika pengguna mengisi:

```text
Nama  : Budi
Email : budi@email.com
Pesan : Halo!
```

kemudian menekan:

```text
Kirim Pesan
```

data dikirim ke PHP.

Secara sederhana:

```text
Form

Nama  → Budi
Email → budi@email.com
Pesan → Halo!

        ↓

      POST

        ↓

      PHP

        ↓

$_POST['nama']
$_POST['email']
$_POST['pesan']
```

---

## Coba Jalankan Form

Buka:

```text
http://localhost/workshop-php/kontak.php
```

Isi:

```text
Nama  : Budi
Email : budi@email.com
Pesan : Halo, saya ingin bertanya.
```

Klik:

```text
Kirim Pesan
```

Saat ini belum terjadi apa-apa.

Itu karena kita baru membuat **form**, tetapi belum membuat PHP untuk memproses datanya.

Sekarang kita akan membuatnya.

---

## Bagian 3 - Mengambil Data dengan `$_POST`

Tambahkan kode berikut di bagian paling atas `kontak.php`, sebelum:

```php
include 'header.php';
```

Kode:

```php
<?php

if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
}

include 'header.php';

?>
```

Sekarang PHP akan mengambil data yang dikirim oleh form.

---

## Apa Itu `$_POST`?

`$_POST` adalah variable khusus PHP yang berisi data yang dikirim menggunakan method:

```text
POST
```

Contoh:

```php
$_POST['nama']
```

berarti:

> Ambil data dari input yang memiliki `name="nama"`.

---

## Hubungan Form dengan PHP

Perhatikan hubungan berikut.

HTML:

```html
<input type="text" name="nama">
```

PHP:

```php
$_POST['nama']
```

HTML:

```html
<input type="email" name="email">
```

PHP:

```php
$_POST['email']
```

HTML:

```html
<textarea name="pesan"></textarea>
```

PHP:

```php
$_POST['pesan']
```

Nama pada `name` harus sesuai dengan nama yang digunakan di `$_POST`.

---

## Menampilkan Data yang Dikirim

Sekarang kita akan menampilkan data yang dikirim pengguna.

Ubah bagian PHP menjadi:

```php
<?php

if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
}

include 'header.php';

?>
```

Kemudian setelah form, tambahkan:

```php
<?php
if ($_POST) {
?>
    <div class="success">
        <h3>Terima kasih, <?= $nama ?>!</h3>
        <p>
            Pesan kamu sudah diterima.
        </p>
        <p>
            Email: <?= $email ?>
        </p>
        <p>
            Pesan: <?= $pesan ?>
        </p>
    </div>
<?php
}
?>
```

---

## Coba Lagi

Buka:

```text
http://localhost/workshop-php/kontak.php
```

Isi:

```text
Nama:
Andi

Email:
andi@email.com

Pesan:
Halo, saya tertarik mengikuti kegiatan.
```

Klik:

```text
Kirim Pesan
```

Seharusnya muncul:

```text
Terima kasih, Andi!

Pesan kamu sudah diterima.

Email:
andi@email.com

Pesan:
Halo, saya tertarik mengikuti kegiatan.
```

Sekarang website kita sudah bisa menerima input pengguna.

---

## Bagian 4 - Menggunakan `if`

Perhatikan kode:

```php
if ($_POST) {
```

Artinya:

> Jika ada data yang dikirim menggunakan form, jalankan kode di dalamnya.

Jika halaman baru pertama kali dibuka:

```text
Belum ada POST
```

Maka kode di dalam `if` tidak dijalankan.

Setelah pengguna menekan:

```text
Kirim Pesan
```

maka:

```text
$_POST
```

berisi data.

PHP kemudian menjalankan kode di dalam `if`.

---

## Bagian 5 - Validasi Form

Sekarang kita akan membuat form lebih baik.

Bagaimana jika pengguna tidak mengisi nama?

Misalnya:

```text
Nama:
[ kosong ]

Email:
andi@email.com
```

Kita tentu tidak ingin menerima data seperti itu.

Kita dapat menggunakan `if` untuk melakukan pengecekan.

---

## Mengecek Nama

Gunakan:

```php
if (empty($nama)) {
    echo "Nama wajib diisi.";
}
```

`empty()` digunakan untuk mengecek apakah sebuah variable kosong.

---

## Membuat Validasi Sederhana

Sekarang kita akan mengubah bagian pemrosesan form.

Gunakan kode berikut:

```php
<?php

$error = "";

if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    
    if (empty($nama)) {
        $error = "Nama wajib diisi.";
    }
}

include 'header.php';

?>
```

Kemudian setelah `<section>` dibuka, tambahkan:

```php
<?php if ($error) { ?>
    <div class="error">
        <?= $error ?>
    </div>
<?php } ?>
```

---

## Tambahkan CSS untuk Pesan

Buka:

```text
assets/css/style.css
```

Tambahkan:

```css
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
    background-color: #e8f5e9;
    border: 1px solid #a5d6a7;
    border-radius: 6px;
}
```

---

## Validasi Email

Sekarang kita juga dapat memeriksa email.

Tambahkan kondisi:

```php
if (empty($email)) {
    $error = "Email wajib diisi.";
}
```

Sehingga:

```php
if (empty($nama)) {
    $error = "Nama wajib diisi.";
} elseif (empty($email)) {
    $error = "Email wajib diisi.";
}
```

Perhatikan:

```php
elseif
```

digunakan ketika kita ingin memeriksa kondisi berikutnya jika kondisi sebelumnya tidak terpenuhi.

---

## Validasi Pesan

Sekarang tambahkan validasi pesan:

```php
if (empty($nama)) {
    $error = "Nama wajib diisi.";
} elseif (empty($email)) {
    $error = "Email wajib diisi.";
} elseif (empty($pesan)) {
    $error = "Pesan wajib diisi.";
}
```

Sekarang ketiga field wajib diisi.

---

## Uji Validasi

Coba kirim form tanpa mengisi nama.

Hasil:

```text
Nama wajib diisi.
```

Kemudian isi nama tetapi kosongkan email.

Hasil:

```text
Email wajib diisi.
```

Kemudian isi nama dan email tetapi kosongkan pesan.

Hasil:

```text
Pesan wajib diisi.
```

---

## Bagian 6 - Membuat Kode Lebih Rapi

Sekarang kita akan membuat halaman `kontak.php` menjadi versi final untuk tahap ini.

Ganti seluruh isi:

```text
kontak.php
```

dengan:

```php
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
```
---

## Challenge 1 - Tambahkan Nomor Telepon

Tambahkan field:

```text
Nomor Telepon
[________________________]
```

Gunakan:

```html
<input type="text" name="telepon">
```

Kemudian ambil datanya menggunakan:

```php
$_POST['telepon']
```

Coba tampilkan kembali setelah form berhasil dikirim.

---

## Challenge 2 - Validasi Nomor Telepon

Buat agar nomor telepon wajib diisi.

Gunakan konsep:

```php
if
```

dan:

```php
empty()
```

Contoh hasil:

```text
Nomor telepon wajib diisi.
```

---

## Struktur Project Saat Ini

Setelah menyelesaikan Mini Project 3:

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

Sekarang semua file utama project sudah tersedia.

---

## Checklist

Sebelum melanjutkan, pastikan:

* [ ] Halaman Kontak dapat dibuka.
* [ ] Form dapat menerima nama.
* [ ] Form dapat menerima email.
* [ ] Form dapat menerima pesan.
* [ ] `method="POST"` sudah digunakan.
* [ ] Data dapat diambil menggunakan `$_POST`.
* [ ] Validasi nama berhasil.
* [ ] Validasi email berhasil.
* [ ] Validasi pesan berhasil.
* [ ] Data lama tidak hilang ketika pesan baru ditambahkan.
* [ ] Pesan sukses muncul setelah form berhasil dikirim.

---

## Ringkasan

Pada Mini Project 3 kita telah mempelajari:

## Form

Digunakan untuk menerima input pengguna.

```html
<form method="POST">
```

## `$_POST`

Digunakan untuk mengambil data dari form.

```php
$nama = $_POST['nama'];
```

## `if`

Digunakan untuk memeriksa kondisi.

```php
if (empty($nama)) {
    $error = "Nama wajib diisi.";
}
```

## `elseif`

Digunakan untuk memeriksa kondisi berikutnya.

```php
elseif (empty($email)) {
    $error = "Email wajib diisi.";
}
```
---

## Berikutnya

Website kita sebenarnya sudah hampir selesai.

Namun perhatikan sesuatu:

`header.php` dan `footer.php` digunakan berulang kali di beberapa halaman.

Misalnya:

```php
include 'header.php';
```

dan:

```php
include 'footer.php';
```

Pada **Mini Project Bagian 4**, kita akan membahas konsep `include` secara lebih mendalam dan merapikan seluruh project agar lebih terstruktur.

Kita juga akan:

* Merapikan navigasi.
* Membuat struktur halaman lebih konsisten.
* Menambahkan informasi dinamis.
* Mengecek seluruh halaman.
* Melakukan final testing.
* Menyelesaikan website.