# 🚀 PROYEK: [Nama Proyek: Web Inspirasi Dekor Rumah]

---

## 1. Ikhtisar Proyek

- **Tujuan Utama:**  
  [Tujuan utama proyek: Menyediakan platform visual (mirip Pinterest-lite) bagi pengguna untuk menemukan, mengumpulkan, dan mengorganisir (melalui Ideabook) gambar-gambar inspirasi untuk dekorasi rumah.]

- **Tumpukan Teknologi:**  
  **TALL Stack (Laravel 12, Livewire 3/Volt, Alpine.js, Tailwind CSS versi 4, Vite)**  
  Laravel 12 membawa beberapa perubahan besar dari Laravel 10, termasuk:
  - **Pemindahan struktur service provider & middleware:** Banyak pendaftaran default kini diatur otomatis oleh kernel baru `@bootstrap/app.php` tanpa perlu deklarasi manual di `@config/app.php`.
  - **Registrasi Service Provider Otomatis:** Tidak perlu lagi menambahkan provider bawaan ke `@config/app.php`; sistem autodiscovery kini lebih pintar dan efisien.
  - **Routing & Middleware Modernized:** Middleware pipeline kini lebih modular, mendukung deklarasi berbasis class closure dan auto-injection yang lebih bersih.
  - **Fitur Bootstrap Application:** Laravel kini memisahkan bootstrap logic agar startup aplikasi lebih cepat dan lebih mudah di-custom.
  - **Peningkatan performa di container dan serialization**, membuat aplikasi microservice dan job queue lebih efisien.
  
  Sementara itu, **Tailwind CSS versi 4** memperkenalkan:
  - **Zero-runtime CSS:** Build engine baru sepenuhnya menggantikan PostCSS, menghasilkan CSS 30–40% lebih kecil.
  - **Mode `design tokens` bawaan:** Token warna, spacing, dan typography kini dideklarasikan secara global tanpa konfigurasi manual.
  - **Peningkatan Theme API:** Bisa override skema warna atau varian mode (light/dark/system) langsung di file konfigurasi.
  - **Auto-class pruning:** Tailwind otomatis menghapus class yang tidak digunakan saat proses build tanpa konfigurasi tambahan.
  - **Integrasi native dengan Vite:** Kompilasi lebih cepat dengan caching yang lebih efisien untuk proyek TALL Stack.

- **Arsitektur:**  
  Service Layer, Form Objects, Volt (untuk komponen kecil), Class Livewire (untuk komponen besar)


## 2. Peran Pengguna (Aktor)

- **[Peran Publik, misal: Pencari Inspirasi Dekor Rumah]:**  
  [Deskripsi singkat peran publik: Pengguna anonim atau terdaftar yang sedang mencari ide dekorasi rumah.]

- **[Peran Internal, misal: Admin/Agen]:**  
  [Deskripsi singkat peran internal: Pengguna internal yang mengelola listing dan prospek.]

---

## 3. Fitur Wajib (Core/Pondasi)

- **Autentikasi:** Login, Register, Lupa Password  
- **Manajemen Role:** Pembeda antara [Peran Publik] dan [Peran Internal]  
- **Manajemen CRUD [Konten Utama]:** [Deskripsi CRUD utama, misal: Agen dapat menambah, mengedit, menghapus listing properti]  
- **Dasbor Admin:** Halaman utama untuk [Peran Internal]  
- **Halaman Profil:** Halaman utama untuk [Peran Publik]  
- **Informasi Inspiratif:** [Deskripsi Informasi Edukatif, misal: Pencari Inspirasi Dekor Rumah dapat mencari bacaan informasi dekor rumah yang dapat membantu mereka]  
- **FAQ:** [Deskripsi FAQ, misal: Pencari Inspirasi Dekor Rumah dapat mencari pertanyaan yang sering diajukan bersamaan dengan jawabannya]

---

## 4. Fitur Unik (10 Fitur Utama)

