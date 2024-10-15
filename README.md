<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Ringkasan Proyek

Proyek ini merupakan proyek akhir (_final project_) karya dari [Giffari Alfarizy](https://www.linkedin.com/in/giffari-alfarizy/) dalam bootcamp Laravel batch ke-60 yang diselenggarakan oleh [sanbercode](https://sanbercode.com/). Dalam proyek ini dibuat website perpustakaan yang di dalamnya terdapat buku yang dapat dipinjam, peminjam, admin perpustakaan, dan kegiatan pinjam-meminjam buku itu sendiri.

## Scripts

Untuk memulai proyek dalam development mode

- Install _dependencies_

```console
pnpm run install
```

- Memulai proyek Vite di _local_

```console
pnpm run dev
```

- Memulai proyek Laravel di _local_
  - Buka XAMPP
  - Start Apache
  - Start MySQL

```console
php artisan serve
```

Mengecek format kode pada folder _resources_

```console
pnpm run prettier:check
```

Menjalankan format kode pada folder _resources_

```console
pnpm run prettier:format
```

Melakukan build Tailwind CSS dan keperluan frontend lainnya

```console
pnpm run build
```

## Teknologi Utama

- Bahasa pemrograman: [PHP](https://www.php.net/)
- Framework PHP: [Laravel 10](https://laravel.com/docs/10.x/)
- Basis data: [MySQL](https://www.mysql.com/)
- Templating: [Laravel Blade](https://laravel.com/docs/10.x/blade)
- Framework CSS: [Tailwind CSS](https://tailwindcss.com/)
- UI component library: [Flowbite](https://flowbite.com/)

## Teknologi Pendukung

- Formatter untuk folder `resources`: [Prettier](https://prettier.io/)
- Pendukung formatter untuk Blade: [Prettier Plugin Blade](https://www.npmjs.com/package/prettier-plugin-blade)
- Pendukung formatter untuk Tailwind CSS: [Prettier Plugin Tailwind CSS](https://www.npmjs.com/package/prettier-plugin-tailwindcss/v/0.0.0-insiders.d539a72)
- Formatter untuk file PHP: [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
- Package manager untuk Node.js: [pnpm](https://pnpm.io/)

## Referensi

- Materi Bootcamp Laravel Sanbercode
- [How to set up Prettier On a Laravel App, Linting Tailwind Class Order and More](https://mattstauffer.com/blog/how-to-set-up-prettier-on-a-laravel-app-to-lint-tailwind-class-order-and-more/)
