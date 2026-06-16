# ☕ Web Kopi jadi

<p align="center">
  <img src="https://github.com/LiauKelvin/Web-Kopi-Aja-DB/blob/master/public/img/logo%20Kopijadi.png?raw=true" alt="Logo Kopi Jadi" width="150">
  <img src="https://github.com/LiauKelvin/Web-Kopi-Aja-DB/blob/master/public/codeigniter%20img.png?raw=true" alt="Logo Codeigniter" width="150">
  <img src="https://github.com/LiauKelvin/Web-Kopi-Aja-DB/blob/master/public/php%20img.png?raw=true" alt="Logo php" width="150">
</p>

## 📖 Tentang Program
**Web Kopi jadi** adalah website company profile yang menjelaskan latar belakang serta dari pembuatan toko kopi yang menjual berbagai menu minuman kopi terkenal mulai dari kopi seperti arabica, ethiopia, kona, luwak, madheling, robusta, dll. Toko kopi juga menyediakan layanan pemesanan online yang dapat dilakukan pada **menu cart**.

Website kopi jadi dibuat dengan menggunakan framework codeigniter 4 dengan xampp untuk mengatur database yang ada.

### ✨ Fitur Utama:
*   **Company Profile Kopi:** Menjelaskan latar belakang pembuatan toko kopi jadi yang menjual berbagai jenis minuman kopi dan biji kopi.
*   **Cart Penjualan Kopi:** Menu _cart_ yang digunakan untuk melakukan pemilihan, perhitungan, serta pemesanan menu kopi yang ada pada web kopi jadi.
*   **Framework Codeigniter 4:** Sistem framework yang digunakan untuk mempermudah proses pengembangan website.

---
## CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
