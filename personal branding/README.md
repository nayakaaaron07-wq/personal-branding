# Personal Branding Website (Static Laravel Structure)

Proyek ini adalah struktur website personal branding 2 halaman yang dibangun dengan Laravel (Frontend) dan TailwindCSS (Styling).

## Status Saat Ini: Reset ke Statis
Proyek telah direset ke versi statis untuk menghindari error "Warna Merah" di editor Anda.
- **Tanpa Database**: Seluruh data saat ini ada langsung di file Blade (statis).
- **Tanpa Class PHP Kompleks**: File Controller, Model, dan Kernel telah dihapus agar editor tidak mencari file yang belum terinstall.

## Cara Membuka dan Melihat Hasil Website
Karena file `.blade.php` memerlukan server PHP untuk dijalankan, saya telah menyediakan folder **`preview/`** yang berisi file HTML standar agar Anda bisa melihat hasilnya langsung tanpa PHP:

1. Buka folder **`preview/`** di File Explorer Anda.
2. Klik kanan pada file **`halaman1.html`**, **`about.html`**, **`projects.html`**, atau **`skills.html`**.
3. Pilih **"Open with"** dan pilih Browser (Chrome, Edge, atau Firefox).
4. Anda bisa berpindah antar halaman menggunakan menu navigasi di atas.

## Struktur Halaman (Statis - Neon Dark Theme)
1.  **Home (Halaman 1)**: Hero section dengan gaya minimalis dan modern.
2.  **About Me**: Detail biografi dengan layout 2-kolom (Gambar + Teks).
3.  **Projects**: Daftar portofolio dengan layout 2-kolom serupa halaman About Me.
4.  **Skills**: Daftar keahlian teknologi dengan desain card neon.

## Cara Mengupdate Data (Foto & Teks)
### 1. Mengganti Foto
Untuk mengganti foto profil atau foto project, Anda cukup meletakkan file foto Anda ke dalam folder berikut:

- **Foto Profil**:
  - Masukkan ke: `public/images/profile/Me.jpeg`
  - Dan salinan untuk preview ke: `preview/images/profile/Me.jpeg`
- **Foto Project**:
  - Masukkan ke: `public/images/projects/Prject.jpeg`
  - Dan salinan untuk preview ke: `preview/images/projects/Prject.jpeg`

*Catatan: Pastikan nama file dan formatnya (misal: .jpg) sama dengan yang tertulis di kode. Jika berbeda, Anda perlu menyesuaikan nama file di dalam file `.blade.php` atau `.html`.*

### 2. Mengupdate Teks
Anda dapat mengupdate teks langsung di file:
- `resources/views/halaman1.blade.php` (Home)
- `resources/views/about.blade.php` (About Me)
- `resources/views/projects.blade.php` (Projects)
- `resources/views/skills.blade.php` (Skills)

*Jangan lupa untuk mengupdate file di folder `preview/` jika Anda ingin melihat perubahannya langsung di browser.*

## Langkah untuk Pengembangan Lanjut
Jika di masa depan Anda ingin menggunakan database (SQLite) dan fitur Laravel penuh:
1. Install PHP & Composer.
2. Jalankan `composer install`.
3. Anda dapat mulai menambahkan kembali Controller dan Model.
