# Materi 01 - Mengenal Website

> **Durasi:** ±30 Menit  
> **Level:** Pemula  
> **Prerequisite:** Tidak ada

---

## Tujuan Pembelajaran

Setelah mempelajari materi ini, peserta diharapkan mampu:

- Menjelaskan apa itu website.
- Mengetahui perbedaan website statis dan dinamis.
- Memahami bagaimana sebuah website bekerja.
- Mengenal peran Browser, Server, HTML, CSS, JavaScript, dan PHP.
- Memahami mengapa kita menggunakan PHP dalam pengembangan website.

---

## Pernahkah Kamu Berpikir?

Setiap hari kita mengakses internet.

Misalnya:

- Instagram
- TikTok
- YouTube
- Google
- Shopee
- Tokopedia

Namun pernahkah kamu bertanya,

> **"Sebenarnya apa yang terjadi ketika kita membuka sebuah website?"**

Pada materi ini kita akan mempelajari jawabannya.

---

## Apa Itu Website?

Website adalah sekumpulan halaman yang dapat diakses melalui internet menggunakan browser.

Contohnya:

- https://google.com
- https://youtube.com
- https://github.com

Website dapat berisi:

- Teks
- Gambar
- Video
- Audio
- Formulir
- Animasi
- Data pengguna

Semua informasi tersebut dikirim dari sebuah **server** ke **browser**.

---

## Website Statis vs Website Dinamis

## Website Statis

Website statis memiliki isi yang tetap.

Contohnya:

- Profil perusahaan
- Landing page
- Portofolio sederhana

Misalnya terdapat tulisan:

```
Selamat Datang
```

Maka semua pengunjung akan melihat tulisan yang sama.

---

## Website Dinamis

Website dinamis dapat berubah sesuai kondisi.

Contohnya:

- Instagram
- Facebook
- Gmail
- Tokopedia

Misalnya:

```
Halo, Yosep!
```

Ketika pengguna lain login, maka tampilannya menjadi:

```
Halo, Budi!
```

Artinya halaman dibuat secara otomatis oleh server menggunakan bahasa pemrograman seperti PHP.

---

## Komponen Website

Sebuah website umumnya terdiri dari beberapa komponen.

```
Pengguna

↓

Browser

↓

Internet

↓

Web Server

↓

PHP

↓

HTML

↓

Browser
```

Mari kita pelajari satu per satu.

---

## 1. Browser

Browser adalah aplikasi untuk membuka website.

Contohnya:

- Google Chrome
- Microsoft Edge
- Mozilla Firefox
- Safari

Tugas browser adalah:

- Mengirim permintaan ke server.
- Menampilkan halaman website.

---

## 2. Internet

Internet adalah jaringan yang menghubungkan komputer di seluruh dunia.

Melalui internet, browser dapat berkomunikasi dengan server.

---

## 3. Server

Server adalah komputer yang menyimpan website.

Di dalam server terdapat:

- File HTML
- File CSS
- File PHP
- Database
- Gambar
- Video

Server akan mengirimkan data ketika ada permintaan dari browser.

---

## 4. HTML

HTML (**HyperText Markup Language**) digunakan untuk membuat struktur halaman.

Contohnya:

```html
<h1>Halo Dunia</h1>

<p>Belajar PHP itu menyenangkan.</p>
```

HTML menentukan isi halaman.

---

## 5. CSS

CSS digunakan untuk mempercantik tampilan.

Contohnya:

```css
h1{
    color:blue;
}
```

CSS mengatur:

- Warna
- Ukuran
- Posisi
- Font
- Layout

---

## 6. JavaScript

JavaScript membuat website menjadi interaktif.

Contohnya:

- Tombol
- Animasi
- Popup
- Slider
- Validasi Form

---

## 7. PHP

PHP adalah bahasa pemrograman yang berjalan di server.

PHP dapat:

