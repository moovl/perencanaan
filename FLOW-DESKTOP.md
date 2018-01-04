# FLOW & BAGIAN-BAGIAN

> Guideline ini merupakan guideline untuk aplikasi web yang ditampilkan di peramban desktop.  
> Untuk peramban mobile dan aplikasi native mobile, akan dibuat dokumen terpisah.  
> Bagaimanapun, fitur-fitur sebagian besar/keseluruhan sama _across_ perangkat-perangkat.

## SATU
1. halaman utama
2. search
3. halaman event/profil pengguna

## DUA
1. halaman utama
2. sign up/sign in
3. search
4. halaman event
5. pendaftaran
6. halaman daftar event
7. forum diskusi
8. rating dan feedback

## TIGA
1. halaman utama
2. sign up/sign in
3. membuat event
4. memantau event/forum diskusi

## FLOW
### Flow Signup
1. User mengeklik tombol _Sign Up_.
2. User diarahkan ke halaman _Sign Up_.
  [Apa saja yang ada di _Sign Up_?](#hal-signup)
3. User mengisi form _Sign Up_.
  [Apa saja yang harus user isi ketika registrasi?](#hal-signup)
4. User diminta untuk verifikasi email.
5. User diberikan 2 pilihan: [cari event](#halaman-cari-event) atau [buat event](#halaman-buat-event).  

[**Detail flow**](#hal-signup).

### Flow Login
1. User mengeklik tombol _Sign In_.
2. User diarahkan ke halaman _Sign In_.
3. Terdapat pilihan: Login menggunakan (1) email, atau (2) akun Google. [Tahap-tahap login](#tahap-login).
4. User mengisi data-data kredensial yang diperlukan (**email** dan **password**) [Apa saja yang harus user lakukan untuk login?](#hal-login).
5. User diarahkan ke [beranda](#hal-utama).  

[**Detail flow**](#hal-login).



## BAGIAN-BAGIAN HALAMAN
### Bagian-bagian Fixed
Daftar elemen-elemen yang selalu/sebagian besar ditampilkan _across_ halaman-halaman.  

_***TODO: Tambahkan detail**_
* Navigasi bar (ditampilkan di: **halaman utama**, **halaman hasil cari event**, **profil pengguna**, **halaman pembuatan event**.)
  * Logo
  * Search bar
  * Tombol navigasi
  * Foto profil (klik: menuju [halaman profil](#hal-profil))
  

### Halaman Utama <a name="hal-utama"></a>
Daftar elemen-elemen minimum yang (harus) ada di halaman utama.
* Event populer
* Event terdekat
* Event dari user-user yang difollow
* Event rekomendasi berdasarkan:
  * Preferensi user
  * Event apa yang sering user _join_

### Halaman Signup dan Detail Flow Signup <a name="hal-signup"></a>
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
* Form (obviously.)
  * Nama Lengkap
  * Alamat
  * Nomor telepon **(Menunggu persetujuan)**
  * Tombol "SIGN UP"

### Halaman Login dan Detail Flow Login <a name="hal-login"></a>
Daftar elemen-elemen minimum yang (harus) ada di halaman log in.  
Proses log in dibagi menjadi 2 tahap.
#### Tahap I <a name="tahap-login"></a>
* Form
  * Tombol "Log in menggunakkan akun Google
  * Tombol "Log in menggunakan email"
#### Tahap II: Log in menggunakan akun Google
* Autentikasi

#### Tahap II: Log in menggunakan email
* Form
  * Alamat email
  * Password


### Halaman Event

### Halaman Pembuatan Event

### Halaman Profil Pengguna

### Halaman Hasil Telusur

