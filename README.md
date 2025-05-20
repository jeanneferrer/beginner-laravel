<p style="align=center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://laravel.com/img/logomark.min.svg" width="100">
  </a>
</p>

<h1 style="align=center">Beginner Laravel API</h1>

<p style="align=center">
  🚀 A simple Laravel API starter project with RESTful routes and custom controller logic.
</p>

---

## 🛠 Features

- Laravel 10+ Framework
- REST API route using routes/api.php
- Sample controller & JSON response
- Ready for database migrations

## 📦 Installation
```bash
git clone https://github.com/your-username/beginner-laravel.git
cd beginner-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate # optional
php artisan serve
```
- Then visit: http://127.0.0.1:8000/api/ping

## 📂 Structure
* <code>routes/api.php</code> — API endpoints
* <code>app/Http/Controllers</code> — Controller logic
* <code>database/migrations</code> — Table schema
* <code>.env</code> — Environment variables (not committed)

## ❤️ Credits
Built with Laravel. You can learn more at [laravel.com](laravel.com).