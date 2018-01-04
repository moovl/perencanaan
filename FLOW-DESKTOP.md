# FLOW & BAGIAN-BAGIAN

* halaman utama → search → halaman event/profil pengguna
* halaman utama → sign up/sign in → search → halaman evet → pendaftaran → halaman daftar event → forum diskusi → rating dan feedback
* halaman utama → sign up/sign in → membuat event → memantau event/forum diskusi

> Guideline ini merupakan guideline untuk aplikasi web yang ditampilkan di peramban desktop.  
> Untuk peramban mobile dan aplikasi native mobile, akan dibuat dokumen terpisah.  
> Bagaimanapun, fitur-fitur sebagian besar/keseluruhan sama _across_ perangkat-perangkat.

## FLOW
### FLOW SIGNUP
1. User mengeklik tombol _Sign Up_.
2. User diarahkan ke halaman _Sign Up_.
  [Apa saja yang ada di _Sign Up_?](#hal-signup)
3. User mengisi form _Sign Up_.
  [Apa saja yang harus user isi ketika registrasi?](#hal-signup-form-registrasi)
4. User diminta untuk verifikasi email.
5. User diberikan 2 pilihan: [cari event](#halaman-cari-event) atau [buat event](#halaman-buat-event).

### FLOW LOGIN
1. User mengeklik tombol _Sign In_.
2. User diarahkan ke halaman _Sign In_.
3. User mengisi data-data kredensial yang diperlukan (**email** dan **password**).
4. User diarahkan ke [beranda](#hal-utama).



## BAGIAN-BAGIAN HALAMAN
### BAGIAN-BAGIAN FIXED
Daftar elemen-elemen yang selalu/sebagian besar ditampilkan _across_ halaman-halaman.  

_***TODO: Tambahkan detail**_
* Navigasi bar (ditampilkan di: **halaman utama**, **halaman hasil cari event**, **profil pengguna**, **halaman pembuatan event**.)
  * Logo
  * Search bar
  * Tombol navigasi
  * Foto profil (klik: menuju [halaman profil](#hal-profil))
  

### HALAMAN UTAMA/BERANDA/HOME <a name="hal-utama"></a>
Daftar elemen-elemen minimum yang (harus) ada di halaman utama.
* Event populer
* Event terdekat
* Event dari user-user yang difollow
* Event rekomendasi berdasarkan:
  * Preferensi user
  * Event apa yang sering user _join_

### HALAMAN SIGNUP <a name="hal-signup"></a>
Daftar elemen-elemen minimum yang (harus) ada di halaman sign up.  
Proses sign up dibagi menjadi 3 tahap.
#### Tahap I
* User diberikan pilihan:
  * Signup menggunakan email
  * Signup menggunakan akun Google

#### Tahap II: Signup menggunakan email
* Form
  * Alamat email
  
#### Tahap II: Signup menggunakan akun Google
* Autentikasi

#### Tahap III
* Form (obviously.) <a name="hal-signup-form-registrasi"></a>
  * Nama Lengkap
  * Alamat
  * Nomor telepon **(Menunggu persetujuan)**
  * Tombol "SIGN UP"

### HALAMAN LOGIN <a name="hal-login"></a>
Daftar elemen-elemen minimum yang (harus) ada di halaman log in.  
Proses log in dibagi menjadi 2 tahap.
#### Tahap I
* Form
  * Tombol "Log in menggunakkan akun Google
  * Tombol "Log in menggunakan email"
#### Tahap II: Log in menggunakan akun Google
* Autentikasi

#### Tahap II: Log in menggunakan email
* Form
  * Alamat email
  * Password


### HALAMAN EVENT

### HALAMAN PEMBUATAN EVENT

### HALAMAN PROFIL PENGGUNA

### HALAMAN HASIL TELUSUR

