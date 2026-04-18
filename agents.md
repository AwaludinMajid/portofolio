
---

# 👨‍💻 Agent Profile & Project Documentation

---

## 🧑‍💼 Developer Profile

Field	Detail
Nama	M. Awaludin Majid
Status	Mahasiswa Teknik Informatika (Semester 8)
Universitas	Universitas Pancasakti Bekasi
Tempat / Tanggal Lahir	Bogor, 09 Mei 2004
Jenis Kelamin	Laki-laki
Status Pernikahan	Belum menikah
Kewarganegaraan	Indonesia
Alamat	KP. Lembur RT.001/RW.007, Bojong Kulur, Gunung Putri, Bogor, Jawa Barat
Email	m.awaludinmajid@gmail.com

WhatsApp	+62 852-1732-7220
GitHub	https://github.com/AwaludinMajid

---

## 📌 Tentang Saya

Saya adalah mahasiswa semester 8 Teknik Informatika dengan latar belakang Teknik Komputer dan Jaringan (TKJ). Saya memiliki pengalaman dalam pengembangan aplikasi berbasis **web dan mobile**, menggunakan teknologi seperti **Flutter, Dart, PHP, Laravel, MySQL, dan Firebase**.

Saya telah mengembangkan project **fullstack hybrid** dengan kombinasi Laravel dan Node.js, termasuk pembangunan REST API dan integrasi data. Selain itu, saya juga memiliki pengalaman dalam **administrasi dan IT support**, seperti pengelolaan dokumen, troubleshooting perangkat, instalasi software, serta perawatan jaringan.

Saya mampu bekerja secara mandiri maupun dalam tim, cepat beradaptasi dengan teknologi baru, dan memiliki komitmen tinggi untuk terus belajar dan berkembang.

---

# 🎓 Riwayat Pendidikan

## 🎓 Universitas Pancasakti Bekasi

**S1 Teknik Informatika**
📅 2022 – Sekarang

### Fokus Pembelajaran:

* Web Development: HTML, CSS, JavaScript, PHP, Laravel (MVC, REST API)
* Mobile Development: Flutter & Dart
* Database: MySQL & Firebase Firestore
* Software Engineering: System design, testing, deployment
* Security: Authentication, CSRF, XSS, validasi input

### Pengalaman Akademik:

* Mengembangkan website portofolio fullstack (Laravel + Node.js)
* Membangun REST API dengan autentikasi dan validasi data
* Integrasi backend–frontend dan pengelolaan database relasional
* Menerapkan clean code dan separation of concerns

---

## 🏫 SMK Sumber Daya Bekasi

**Teknik Komputer dan Jaringan (TKJ)**
📅 2019 – 2022

### Fokus Pembelajaran:

* Instalasi & konfigurasi komputer
* Jaringan dasar (LAN, WAN, TCP/IP, subnetting)
* Troubleshooting hardware & software
* Dasar pemrograman

### Pengalaman:

* Instalasi jaringan lokal
* Perbaikan komputer
* Perawatan perangkat dan dokumentasi teknis

---

## 🏫 SMP Negeri 3 Gunung Putri

📅 2016 – 2019

## 🏫 SDN 01 Bojong Kulur

📅 2010 – 2016

---

# 💼 Pengalaman Kerja

## 🏢 Magang – PT Pusat Bekam Internasional

**Staf Administrasi & IT Support**
📅 April – Juni 2025

### Tanggung Jawab:

* Pengelolaan dokumen digital (scan, laminasi, upload, arsip)
* Pengolahan data karyawan & pelatihan (Excel)
* Instalasi software & maintenance komputer
* Troubleshooting jaringan dan perangkat
* Mendukung digitalisasi sistem administrasi

### Pencapaian:

* Meningkatkan efisiensi pengelolaan data
* Menyelesaikan tugas administrasi dan IT sesuai target
* Mengoptimalkan workflow digital

---

## 🏢 Magang – Kelurahan Jatiasih

**Staf Administrasi**
📅 ±2 Bulan

### Tanggung Jawab:

* Pengelolaan dokumen administrasi
* Pelayanan administrasi publik
* Input data kependudukan
* Dukungan teknis komputer dasar

### Pembelajaran:

* Memahami sistem birokrasi
* Meningkatkan komunikasi publik
* Disiplin kerja formal

---

