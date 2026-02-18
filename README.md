# 📊 BPS Tanjak - Dasbor Looker Studio

Dasbor interaktif untuk visualisasi data BPS (Badan Pusat Statistik) yang terintegrasi langsung dengan Google Looker Studio.

## 🎯 Deskripsi

Proyek ini adalah aplikasi web sederhana yang menampilkan dasbor analitik BPS secara *embedded* menggunakan Looker Studio. Dasbor ini menyediakan visualisasi data yang interaktif dan responsif, dibungkus dengan antarmuka yang bersih dan modern untuk memudahkan analisis data statistik.

## ✨ Fitur

- 🖥️ **Dasbor Terintegrasi**: Menampilkan dasbor Looker Studio dengan tampilan yang bersih tanpa gangguan.
- 📱 **Desain Responsif**: Tampilan optimal di berbagai ukuran layar (desktop, tablet, seluler).
- 🎨 **Antarmuka Modern**: Menggunakan desain minimalis, tipografi yang rapi, dan efek visual halus.
- 🔄 **Indikator Pemuatan**: Menampilkan animasi *spinner* saat memuat data, dengan transisi yang halus (*fade-in*).
- 🧭 **Navigasi Kustom**: Bilah navigasi (footer) dengan gaya *glassmorphism* untuk berpindah halaman laporan dengan mudah.
- ⚡ **Ringan**: Tidak menggunakan kerangka kerja (framework) JavaScript yang berat, murni HTML/CSS dan sedikit JavaScript bawaan.
- 🔒 **Keamanan Sandbox**: Iframe dikonfigurasi dengan *sandbox* untuk keamanan yang lebih baik.

## 🛠️ Teknologi

- **HTML5**: Struktur halaman web semantik.
- **CSS3**: Penataan gaya dengan *CSS Variables*, Flexbox, dan *Backdrop Filter*.
- **JavaScript (Vanilla)**: Logika sederhana untuk indikator pemuatan.
- **Inter Font**: Tipografi modern dari Google Fonts.
- **Looker Studio**: Platform visualisasi data dari Google.
- **PHP**: *Scripting* server sederhana untuk manajemen rute halaman.

## 📂 Struktur File

```
BPS-Tanjak/
├── index.php         # Halaman utama dasbor & logika pemuatan
├── style.css         # Stylesheet dengan desain modern
└── README.md         # Dokumentasi proyek
```

## 🚀 Cara Menggunakan

### Instalasi

1. **Clone repositori ini:**
   ```bash
   git clone https://github.com/Cahyadi-Prasetyo/BPS-Tanjak.git
   cd BPS-Tanjak
   ```

2. **Jalankan server lokal:**

   **Menggunakan PHP Built-in Server (Disarankan):**
   ```bash
   php -S localhost:8000
   ```

3. **Buka di browser:**
   Akses alamat berikut di peramban web Anda:
   ```
   http://localhost:8000
   ```

## 🎨 Sistem Desain

Dasbor ini menggunakan sistem desain modern dengan spesifikasi berikut:

### Palet Warna
- **Latar Belakang**: `#f8fafc` (Slate 50) - Abu-abu sangat muda yang sejuk.
- **Latar Kartu**: `#ffffff` (Putih).
- **Utama (Primary)**: `#0284c7` (Sky 600) - Biru cerah untuk aksi dan elemen aktif.
- **Hover Utama**: `#0369a1` (Sky 700).
- **Teks Utama**: `#1e293b` (Slate 800) - Warna teks yang mudah dibaca.
- **Teks Muted**: `#64748b` (Slate 500) - Untuk elemen sekunder.

### Tipografi
- **Keluarga Font**: Inter (Google Fonts).
- **Ketebalan**: 400 (Regular), 500 (Medium), 600 (Semibold).

## 📱 Responsivitas

- **Seluler (< 640px)**:
  - Ukuran tombol navigasi disesuaikan agar pas dengan jari.
  - Jarak antar elemen diperkecil agar tidak memakan tempat.
  - *Viewport* diatur agar konten tidak terpotong.

## 🔧 Konfigurasi

Untuk mengubah laporan Looker Studio yang ditampilkan, edit URL pada array `$pages` di file `index.php`:

```php
$pages = [
    1 => 'URL_HALAMAN_1_ANDA',
    2 => 'URL_HALAMAN_2_ANDA',
    // tambahkan halaman lainnya...
];
```

## 📝 Cabang (Branches)

- **`main`**: Kode stabil untuk produksi.

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan ikuti langkah berikut:

1. *Fork* repositori ini.
2. Buat cabang fitur baru (`git checkout -b fitur/FiturKeren`).
3. *Commit* perubahan Anda (`git commit -m 'Menambahkan FiturKeren'`).
4. *Push* ke cabang (`git push origin fitur/FiturKeren`).
5. Buat *Pull Request*.

⭐ Jika proyek ini bermanfaat, jangan lupa berikan bintang!
