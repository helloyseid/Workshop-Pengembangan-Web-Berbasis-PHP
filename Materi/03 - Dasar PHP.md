# Materi 03 - Dasar PHP

> **Durasi:** ±45 Menit  
> **Level:** Pemula  
> **Prerequisite:** 01 - Mengenal Website, 02 - Instalasi XAMPP

---

## Tujuan Pembelajaran

Setelah mempelajari materi ini, peserta diharapkan mampu:

- Memahami apa itu PHP.
- Menulis program PHP pertama.
- Mengenal sintaks dasar PHP.
- Menampilkan teks menggunakan `echo`.
- Menggabungkan HTML dengan PHP.
- Memahami perbedaan HTML dan PHP.

---

## Apa Itu PHP?

PHP adalah bahasa pemrograman yang digunakan untuk membuat website menjadi **dinamis**.

PHP dapat digunakan untuk:

- Login
- Registrasi
- Menampilkan data
- Mengolah data
- Menghitung nilai
- Membuat dashboard
- Berkomunikasi dengan database

PHP berjalan di **Server**, bukan di browser.

---

## Bagaimana PHP Bekerja?

Misalnya kita membuka halaman berikut.

```
http://localhost/workshop-php
```

Proses yang terjadi adalah:

```
Browser

↓

Apache menerima request

↓

PHP menjalankan file

↓

Menghasilkan HTML

↓

HTML dikirim ke Browser

↓

Website ditampilkan
```

Perlu diingat bahwa browser **tidak pernah menjalankan PHP**.

Browser hanya menerima hasil akhirnya berupa HTML.

---

## Program PHP Pertama

Buka file:

```
index.php
```

Ganti isinya menjadi:

```php
<?php

echo "Halo Dunia!";

?>
```

Simpan file.

Kemudian buka:

```
http://localhost/workshop-php
```

Hasilnya:

```
Halo Dunia!
```

🎉 Selamat!

Kamu baru saja membuat program PHP pertamamu.

---

## Penjelasan Kode

Mari kita lihat setiap barisnya.

```php
<?php
```

Artinya:

> Mulai menulis kode PHP.

---

```php
echo "Halo Dunia!";
```

Artinya:

> Tampilkan tulisan ke browser.

---

```php
?>
```

Artinya:

> Akhir dari blok PHP.

> **Catatan:** Pada file PHP yang hanya berisi kode PHP, penutup `?>` sebenarnya tidak wajib ditulis. Namun pada workshop ini kita tetap menggunakannya agar lebih mudah dipahami.

---

## Mengenal echo

`echo` adalah perintah untuk menampilkan sesuatu ke browser.

Contoh:

```php
<?php

echo "Selamat Datang";

?>
```

Output:

```
Selamat Datang
```

---

Menampilkan angka:

```php
<?php

echo 100;

?>
```

Output:

```
100
```

---

Menampilkan lebih dari satu teks:

```php
<?php

echo "Halo";
echo "<br>";
echo "Selamat Belajar PHP";

?>
```

Output:

```
Halo
Selamat Belajar PHP
```

---

## Apa Itu `<br>`?

`<br>` adalah tag HTML.

Fungsinya:

Membuat baris baru.

Contoh:

```php
<?php

echo "Baris Pertama";
echo "<br>";
echo "Baris Kedua";

?>
```

Hasil:

```
Baris Pertama
Baris Kedua
```

---

## Menampilkan HTML Menggunakan PHP

PHP dapat menghasilkan kode HTML.

Contoh:

```php
<?php

echo "<h1>Workshop PHP</h1>";

?>
```

Browser akan menampilkan:

## Workshop PHP

---

Contoh lain:

```php
<?php

echo "<p>Belajar membuat website menggunakan PHP.</p>";

?>
```

Output:

Paragraf akan ditampilkan seperti HTML biasa.

---

## Menggabungkan HTML dan PHP

Salah satu kelebihan PHP adalah dapat digabung dengan HTML.

Contoh:

```php
<!DOCTYPE html>
<html>

<head>
    <title>Workshop PHP</title>
</head>

<body>

<h1>Belajar PHP</h1>

<?php
echo "<p>Selamat datang di Workshop PHP.</p>";
?>

</body>

</html>
```

Perhatikan bahwa:

- HTML ditulis seperti biasa.
- PHP hanya digunakan ketika dibutuhkan.

Inilah cara yang paling sering digunakan dalam pembuatan website.

---

## HTML vs PHP

Misalkan kita ingin menampilkan judul.

