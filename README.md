# Portfolio Website

Website portofolio pribadi **M. Awaludin Majid**, mahasiswa Teknik Informatika di Universitas Pancasakti Bekasi. Website ini dibangun menggunakan arsitektur fullstack hybrid dengan kombinasi Laravel dan Node.js untuk menampilkan profil, proyek, galeri, resume, dan fitur kontak.

## 🚀 Fitur Utama

- **Profil & Biodata**: Informasi pribadi, pendidikan, pengalaman kerja, dan keterampilan.
- **Showcase Proyek**: Tampilan proyek-proyek yang telah dikerjakan, termasuk deskripsi dan teknologi yang digunakan.
- **Galeri Foto**: Koleksi foto pribadi dengan fitur upload dan manajemen.
- **Resume**: CV online dengan informasi lengkap.
- **Kontak**: Formulir kontak dengan integrasi email dan WhatsApp.
- **Admin Panel**: Panel administrasi untuk mengelola pesan kontak dan galeri (opsional).
- **Real-time Features**: Menggunakan Node.js untuk fitur real-time seperti notifikasi.

## 🛠️ Teknologi yang Digunakan

### Backend
- **Laravel** (PHP Framework) - MVC, REST API, Authentication, Eloquent ORM
- **Node.js** - Real-time server, event-driven API
- **MySQL** - Database utama
- **Firebase Firestore** - Database NoSQL untuk real-time data

### Frontend
- **HTML5, CSS3** - Struktur dan styling responsif
- **JavaScript (ES6+)** - Interaksi dan DOM manipulation
- **React (via Vite)** - Komponen modern untuk UI
- **Bootstrap** - Framework CSS untuk desain responsif

### Tools & Libraries
- **Composer** - Dependency management untuk PHP
- **NPM/Yarn** - Dependency management untuk JavaScript
- **Vite** - Build tool untuk frontend
- **Laragon** - Environment development (Windows)
- **Postman** - API testing
- **Git** - Version control

### Mobile (Opsional)
- **Flutter & Dart** - Cross-platform mobile app

## 🏗️ Arsitektur Sistem

Website ini menggunakan arsitektur **hybrid fullstack**:

- **Laravel Backend**: Menangani business logic, database, authentication, dan REST API.
- **Node.js Backend**: Menangani real-time features dan event-driven operations.
- **Frontend**: HTML/CSS/JS dengan integrasi React untuk komponen dinamis.

### Flow Sistem
```
Client (Browser) → Laravel API → MySQL
Client → Node.js Server (untuk real-time)
```

## 📋 Prasyarat

Sebelum menjalankan proyek ini, pastikan kamu memiliki:

- **PHP** >= 8.1
- **Composer** (untuk dependency PHP)
- **Node.js** >= 16.x & NPM
- **MySQL** atau database yang kompatibel
- **Laragon** atau XAMPP untuk environment lokal (Windows)
- **Git** untuk cloning repository

## 🚀 Instalasi & Setup

1. **Clone Repository**
   ```bash
   git clone https://github.com/AwaludinMajid/portofolio.git
   cd portofolio
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js Dependencies**
   ```bash
   npm install
   ```

4. **Setup Environment**
   - Copy file `.env.example` ke `.env`
   - Konfigurasi database di `.env`:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=portofolio
     DB_USERNAME=root
     DB_PASSWORD=
     ```
   - Generate application key:
     ```bash
     php artisan key:generate
     ```

5. **Setup Database**
   ```bash
   php artisan migrate
   php artisan db:seed  # Opsional: untuk data dummy
   ```

6. **Build Assets**
   ```bash
   npm run build
   # atau untuk development:
   npm run dev
   ```

## ▶️ Cara Menjalankan

### Development Mode
1. **Jalankan Laravel Server**
   ```bash
   php artisan serve
   ```
   Server akan berjalan di `http://localhost:8000`

2. **Jalankan Node.js Server** (untuk real-time features)
   ```bash
   node server.js  # atau sesuai dengan entry point Node.js kamu
   ```

3. **Jalankan Vite Dev Server** (untuk hot reload frontend)
   ```bash
   npm run dev
   ```

### Production Mode
1. **Build untuk Production**
   ```bash
   npm run build
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Deploy ke Server**
   - Upload ke hosting yang mendukung PHP dan Node.js
   - Setup web server (Apache/Nginx) untuk Laravel
   - Jalankan Node.js sebagai service

## 📁 Struktur Proyek

```
portofolio/
├── app/                    # Laravel application code
│   ├── Http/Controllers/   # Controllers
│   ├── Models/            # Eloquent models
│   └── Mail/              # Email templates
├── resources/             # Views, assets
│   ├── views/             # Blade templates
│   ├── css/               # Stylesheets
│   └── js/                # JavaScript/React components
├── routes/                # Route definitions
├── database/              # Migrations, seeders
├── public/                # Public assets, uploads
├── storage/               # File storage
├── vendor/                # Composer dependencies
├── node_modules/          # NPM dependencies
├── server.js              # Node.js server entry point
├── vite.config.js         # Vite configuration
└── composer.json          # PHP dependencies
```

## 🔧 Testing

Jalankan test dengan PHPUnit:
```bash
php artisan test
```

## 📞 Kontak

**M. Awaludin Majid**
- Email: m.awaludinmajid@gmail.com
- WhatsApp: +62 852-1732-7220
- GitHub: https://github.com/AwaludinMajid

## 📄 Lisensi

Proyek ini bersifat pribadi dan tidak untuk distribusi komersial. Kode dapat digunakan sebagai referensi dengan kredit yang sesuai.

---

**Dibangun dengan  oleh M. Awaludin Majid**