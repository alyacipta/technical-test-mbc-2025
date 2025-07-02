# MBC Laboratory Landing Page (Technical Test 2025)

Landing page interaktif yang dikembangkan untuk Technical Test MBC Laboratory 2025. Website ini menampilkan profil perusahaan, divisi dan layanan utama, serta formulir kontak.

## Fitur Utama

- **Halaman Beranda (Home):** Profil singkat MBC Laboratory, visi, misi, dan pengantar layanan.
- **Halaman Divisi & Layanan:** Detail mengenai empat bidang utama: Cybersecurity, Big Data, Game Technology, dan Geographic Information Systems (GIS).
- **Halaman Kontak:** Informasi kontak (alamat, telepon, email) dan formulir pengiriman pesan dengan backend PHP.
- **Halaman Developer:** Informasi mengenai pembuat website (nama, kompetensi, portofolio).
- **Desain Responsif:** Tampilan adaptif untuk berbagai ukuran layar (desktop, tablet, mobile).

## Struktur Proyek
'mbc_website/'
'├── index.html'                  '# Halaman Utama & Divisi'
'├── kontak.html'                 '# Halaman Kontak'
'├── developer.html'              '# Halaman Developer'
'├── send_email.php'              '# Backend PHP untuk formulir kontak'
'├── img/'                        '# Direktori untuk gambar'
'│'   '└── logo.png'
'└── README.md'                   '# Dokumentasi proyek ini'

## Cara Instalasi Lokal

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

1.  **Instal XAMPP:**
    * Unduh dan instal XAMPP dari [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html).
    * Ikuti instruksi instalasi standar.

2.  **Pindahkan Proyek ke `htdocs`:**
    * Salin seluruh folder proyek `mbc_website` ini ke dalam direktori `htdocs` XAMPP Anda.
        * Contoh: `C:\xampp\htdocs\mbc_website\`

3.  **Jalankan Apache:**
    * Buka XAMPP Control Panel.
    * Klik tombol "Start" pada modul Apache. Pastikan statusnya "Running".

4.  **Akses Website:**
    * Buka browser web Anda.
    * Akses halaman utama di `http://localhost/mbc_website/index.html`
    * Akses halaman kontak di `http://localhost/mbc_website/kontak.html`

## Konfigurasi Backend (Pengiriman Email)

Formulir kontak menggunakan PHP (`send_email.php`) untuk mengirim email. Untuk mengaktifkan fungsi pengiriman email di lingkungan lokal dengan XAMPP, Anda perlu mengkonfigurasi server SMTP. Berikut adalah langkah-langkah dasar untuk mengkonfigurasi `sendmail.ini` dan `php.ini` agar dapat mengirim email melalui Gmail SMTP (contoh):

1.  **Aktifkan App Password (Gmail):** Jika Anda menggunakan Gmail dengan 2-Factor Authentication (2FA), buat [App Password](https://myaccount.google.com/apppasswords) dan gunakan ini sebagai `auth_password`.

2.  **Edit `php.ini`:**
    * Di XAMPP Control Panel, klik "Config" di baris Apache, lalu pilih "PHP (php.ini)".
    * Cari `[mail function]` dan sesuaikan baris-baris berikut (hapus `;` di awal jika ada):
        ```ini
        SMTP = smtp.gmail.com
        smtp_port = 587
        sendmail_from = your_email@gmail.com # Ganti dengan email Anda
        sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
        ```

3.  **Edit `sendmail.ini`:**
    * Buka file `C:\xampp\sendmail\sendmail.ini` dengan editor teks.
    * Sesuaikan baris-baris berikut:
        ```ini
        smtp_server=smtp.gmail.com
        smtp_port=587
        smtp_ssl=tls
        auth_username=your_email@gmail.com # Ganti dengan email Anda
        auth_password=your_app_password_or_regular_password # Gunakan App Password jika 2FA aktif
        force_sender=your_email@gmail.com
        ```

4.  **Restart Apache** di XAMPP Control Panel setelah menyimpan perubahan.

## Langkah-langkah Deployment (Gambaran Umum)

Untuk membuat website ini dapat diakses secara publik, Anda akan membutuhkan hosting web (disarankan Shared Hosting untuk proyek PHP sederhana ini) dan nama domain.

1.  **Pilih Hosting Provider:** Pilih layanan shared hosting yang mendukung PHP (misalnya Niagahoster, Hostinger, dll.).
2.  **Dapatkan Nama Domain:** Beli nama domain kustom (misal: `mbclab.com`).
3.  **Upload File Proyek:** Gunakan File Manager di cPanel/Plesk hosting Anda, atau FTP client (FileZilla), untuk mengunggah semua file dan folder proyek Anda ke direktori `public_html` di server hosting.
4.  **Konfigurasi Domain:** Arahkan Nameserver domain Anda ke server hosting Anda.
5.  **Aktifkan SSL (HTTPS):** Di cPanel hosting Anda, aktifkan sertifikat SSL gratis (misalnya Let's Encrypt) untuk domain Anda. Ini memastikan website diakses melalui HTTPS yang aman.
6.  **Uji Akses Publik:** Akses website Anda melalui domain kustom Anda (`https://yourdomain.com`) dan uji semua fungsionalitas, terutama formulir kontak.

## Author

- **[Nama Lengkap Anda]**
    - Kompetensi Teknis: [List kemampuan teknis Anda, misal: HTML, CSS (Bootstrap), JavaScript, PHP, Git]
    - GitHub: [Link profil GitHub Anda]
    - LinkedIn: [Link profil LinkedIn Anda]

---
*Dibuat sebagai bagian dari Technical Test MBC Laboratory 2025.*