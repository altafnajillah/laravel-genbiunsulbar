<p align="center"><a href="https://laravel.com" target="_blank"><img src="/public/images/GenBIUnsulbar.png" width="386" alt="Laravel Logo"></a></p>

## Tentang Proyek

<a href=https://github.com/altafnajillah/laravel-genbiunsulbar>Proyek ini</a> merupakan implementasi progam kerja
Departemen Publikasi dan Sosialisasi GenBI Unsulbar dalam mewujudkan kepemilikan Website oleh organisasi. Proyek ini
dibangun menggunakan bahasa pemrograman php dengan Laravel framework serta tailwindss.

## Panduan Cloning dan Inisialisasi

Berikut panduan awal proses menjalankan aplikasi.

#### Pastikan bahwa anda telah menginstall beberapa tools berikut:

1. Git.
2. PHP versi ^8.2.
3. Composer.
4. NodeJS.
5. Database mysql dan semacamnya.

#### Cloning Repositori dengan menggunakan perintah

- untuk menggunakan https dapat menggunakan perintah :

  ```git clone https://github.com/altafnajillah/laravel-genbiunsulbar.git```

- atau menggunakan ssh dengan perintah :

  ```git clone git@github.com:altafnajillah/laravel-genbiunsulbar.git```

- dapat juga dengan mendownload file zip
  proyek <a href="https://github.com/altafnajillah/laravel-genbiunsulbar/archive/refs/heads/main.zip">disini</a>

#### Setup awal

- Selanjutnya, copy atau rename file ```.env.example``` menjadi ```.env```
- Lakukan penyesuaian terhadap setup database (default menggunakan sqlite)

#### Install Dependensi dan library

- Install dependensi composer menggunakan perintah :

  ```composer install```

- Install dependensi npm dengan menggunakan perintah :

  ```npm install```

#### Key, Migration dan Storage

- Generate key untuk app dengan perintah :

  ```php artisan key:generate```

- Migrasi database dengan perintah :

  ```php artisan migrate```

- Lakukan seeding dengan perintah :

  ```php artisan db:seed``` atau,
- Lakukan keduanya sekaligus dengan menggunakan perintah :

  ```php artisan migrate --seed```

- Buat link antara public dan storage menggunakan perintah :

  ```php artisan storage:link```

#### Menjalankan Web

- Jalankan vite app dengan menggunakan perintah :

  ```npm run dev ```

- Jalankan Web dengan perintah

  ```php artisan serve```

### Credit

Terimakasih kepada seluruh tim dan individu yang telah melibatkan diri dalam pengembangan proyek ini. Diharapkan
kedepannya akan lebih berkembang dengan pengimplementasian fitur yang lebih maju dan efisien.

## Terimakasih!
