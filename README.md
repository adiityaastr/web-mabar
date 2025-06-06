﻿# GamerHub Community

GamerHub adalah platform komunitas untuk para gamer yang ingin mencari teman mabar, mengatur jadwal bermain, mengikuti turnamen, dan membangun komunitas gaming yang aktif dan suportif.

## Fitur Utama
- **Beranda Interaktif:** Banner video dengan highlight game populer (Valorant, Overwatch 2, Marvel Rivals).
- **Profil Pemain:** Lihat dan cari profil pemain lain di komunitas.
- **Jadwal Mabar:** Lihat dan filter jadwal main bareng berdasarkan game, pemain, dan hari.
- **Daftar Turnamen:** Registrasi tim untuk turnamen, serta lihat daftar tim yang sudah mendaftar.
- **Formulir Mabar:** Ajukan sesi mabar baru dengan desain modern.
- **Footer & Navigasi:** Navigasi responsif dan footer profesional di semua halaman.

## Struktur Folder
```
├── index.php                  # Halaman utama/beranda
├── anggota.php                # Profil pemain
├── jadwal.php                 # Jadwal mabar mingguan
├── mabar_form.php             # Formulir pengajuan mabar
├── tournament_registrations.php # Daftar registrasi turnamen
├── style.css                  # File CSS utama
├── videos/                    # Folder video banner
│   ├── valorant.mp4
│   ├── overwatch2.mp4
│   └── marvelrivals.mp4
├── images/                    # Gambar untuk game cards, dsb
├── favicon.png                # Favicon website
├── tournament_registrations.json # Data registrasi turnamen (otomatis dibuat)
└── README.md                  # Dokumentasi proyek
```

## Cara Instalasi & Menjalankan
1. **Clone/download** repository ini ke folder web server Anda (misal: `htdocs` untuk XAMPP, `www` untuk Laragon).
2. Pastikan PHP sudah terinstall dan aktif.
3. Jalankan web server (Apache/Nginx) dan buka browser ke alamat sesuai folder, misal: `http://localhost/web-mabar/`.
4. Tidak perlu setup database, data turnamen disimpan di file JSON.

## Penggunaan
- **Navigasi:** Gunakan navbar untuk berpindah antar halaman.
- **Banner Video:** Slide otomatis, tombol "Gabung Sekarang" mengarah ke halaman profil pemain.
- **Game Card:** Klik card pada "Game Unggulan" untuk menuju website resmi game.
- **Jadwal Mabar:** Filter jadwal berdasarkan game, pemain, atau hari.
- **Daftar Turnamen:** Lihat tim yang sudah mendaftar, atau daftar melalui halaman pendaftaran.
- **Formulir Mabar:** Ajukan sesi mabar baru dengan form yang sudah didesain modern.

## Catatan Tambahan
- **Responsif:** Website sudah responsif untuk desktop dan mobile.
- **Customisasi:** Anda bisa mengganti video/banner, gambar, dan link sesuai kebutuhan komunitas Anda.
- **Footer:** Footer selalu berada di bawah, rapi, dan profesional di semua halaman.
- **Data Turnamen:** Data pendaftaran turnamen disimpan di file `tournament_registrations.json`.

## Kontributor
- Muhamad Aditya Saputra | 411231139

---

Jika ada pertanyaan atau ingin kontribusi, silakan hubungi melalui sosial media yang tertera di footer website.
