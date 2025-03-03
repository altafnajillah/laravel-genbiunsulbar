<p align="center"><a href="https://laravel.com" target="_blank"><img src="/public/images/GenBIUnsulbar.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang Proyek

<a href=https://github.com/altafnajillah/laravel-genbiunsulbar>Proyek ini</a> merupakan implementasi progam kerja
Departemen Publikasi dan Sosialisasi GenBI Unsulbar dalam mewujudkan kepemilikan Website oleh organisasi. Proyek ini
dibangun menggunakan bahasa pemrograman php dengan Laravel framework serta tailwindss.

## Panduan Cloning dan Inisialisasi

Berikut panduan awal proses menjalankan aplikasi.

#### Pastikan bahwa anda telah menginstall beberapa tools berikut:

1. Git
2. PHP versi ^8.2
2. Composer
3. npm
4. Database mysql dan semacamnya

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

#### Key dan Migration

- Generate key untuk app dengan perintah :

  ```php artisan key:generate```

- Migrasi database dengan perintah :

  ```php artisan migrate```

- Lakukan seeding dengan perintah :

  ```php artisan db:seed```

  atau
- Lakukan keduanya sekaligus dengan menggunakan perintah :

  ```php artisan migrate --seed```

#### Menjalankan Web

- Jalankan vite app dengan menggunakan perintah :

  ```npm run dev ```

- Jalankan Web dengan perintah

  ```php artisan serve```

### Credit

Terimakasih kepada seluruh tim dan individu yang telah melibatkan diri dalam pengembangan proyek ini. Diharapkan
kedepannya akan lebih berkembang dengan pengimplementasian fitur yang lebih maju dan efisien.

## Terimakasih!
