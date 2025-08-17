# Perbaikan Validasi NIS dan Username - Sistem Perpustakaan

## Masalah yang Diperbaiki

Sistem sebelumnya memiliki masalah validasi pada saat pembuatan dan pengeditan data anggota:

1. **NIS tidak divalidasi untuk duplikasi** - Bisa membuat NIS yang sama dengan anggota lain
2. **Username tidak divalidasi untuk duplikasi** - Bisa membuat username yang sama dengan anggota lain
3. **Validasi format input kurang ketat** - Tidak ada pembatasan karakter yang diizinkan

## Perbaikan yang Dilakukan

### 1. Model (Mod_anggota.php)

**Fungsi baru yang ditambahkan:**
- `cekAnggotaUpdate($kode, $nis_lama)` - Mengecek NIS yang sudah ada kecuali NIS yang sedang diedit
- `cekUsername($username)` - Mengecek username yang sudah ada
- `cekUsernameUpdate($username, $nis_lama)` - Mengecek username yang sudah ada kecuali anggota yang sedang diedit

### 2. Controller (Anggota.php)

**Perbaikan pada fungsi insert():**
- Menambahkan validasi duplikasi NIS
- Menambahkan validasi duplikasi username
- Menampilkan pesan error yang spesifik

**Perbaikan pada fungsi update():**
- Menambahkan validasi duplikasi NIS (kecuali NIS yang sedang diedit)
- Menambahkan validasi duplikasi username (kecuali anggota yang sedang diedit)
- Menambahkan field hidden `nis_lama` untuk menyimpan NIS sebelum diubah
- Memperbaiki logika update password (hanya update jika diisi)

**Perbaikan pada fungsi _set_rules():**
- Mengubah validasi NIS dari `alpha_numeric` menjadi `numeric` (hanya angka)
- Menambahkan validasi panjang minimum dan maksimum untuk username
- Menambahkan validasi panjang minimum untuk password
- Menambahkan pesan error yang lebih informatif

### 3. View (anggota_create.php)

**Perbaikan pada form create:**
- Menambahkan validasi client-side untuk field NIS (hanya angka)
- Menambahkan validasi client-side untuk field username (hanya huruf, angka, underscore)
- Menambahkan validasi panjang minimum untuk password
- Menambahkan pesan bantuan untuk setiap field

### 4. View (anggota_edit.php)

**Perbaikan pada form edit:**
- Menambahkan field hidden untuk menyimpan NIS lama
- Menambahkan validasi client-side untuk field username
- Menambahkan validasi panjang minimum untuk password
- Menambahkan pesan bantuan untuk setiap field
- Menambahkan catatan bahwa NIS tidak dapat diubah

## Fitur Validasi yang Ditambahkan

### Validasi NIS:
- ✅ Wajib diisi
- ✅ Maksimal 10 karakter
- ✅ Hanya boleh berisi angka
- ✅ Tidak boleh sama dengan anggota lain (pada create)
- ✅ Tidak boleh sama dengan anggota lain (pada update, kecuali diri sendiri)

### Validasi Username:
- ✅ Wajib diisi
- ✅ Minimal 3 karakter, maksimal 20 karakter
- ✅ Hanya boleh berisi huruf, angka, dan underscore (_)
- ✅ Tidak boleh sama dengan anggota lain (pada create)
- ✅ Tidak boleh sama dengan anggota lain (pada update, kecuali diri sendiri)

### Validasi Password:
- ✅ Minimal 6 karakter (pada create)
- ✅ Opsional pada update (jika kosong, password tidak berubah)

## Cara Kerja Validasi

### Saat Create Anggota:
1. User mengisi form
2. Sistem mengecek apakah NIS sudah digunakan
3. Jika NIS sudah ada, tampilkan pesan error
4. Jika NIS belum ada, sistem mengecek username
5. Jika username sudah ada, tampilkan pesan error
6. Jika keduanya belum ada, simpan data

### Saat Update Anggota:
1. User mengisi form
2. Sistem mengecek apakah NIS sudah digunakan oleh anggota lain (kecuali diri sendiri)
3. Jika NIS sudah digunakan, tampilkan pesan error
4. Jika NIS belum digunakan, sistem mengecek username
5. Jika username sudah digunakan oleh anggota lain, tampilkan pesan error
6. Jika keduanya belum digunakan, update data

## Pesan Error yang Ditampilkan

- **NIS sudah digunakan**: "NIS Sudah Digunakan...!"
- **NIS sudah digunakan oleh anggota lain**: "NIS Sudah Digunakan oleh Anggota Lain...!"
- **Username sudah digunakan**: "Username Sudah Digunakan...!"
- **Username sudah digunakan oleh anggota lain**: "Username Sudah Digunakan oleh Anggota Lain...!"

## Keamanan

- Validasi dilakukan di server-side (PHP) dan client-side (JavaScript)
- Password di-hash menggunakan fungsi `get_hash()` sebelum disimpan
- Field NIS dibuat readonly pada form edit untuk mencegah perubahan
- Input dibersihkan dari karakter yang tidak diizinkan

## Testing

Untuk menguji validasi:

1. **Test Create:**
   - Coba buat anggota dengan NIS yang sudah ada
   - Coba buat anggota dengan username yang sudah ada
   - Coba buat anggota dengan NIS yang berisi huruf

2. **Test Update:**
   - Coba ubah NIS menjadi NIS anggota lain
   - Coba ubah username menjadi username anggota lain
   - Coba kosongkan password (seharusnya tidak berubah)

Semua validasi sekarang berfungsi dengan baik dan akan mencegah duplikasi data serta memastikan integritas data sistem perpustakaan. 