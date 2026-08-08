# Materi 02 - Instalasi XAMPP

> **Durasi:** ±30 Menit  
> **Level:** Pemula  
> **Prerequisite:** 01 - Mengenal Website

---

## Tujuan Pembelajaran

Setelah mempelajari materi ini, peserta diharapkan mampu:

- Mengetahui fungsi XAMPP.
- Memahami komponen yang ada di dalam XAMPP.
- Menginstal XAMPP dengan benar.
- Menjalankan Apache melalui XAMPP Control Panel.
- Membuat folder project PHP.
- Menjalankan website PHP pertama menggunakan localhost.

---

## Kenapa Harus Install XAMPP?

Pada materi sebelumnya kita belajar bahwa **PHP berjalan di Server**.

Masalahnya...

Komputer kita saat ini **bukan Server**.

Agar komputer kita bisa menjalankan file PHP, kita perlu mengubah komputer menjadi **Web Server lokal**.

Di sinilah XAMPP berperan.

---

## Apa Itu XAMPP?

**XAMPP** adalah aplikasi yang menyediakan lingkungan pengembangan (Development Environment) agar kita dapat menjalankan website secara lokal tanpa perlu menyewa hosting.

Dengan XAMPP, komputer kita dapat berfungsi seperti server sungguhan.

---

## Apa Arti XAMPP?

| Huruf | Arti |
|-------|------|
| X | Cross Platform |
| A | Apache |
| M | MySQL / MariaDB |
| P | PHP |
| P | Perl |

Untuk workshop ini, kita hanya akan menggunakan:

- Apache
- PHP

MySQL akan dipelajari pada materi lanjutan di luar workshop ini.

---

## Mengenal Komponen XAMPP

## Apache

Apache adalah Web Server.

Tugas Apache adalah:

- menerima request dari browser
- menjalankan file PHP
- mengirimkan hasil ke browser

Tanpa Apache, file PHP tidak akan bisa dijalankan.

---

## PHP

PHP adalah bahasa pemrograman yang akan kita gunakan.

Saat browser meminta halaman website:

```
index.php
```

Apache akan meminta PHP untuk menjalankan file tersebut.

---

## MySQL / MariaDB

MySQL digunakan untuk menyimpan data.

Contohnya:

- Data akun
- Data siswa
- Data produk
- Data nilai
- Data transaksi

Pada workshop ini kita belum menggunakan database.

---

## phpMyAdmin

phpMyAdmin adalah aplikasi berbasis web untuk mengelola database MySQL.

Biasanya digunakan untuk:

- membuat database
- membuat tabel
- melihat data
- mengubah data

Pada workshop ini kita belum menggunakannya.

---

## Diagram Cara Kerja XAMPP

```
Browser

↓

Apache

↓

PHP

↓

HTML

↓

Browser
```

---

## Download XAMPP

Silakan unduh XAMPP melalui website resmi:

https://www.apachefriends.org


---

## Instalasi XAMPP

Ikuti langkah berikut.

1. Jalankan installer XAMPP.

2. Klik **Next**.

3. Biarkan pilihan default.

4. Klik **Next**.

5. Pilih lokasi instalasi.

Disarankan:

```
C:\xampp
```

6. Klik **Install**.

7. Tunggu hingga proses selesai.

8. Klik **Finish**.

---

## Membuka XAMPP Control Panel

Setelah instalasi selesai, buka:

```
XAMPP Control Panel
```

Tampilannya kurang lebih seperti berikut.

```
+--------------------------------------+
| Module      Status      Action       |
|--------------------------------------|
| Apache                  [Start]      |
| MySQL                   [Start]      |
| FileZilla               [Start]      |
| Mercury                 [Start]      |
| Tomcat                  [Start]      |
+--------------------------------------+
```

---

## Menjalankan Apache

Klik tombol:

```
Start
```

pada bagian Apache.

Jika berhasil, tampilannya menjadi:

```
Apache

Running
```

Biasanya akan berwarna hijau.

---