Menggunakan HTML:

```html
<h1>Halo Dunia</h1>
```

Menggunakan PHP:

```php
<?php

echo "<h1>Halo Dunia</h1>";

?>
```

Keduanya menghasilkan tampilan yang sama.

Perbedaannya adalah:

| HTML | PHP |
|------|-----|
| Dibaca langsung oleh browser | Dijalankan terlebih dahulu oleh server |
| Tidak dapat menghitung | Dapat mengolah data |
| Bersifat statis | Bersifat dinamis |

---

## Aturan Penulisan PHP

PHP memiliki beberapa aturan dasar.

## Gunakan titik koma (;)

Setiap perintah diakhiri dengan:

```php
;
```

Contoh:

```php
echo "Halo";
```

Jika lupa menambahkan `;`, program akan menghasilkan error.

---

## Huruf Besar dan Kecil

Nama perintah PHP tidak membedakan huruf besar atau kecil.

Contoh berikut sama-sama bisa dijalankan.

```php
echo "Halo";
```

```php
ECHO "Halo";
```

Namun, sesuai standar penulisan kode (coding style), kita selalu menggunakan huruf kecil.

---

## Spasi

PHP tidak terlalu mempermasalahkan spasi.

Contoh berikut tetap benar.

```php
echo "Halo";
```

```php
echo      "Halo";
```

Namun gunakan penulisan yang rapi agar mudah dibaca.

---

## Komentar

Komentar digunakan untuk memberi catatan pada kode.

Komentar **tidak akan dijalankan** oleh PHP.

Komentar satu baris:

```php
<?php

// Ini komentar

echo "Halo";

?>
```

---

Komentar banyak baris:

```php
<?php

/*
Komentar
lebih dari
satu baris
*/

echo "Halo";

?>
```

---

## Error

Kadang program tidak berjalan.

Misalnya:

```php
<?php

echo "Halo"

?>
```

Program di atas menghasilkan error karena tidak ada titik koma.

Error adalah hal yang sangat biasa dalam dunia pemrograman.

Bahkan programmer profesional pun setiap hari menemui error.

Yang penting adalah membaca pesan error dan memperbaikinya satu per satu.

---

## Tips Menulis Kode

✅ Gunakan nama file yang jelas.

```
index.php
```

✅ Simpan setiap selesai mengetik.

```
CTRL + S
```

✅ Refresh browser.

```
F5
```

Jika perubahan belum muncul:

- Pastikan file sudah disimpan.
- Pastikan Apache masih berjalan.
- Pastikan membuka folder project yang benar.

---

## Hands-on

Sekarang coba gabungkan HTML dan PHP.

```php
<!DOCTYPE html>
<html>

<head>
    <title>Website Pertama</title>
</head>

<body>
    <h1>Selamat Datang</h1>
    <p>Ini dibuat menggunakan HTML.</p>

    <?php
    echo "<h2>Halo dari PHP!</h2>";
    echo "<p>PHP berhasil dijalankan.</p>";
    ?>

</body>
</html>
```

Perhatikan bahwa HTML dan PHP dapat bekerja bersama dalam satu file.

---

## Tahukah Kamu?

Website besar terdiri dari ribuan bahkan jutaan file PHP.

Namun semuanya tetap menggunakan konsep dasar yang sama seperti yang sedang kamu pelajari sekarang.

Karena itu, memahami dasar PHP sangat penting sebelum mempelajari framework seperti Laravel.

---

## Challenge

Buat tampilan berikut menggunakan `echo`.

```
=========================
      BIODATA
=========================
Nama    : ...
Kelas   : ...
Hobi    : ...
Cita-cita : ...
=========================
```

Boleh menggunakan tag HTML seperti:

- `<h1>`
- `<hr>`
- `<p>`
- `<br>`

Tidak perlu sama persis.

---

## Ringkasan

Pada materi ini kita telah belajar bahwa:

- PHP adalah bahasa pemrograman yang berjalan di server.
- Program PHP diawali dengan `<?php`.
- Perintah `echo` digunakan untuk menampilkan output.
- HTML dan PHP dapat digabung dalam satu file.
- Setiap perintah diakhiri dengan titik koma (`;`).
- Komentar digunakan untuk memberi catatan pada kode.
- Error adalah hal yang wajar dan dapat diperbaiki dengan membaca pesan yang muncul.

---

## Materi Selanjutnya

Sekarang kita sudah bisa menampilkan teks menggunakan PHP.

Pada materi berikutnya kita akan membuat website sederhana menggunakan PHP.