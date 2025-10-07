# PHP Bug Tracker — Laravel & CodeIgniter (Side‑by‑Side)

[![Made with PHP](https://img.shields.io/badge/PHP-8.1%2B-777bb3)](#)
[![Laravel](https://img.shields.io/badge/Laravel-10-red)](#)
[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4-orange)](#)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](#)

A portfolio-friendly repository that implements the **same Bug Tracker** in **two PHP frameworks**:
- **`bugtracker-laravel/`** — modern, batteries‑included Laravel version.
- **`bugtracker-codeigniter/`** — lightweight CodeIgniter 4 version.

> Purpose: demonstrate framework fluency, security best practices, and clean CRUD patterns.

---

## Monorepo Layout

```
.
├─ bugtracker-laravel/        # Laravel 10 app (Auth + Tickets + Filters + SQLite test)
├─ bugtracker-codeigniter/    # CodeIgniter 4 app (Auth + Tickets + Filters)
└─ README.md
```

---

## Features (Both)

- Users can **register / login** (password hashing).
- **Tickets CRUD**: create, view, edit, delete.
- **Filters** by `status` and `severity`.
- Simple **Bootstrap** UI.
- **Security**: CSRF, XSS escaping, validation basics.

### Laravel extras
- Seeded demo users + sample tickets.
- `.env.testing` + **SQLite** `database/test.db` for fast tests.
- `Security_Guidelines.md` with best practices.
- Eloquent models, migrations, factories, seeders.

### CodeIgniter extras
- Minimal controllers/models/views.
- `database.sql` to create tables quickly.
- `Security_Guidelines.md` (CI4‑focused).

---

## Quickstart — Laravel (Recommended)

```bash
cd bugtracker-laravel
cp .env.example .env
# set your MySQL creds: DB_DATABASE=bugtracker, DB_USERNAME=..., DB_PASSWORD=...
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
# open http://127.0.0.1:8000
```

**Demo accounts**
- `admin@example.com` / `password`
- `user@example.com` / `password`

**Use the SQLite test DB (optional)**
```bash
# runs migrations into database/test.db
php artisan migrate --database=sqlite
php artisan test  # picks .env.testing automatically
```

---

## Quickstart — CodeIgniter

```bash
cd bugtracker-codeigniter
composer install
# create a MySQL database, e.g. bugtracker_ci
# import database.sql (users, tickets tables)
php spark serve
# open http://127.0.0.1:8080
```

---

## Security Highlights

- CSRF protection enabled in both apps.
- Output escaping: Blade `{ }` (Laravel) and `esc()` (CI4).
- Request validation before persistence.
- Password hashing (`Hash::make` / `password_hash`).
- Env‑based secrets; no secrets committed.
- See each app’s `Security_Guidelines.md`.

---

## Project Scripts (handy)

```bash
# From Laravel app
composer audit           # check known vulnerabilities
php artisan migrate:fresh --seed
php artisan tinker       # REPL

# From CI4 app
php spark migrate        # if you add migrations later
php spark routes         # list routes
```

---

## Why two frameworks?

- **Laravel**: rich ecosystem (ORM, queues, mail, policies), great for full products and teams.
- **CodeIgniter**: super light footprint, trivial to deploy on shared hosting, great for microsites/APIs.

This repo lets reviewers compare **architecture choices** and see your adaptability.


---

## License

MIT © 2025 Anees Busari