1. **[Fitur Unik 1, misal: Sistem "Simpan Favorit"]:** Pengguna (member) menandai gambar yang disukai.
2. **[Fitur Unik 2, misal: Sistem "like gambar"]:** Pengguna (member) menyukai gambar yang tertera.  
3. **[Fitur Unik 3, misal: Halaman Sistem "komentar pada gambar"]:** Pengguna (member) dapat memberi komentar pada gambar yang tertera
4. **[Fitur Unik 4, misal: Sistem filter (terbaru – terlama)]:** Menampilkan hasil gambar terbaru sampai gambar terlama sesuai urutan, begitu sebaliknya
5. **[Fitur Unik 5, misal: Unggah inspirasi (upload ide mereka)]:** Pengguna (member) dapat mengunggah ide mereka (berupa foto) pada halaman jelajahi inspirasi
6. **[Fitur Unik 6, misal: Moderasi unggahan user (tolak atau terima unggahannya)]:** memungkinkan admin/agen untuk meninjau dan memutuskan apakah unggahan pengguna akan diterima atau ditolak
7. **[Fitur Unik 7, misal: Sistem Pencarian inspirasi ]:** Fitur untuk memudahkan pengguna dalam mencari ide mereka (menampilkan hasil dari apa yang mereka cari)
8. **[Fitur Unik 8, misal: Sistem "Laporkan Gambar"]:** memungkinkan pengguna untuk melaporkan gambar yang tidak relevan atau tidak sesuai  
9. **[Fitur Unik 9, misal: Arahan chat wa]:** memungkinkan pengguna (member) untuk terhubung langsung dengan admin atau pihak pengelola melalui aplikasi WhatsApp hanya dengan satu klik
10. **[Fitur Unik 10, misal: Testimoni (oleh Pencari Inspirasi Dekor Rumah )]:** sebagai wadah bagi pengguna (member) untuk membagikan pengalaman, pendapat, atau kesan mereka terhadap layanan yang disediakan oleh website

---

## 5. Skema Database (ERD - DBML)
> Ini adalah sumber kebenaran untuk semua query dan model, jika ada tambahan migrasi atau perubahan skema DB pastikan untuk memperbarui skema DBML ini.

```dbml
// --- Skema Database untuk [Web Inspirasi Dekor Rumah] ---

Enum enum_user_role {
  user
  admin
}

// Enum untuk status moderasi (Fitur 6: Moderasi Unggahan)
Enum enum_inspiration_status {
  pending
  approved
  rejected
}

// ===================================================
// TABEL UTAMA
// ===================================================

// Tabel utama untuk pengguna dan admin
Table users {
  id int [pk, increment]
  name varchar(255) [not null]
  email varchar(255) [unique, not null]
  password varchar(255) [not null]
  avatar_url varchar(255)
  role enum_user_role [not null, default: 'user']
  email_verified_at timestamp
  remember_token varchar(100)
  created_at timestamp [default: 'now()', not null]
  updated_at timestamp [default: 'now()', not null]

}


Table inspirations {
  id int [pk, increment]
  user_id int [not null, ref: > users.id] // User yang mengunggah (Fitur 4)
  ruangan_id int [ref: > ruangan.id] // Kategori inspirasi (Ruang tamu, dapur, dll)
  tags_id int [ref: > tags.id]
  title varchar(255) [not null]
  description text
  design_by varchar(100)
  area varchar(100)
  year int (50)
  country varchar(100)
  jenis_material varchar(255)

  image_url varchar(255) [not null]
  status enum_inspiration_status [not null, default: 'pending'] // Status moderasi (Fitur 5)

  
  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]

  indexes {
    (user_id)
    (ruangan_id)
    (status)
  }
}

Table ruangan {
  id int [pk, increment]
  name varchar(100) [unique, not null]
  slug varchar(100) [unique, not null]
  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

// Tabel pivot untuk Fitur 2: Simpan ke Favorit
Table user_favorites {
  user_id int [not null, ref: > users.id]
  inspiration_id int [not null, ref: > inspirations.id]
  created_at timestamp [default: `now()`, not null]

  indexes {
    (user_id, inspiration_id) [unique]
  }
}

// Tabel pivot untuk Fitur 3: Sistem Like
Table likes {
  id int [pk, increment]
  user_id int [not null, ref: > users.id]
  inspiration_id int [not null, ref: > inspirations.id]
  created_at timestamp [default: `now()`, not null]

  indexes {
    (user_id, inspiration_id) [unique]
  }
}

// Tabel untuk tags (Fitur 6: Pencarian Inspirasi)
Table tags {
  id int [pk, increment]
  name varchar(100) [unique, not null]
  slug varchar(100) [unique, not null]
  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}



// ===================================================
// FITUR TAMBAHAN WEBSITE
// ===================================================


// Tabel untuk Fitur 8: Informasi Edukatif (link ke Medium)
Table articles {
  id int [pk, increment]
  title varchar(255) [not null]
  medium_url varchar(255) [not null]
  thumbnail_image_url varchar(255)
  published_at timestamp
  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}

// Tabel untuk Fitur 10: Testimoni (admin only)
Table testimonials {
  id int [pk, increment]
  user_name varchar(100) [not null]
  user_title_or_location varchar(100)
  user_avatar_url varchar(255)
  content text [not null]
  rating int [default: 5]
  is_published boolean [default: true, not null]
  created_at timestamp [default: `now()`, not null]
  updated_at timestamp [default: `now()`, not null]
}
```