## Jika Apache Tidak Bisa Berjalan

Kadang muncul pesan seperti:

```
Apache shutdown unexpectedly
```

Penyebab paling umum:

- Port 80 sedang digunakan aplikasi lain.
- IIS Windows aktif.
- Skype menggunakan port 80.
- Apache belum dijalankan sebagai Administrator.

Jika mengalami masalah, hubungi instruktur.

---

## Mengecek Apakah Apache Berhasil

Buka browser.

Ketik:

```
http://localhost
```

Jika berhasil, akan muncul halaman sambutan XAMPP.

Artinya:

✅ Apache berhasil berjalan.

---

## Apa Itu localhost?

```
localhost
```

adalah alamat menuju komputer kita sendiri.

Artinya browser tidak mengambil data dari internet.

Melainkan mengambil data dari komputer sendiri.

Diagramnya:

```
Browser

↓

localhost

↓

Komputer Kita

↓

Apache

↓

PHP
```

---

## Folder htdocs

Semua project website disimpan pada folder:

```
C:\xampp\htdocs
```

Folder inilah yang dianggap sebagai root website oleh Apache.

---

## Membuat Project Baru

Masuk ke folder:

```
C:\xampp\htdocs
```

Buat folder baru.

Misalnya:

```
workshop-php
```

Sehingga strukturnya menjadi:

```
C:\xampp\htdocs\workshop-php
```

---

## Membuat File Pertama

Di dalam folder tersebut buat file:

```
index.php
```

Isi sementara dengan:

```php
<?php

echo "Halo Workshop PHP!";

?>
```

Simpan file tersebut.

---

## Menjalankan Project

Buka browser.

Ketik:

```
http://localhost/workshop-php
```

Jika berhasil maka tampilannya menjadi:

```
Halo Workshop PHP!
```

🎉 Selamat!

Website PHP pertama berhasil dijalankan.

---

## Kenapa Nama Filenya index.php?

Apache secara otomatis akan mencari file berikut:

```
index.php
```

atau

```
index.html
```

Jika file tersebut ada, maka file itulah yang pertama kali ditampilkan.

Karena itu hampir semua website memiliki file:

```
index.php
```

sebagai halaman utama.

---

## Mengenal Struktur Project

Nantinya project kita akan berkembang menjadi seperti berikut.

```
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

Namun untuk saat ini kita cukup memiliki:

```
workshop-php/

└── index.php
```

---

## Mengedit Menggunakan Visual Studio Code

Buka Visual Studio Code.

Pilih:

```
File

↓

Open Folder
```

Pilih folder:

```
workshop-php
```

Sekarang kita siap mulai menulis kode PHP.

---

## Tips Selama Workshop

✅ Simpan file menggunakan ekstensi:

```
.php
```

bukan

```
.txt
```

---

✅ Jangan menyimpan project di Desktop.

Gunakan:

```
C:\xampp\htdocs
```

---

✅ Setelah mengubah kode, tekan:

```
CTRL + S
```

Kemudian lakukan:

```
Refresh Browser (F5)
```

untuk melihat hasilnya.

---


## Challenge

Coba ubah isi program menjadi:

```php
<?php

echo "Nama Saya ...";
echo "<br>";
echo "Saya Siap Belajar PHP!";

?>
```

Jalankan kembali.

Apakah hasilnya berubah?

Jika ya, berarti Apache berhasil menjalankan kode PHP yang kamu buat.

---

## Ringkasan

Pada materi ini kita telah belajar bahwa:

- XAMPP membuat komputer kita dapat berfungsi sebagai web server.
- Apache bertugas menjalankan website.
- Semua project PHP disimpan di dalam folder `htdocs`.
- Browser mengakses project menggunakan `localhost`.
- File `index.php` merupakan halaman utama website.
- Setiap perubahan kode harus disimpan sebelum dijalankan kembali.

---

## Materi Selanjutnya

Pada materi berikutnya kita akan mulai menulis kode PHP pertama dan mengenal sintaks dasar PHP.