- Mengolah data
- Mengambil data dari database
- Menampilkan data pengguna
- Login
- Registrasi
- Menghitung nilai
- Membuat halaman secara otomatis

---

# Bagaimana Website Bekerja?

Mari kita lihat prosesnya.

```
Pengguna membuka

http://localhost/workshop-php

↓

Browser mengirim Request

↓

Server menerima Request

↓

PHP dijalankan

↓

PHP membuat HTML

↓

Server mengirim HTML

↓

Browser menampilkan halaman
```

Inilah proses yang terjadi setiap kali kita membuka sebuah website.

---

## Apa Itu Request?

Request adalah permintaan dari browser kepada server.

Contohnya ketika kita mengetik:

```
http://localhost/workshop-php
```

Browser berkata kepada server:

> "Tolong kirim halaman website."

---

## Apa Itu Response?

Response adalah jawaban dari server.

Server mengirimkan:

- HTML
- CSS
- JavaScript
- Gambar

Semua itu kemudian ditampilkan oleh browser.

---

## Mengapa PHP Tidak Terlihat?

Misalnya kita memiliki kode berikut.

```php
<?php

echo "Halo Dunia";

?>
```

Yang diterima browser bukanlah kode PHP.

Browser hanya menerima hasilnya.

```
Halo Dunia
```

Artinya:

PHP dijalankan terlebih dahulu di server.

Browser **tidak pernah melihat kode PHP**.

---

## HTML vs PHP

HTML

```html
<h1>Halo Dunia</h1>
```

langsung ditampilkan oleh browser.

---

PHP

```php
<?php

echo "<h1>Halo Dunia</h1>";

?>
```

dijalankan di server terlebih dahulu.

Kemudian menghasilkan:

```html
<h1>Halo Dunia</h1>
```

Barulah browser menampilkannya.

---

## Kenapa Harus Belajar PHP?

PHP memiliki banyak kelebihan.

✅ Mudah dipelajari.

✅ Sintaks sederhana.

✅ Banyak dokumentasi.

✅ Banyak digunakan di dunia kerja.

✅ Menjadi dasar framework Laravel.

---

## Tahukah Kamu?

Banyak website terkenal menggunakan PHP.

Contohnya:

- Facebook (awal pengembangannya menggunakan PHP)
- Wikipedia
- WordPress
- Laravel (Framework PHP)

Artinya, PHP masih sangat relevan hingga saat ini.

---

## Ilustrasi Keseluruhan

```
+----------------------+
|      Browser         |
+----------------------+
           |
           | Request
           |
           V
+----------------------+
|      Web Server      |
+----------------------+
           |
           |
           V
+----------------------+
|         PHP          |
+----------------------+
           |
           |
           V
+----------------------+
|        HTML          |
+----------------------+
           |
           | Response
           |
           V
+----------------------+
|      Browser         |
+----------------------+
```

---
## Challenge

Jawablah pertanyaan berikut.

1. Apa yang dimaksud dengan website?

2. Apa fungsi browser?

3. Apa fungsi server?

4. Apa perbedaan HTML dan PHP?

5. Mengapa PHP tidak dapat dijalankan langsung di browser?

Diskusikan jawaban bersama instruktur.

---

## Ringkasan

Pada materi ini kita telah belajar bahwa:

- Website adalah kumpulan halaman yang dapat diakses melalui internet.
- Browser digunakan untuk membuka website.
- Server menyimpan file website.
- HTML membuat struktur halaman.
- CSS mempercantik tampilan.
- JavaScript membuat website menjadi interaktif.
- PHP berjalan di server untuk menghasilkan halaman secara dinamis.
- Browser hanya menerima hasil akhir berupa HTML.

---

## Materi Selanjutnya

Pada materi berikutnya kita akan mempersiapkan lingkungan pengembangan dengan menginstal **XAMPP**, sehingga komputer kita dapat berperan sebagai web server dan menjalankan aplikasi PHP secara lokal.