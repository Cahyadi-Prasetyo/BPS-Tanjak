# 📊 BPS Tanjak - Dashboard Looker Studio

Dashboard interaktif untuk visualisasi data BPS (Badan Pusat Statistik) yang terintegrasi dengan Google Looker Studio.

## 🎯 Deskripsi

Project ini merupakan aplikasi web sederhana yang menampilkan dashboard analitik BPS secara embedded menggunakan Looker Studio. Dashboard ini menyediakan visualisasi data yang interaktif dan responsif untuk memudahkan analisis data statistik.

## ✨ Fitur

- 🖥️ **Dashboard Embedded**: Menampilkan Looker Studio dashboard dalam tampilan yang bersih dan modern
- 📱 **Responsive Design**: Tampilan optimal di berbagai ukuran layar (desktop, tablet, mobile)
- 🎨 **Modern UI**: Antarmuka pengguna yang clean dengan desain minimalis
- ⚡ **Lightweight**: Tidak menggunakan framework JavaScript, murni HTML/CSS
- 🔒 **Sandbox Security**: Iframe dengan konfigurasi sandbox untuk keamanan

## 🛠️ Teknologi

- **HTML5**: Struktur halaman web
- **CSS3**: Styling dengan custom properties (CSS variables)
- **Inter Font**: Typography modern dari Google Fonts
- **Looker Studio**: Platform visualisasi data dari Google

## 📂 Struktur File

```
BPS-Tanjak/
├── main.php          # Halaman utama dashboard
├── style.css         # Stylesheet dengan modern design
└── README.md         # Dokumentasi project
```

## 🚀 Cara Menggunakan

### Instalasi

1. Clone repository ini:
```bash
git clone https://github.com/Cahyadi-Prasetyo/BPS-Tanjak.git
cd BPS-Tanjak
```

2. Jalankan dengan web server lokal

**Menggunakan PHP Built-in Server:**
```bash
php -S localhost:8000
```

**Menggunakan Python:**
```bash
# Python 3
python -m http.server 8000

# Python 2
python -m SimpleHTTPServer 8000
```

3. Buka browser dan akses:
```
http://localhost:8000/main.php
```

## 🎨 Design System

Dashboard ini menggunakan design system modern dengan komponen berikut:

### Color Palette
- **Background**: `#f1f5f9` (Slate 100)
- **Card Background**: `#ffffff` (White)
- **Primary**: `#0284c7` (Sky 600)
- **Text Main**: `#0f172a` (Slate 900)
- **Text Muted**: `#64748b` (Slate 500)

### Typography
- **Font Family**: Inter (Google Fonts)
- **Weights**: 400 (Regular), 500 (Medium), 600 (Semibold)

## 📱 Responsive Breakpoints

- **Mobile**: < 640px
  - Header padding lebih compact
  - Brand pill disembunyikan
  - Canvas padding dikurangi

## 🔧 Konfigurasi

Untuk mengubah dashboard Looker Studio yang ditampilkan, edit `src` pada iframe di file `main.php`:

```html
<iframe 
    src="https://lookerstudio.google.com/embed/reporting/YOUR_REPORT_ID/page/YOUR_PAGE_ID" 
    ...>
</iframe>
```

Ganti `YOUR_REPORT_ID` dan `YOUR_PAGE_ID` dengan ID dari dashboard Looker Studio Anda.

## 📝 Branches

- **`main`**: Branch utama untuk production code
- **`dev`**: Branch untuk development dan testing

## 🤝 Contributing

Kontribusi selalu diterima! Silakan ikuti langkah berikut:

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan Anda (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

## 👤 Author

**Cahyadi Prasetyo**

- GitHub: [@Cahyadi-Prasetyo](https://github.com/Cahyadi-Prasetyo)
- Repository: [BPS-Tanjak](https://github.com/Cahyadi-Prasetyo/BPS-Tanjak)

## 📞 Support

Jika Anda memiliki pertanyaan atau menemukan bug, silakan buat [issue](https://github.com/Cahyadi-Prasetyo/BPS-Tanjak/issues) di repository ini.

---

⭐ Jika project ini bermanfaat, jangan lupa berikan star!