# 🛠️ Keahlian Teknis

## 🌐 Web Development

* HTML5, CSS3 (Responsive, Flexbox, Grid)
* JavaScript (ES6+, DOM, Fetch API)
* PHP Native & Laravel
* REST API Development & Integration

## ⚙️ Backend

* Laravel (MVC, Eloquent ORM, Validation)
* Node.js (Express, modular, async/await)
* Authentication: Sanctum, JWT
* Error handling & data validation

## 📱 Mobile Development

* Flutter (cross-platform)
* Dart
* Firebase (Auth, Firestore, Storage)

## 🗄️ Database

* MySQL (relasional)
* Firebase Firestore (NoSQL, real-time)

## 🧰 Tools

* Visual Studio Code
* Git & GitHub
* Postman
* Laragon / XAMPP

## 🖥️ IT Support

* Instalasi OS & software
* Troubleshooting komputer
* Jaringan LAN dasar
* Microsoft Word & Excel
* Manajemen dokumen digital

---

# 🚀 Project Overview

## 📌 Project

**Website Portofolio Pribadi (Fullstack Hybrid Laravel + Node.js)**

---

## 🎯 Tujuan

* Media personal branding profesional
* Showcase skill & project
* Implementasi arsitektur fullstack hybrid
* Integrasi Laravel + Node.js (real-time)

---

## 🧱 Arsitektur Sistem

### Frontend

* HTML (struktur)
* CSS (responsive UI)
* JavaScript (interaksi)

### Backend Laravel

* REST API
* Authentication & validation
* Business logic
* Database (Eloquent)

### Backend Node.js

* Real-time system
* Event-driven API
* Middleware handling

### Database

* MySQL (utama)
* Firebase (opsional real-time)

---

## 🔄 Flow Sistem

### Flow Utama

```
Client → Laravel API → MySQL
```

### Flow Real-time

```
Client → Node.js Server
```

---

# ✨ Fitur Utama

* 📄 Profil & biodata
* 🧑‍💻 Showcase project
* 📞 Kontak + WhatsApp integration
* 💬 Real-time feature
* 🔐 Authentication system

---

# 🧩 Struktur Project

## Laravel

```
/app
/routes
/database
/resources/views
/public
```

## Node.js

```
/api
  server.js
  /routes
  /controllers
  /middleware
```

## Frontend

```
/public
  index.php
  /css
  /js
  /assets
```

---

# 🧑‍💻 Coding Standards

## General

* Penamaan jelas & konsisten
* Gunakan bahasa Inggris
* Pisahkan logic dan UI
* Komentar pada bagian penting
* Terapkan KISS & DRY

## Laravel

* MVC Pattern
* RESTful API
* Form Request Validation
* Eloquent ORM

```php
public function store(StoreProjectRequest $request)
{
    return Project::create($request->validated());
}
```

## JavaScript

* ES6+
* const & let
* Modular structure
* Async/Await

## Node.js

* Modular architecture
* Async/Await
* Middleware usage

---

# 🔐 Security Standards

## Laravel

* CSRF Protection
* Input Validation
* Password Hashing

```php
use Illuminate\Support\Facades\Hash;
$password = Hash::make($request->password);
```

* Auth Middleware
* Anti SQL Injection (Eloquent)

## API

* Sanctum / JWT
* Rate Limiting
* Endpoint protection

## Node.js

* Secure CORS config
* Input validation
* Error handling aman

## Frontend

* XSS prevention
* No sensitive data in localStorage
* HTTPS (production)

---

# 📈 Roadmap

## Jangka Pendek

* Selesaikan Tugas Akhir (POS)
* Deploy portfolio
* Dark mode
* Lengkapi README

## Jangka Menengah

* Admin Dashboard (CMS)
* Belajar Docker
* React / Vue
* CI/CD

## Jangka Panjang

* AI Chat Assistant
* Cloud deployment
* Real-time notification
* Performance optimization

---

# 🏁 Kesimpulan

Project ini mengimplementasikan arsitektur fullstack modern berbasis **Laravel + Node.js** dengan pendekatan hybrid.

Keunggulan:

* Fleksibilitas pengembangan tinggi
* Mudah dikembangkan & scalable
* Mendukung real-time system
* User experience lebih interaktif
* Siap dikembangkan ke tahap production (AI, CMS, dll)

---
