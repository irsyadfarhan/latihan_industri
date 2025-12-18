# 🎓 Sistem Permohonan Latihan Industri UiTM Permatang Pauh

Sistem pengurusan permohonan latihan industri untuk pelajar UiTM Permatang Pauh.

## 📋 Kandungan

- [Tentang Projek](#tentang-projek)
- [Ciri-ciri Utama](#ciri-ciri-utama)
- [Teknologi](#teknologi)
- [Pemasangan](#pemasangan)
- [Penggunaan](#penggunaan)
- [Skrin Paparan](#skrin-paparan)
- [Lesen](#lesen)

## 📖 Tentang Projek

Sistem web-based untuk memudahkan proses permohonan dan pengurusan latihan industri pelajar. Sistem ini mempunyai 2 panel utama:
- **Panel Pelajar** - Untuk pelajar membuat permohonan
- **Panel Admin** - Untuk pentadbir menguruskan permohonan

## ✨ Ciri-ciri Utama

### Panel Pelajar
- ✅ Pendaftaran akaun baharu
- ✅ Permohonan latihan industri
- ✅ Muat naik dokumen (Resume, Transkrip, Cover Letter)
- ✅ Lihat status permohonan
- ✅ Kemaskini profil
- ✅ Notifikasi email

### Panel Admin
- ✅ Dashboard dengan statistik
- ✅ Pengurusan permohonan (Terima/Tolak)
- ✅ Muat naik surat keputusan (PDF)
- ✅ Pengurusan pelajar
- ✅ Pengurusan admin
- ✅ Laporan dan analisis
- ✅ Log sistem

## 🛠️ Teknologi

- **Backend**: PHP 8.0+
- **Database**: MySQL 8.0+
- **Frontend**: HTML5, CSS3, JavaScript
- **Email**: PHPMailer dengan Gmail SMTP
- **Server**: Apache/Nginx
- **Version Control**: Git

## 📦 Pemasangan

### Keperluan
- PHP 8.0 atau lebih tinggi
- MySQL 8.0 atau lebih tinggi
- Apache/Nginx web server
- Composer (untuk PHPMailer)
- Git

### Langkah-langkah

1. **Clone repository**
```bash
git clone https://github.com/YOUR_USERNAME/uitm-latihan-industri.git
cd uitm-latihan-industri
```

2. **Install dependencies**
```bash
composer install
```

3. **Setup database**
```bash
# Import database
mysql -u root -p
CREATE DATABASE latihan_industri;
USE latihan_industri;
SOURCE database/latihan_industri.sql;
```

4. **Configure database connection**
```php
// Edit config.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan_industri";
```

5. **Configure email (optional)**
```php
// Edit lupa_kata_laluan.php (line 25-27)
define('GMAIL_USERNAME', 'your-email@gmail.com');
define('GMAIL_APP_PASSWORD', 'your-16-char-app-password');
```

6. **Create upload folders**
```bash
mkdir -p uploads/dokumen_permohonan
mkdir -p uploads/surat_keputusan
mkdir -p uploads/profile_photos
chmod 755 uploads -R
```

7. **Access website**
```
http://localhost/uitm-latihan-industri/
```

## 👥 Penggunaan

### Default Login

**Admin:**
- Email: `admin@uitm.edu.my`
- Password: `admin123`

**Pelajar:**
- Daftar akaun baharu melalui halaman pendaftaran

### Workflow

1. Pelajar daftar akaun
2. Pelajar isi borang permohonan
3. Pelajar muat naik dokumen
4. Admin semak permohonan
5. Admin terima/tolak permohonan
6. Admin muat naik surat keputusan
7. Pelajar terima notifikasi email
8. Pelajar muat turun surat keputusan

## 📁 Struktur Folder

```
uitm-latihan-industri/
├── admin/              # Panel admin
├── pelajar/            # Panel pelajar
├── uploads/            # Fail yang dimuat naik
├── vendor/             # Dependencies (PHPMailer)
├── database/           # SQL files
├── config.php          # Database configuration
├── login.php           # Halaman log masuk
├── register.php        # Halaman pendaftaran
└── README.md           # Documentation
```

## 🔐 Keselamatan

- Password disulitkan menggunakan SHA256
- Prepared statements untuk SQL (mencegah injection)
- File upload validation
- Session management
- CSRF protection
- XSS prevention

## 🐛 Known Issues

- Email sending memerlukan Gmail App Password
- Upload file size maksimum: 5MB
- Hanya support PDF untuk surat keputusan

## 🚀 Deployment

### InfinityFree (Free)
1. Upload files via FTP
2. Create MySQL database
3. Import SQL file
4. Update config.php

### Hostinger (Paid)
1. Upload via cPanel File Manager
2. Create database via cPanel
3. Import SQL
4. Update config.php
5. Set folder permissions

## 📞 Sokongan

Untuk bantuan atau pertanyaan:
- Email: support@uitm.edu.my
- Issue Tracker: [GitHub Issues](https://github.com/YOUR_USERNAME/uitm-latihan-industri/issues)

## 📄 Lesen

MIT License - Lihat fail [LICENSE](LICENSE) untuk maklumat lanjut.

## 👨‍💻 Pembangun

Dibangunkan untuk UiTM Permatang Pauh

---

⭐ Star repository ini jika bermanfaat!
