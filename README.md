# PHP Bug Tracker — Laravel & CodeIgniter (Side-by-Side)

[![Made with PHP](https://img.shields.io/badge/PHP-8.1%2B-777bb3)](#)
[![Laravel](https://img.shields.io/badge/Laravel-10-red)](#)
[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4-orange)](#)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](#)

A portfolio-friendly repository that implements the **same Bug Tracker / Issue Management System** in **two PHP frameworks**:
- **`bugtracker-laravel/`** — modern, batteries-included Laravel version.
- **`bugtracker-codeigniter/`** — lightweight CodeIgniter 4 version.

> Purpose: demonstrate framework fluency, security best practices, and clean CRUD patterns.

---

## 🐞 PHP Bug Tracker / Issue Management System

A lightweight PHP + MySQL + Bootstrap starter that demonstrates:

- 🔐 **Auth (register / login / logout)** using `password_hash`
- 🧾 **Tickets CRUD** (create, read, update)
- 👑 **Admin assignment + status changes**
- 📊 **Dashboard filters** by severity / status
- 👥 **Role-based access** (admin vs user)

**Built:** 2025-10-05

### 🧱 Stack

- PHP 8+
- MySQL 5.7+ / MariaDB
- Bootstrap 5 (via CDN)
- PDO (secure DB access)
- Follows MVC design principles

---

## 🧭 Monorepo Layout

```
.
├─ bugtracker-laravel/        # Laravel 10 app (Auth + Tickets + Filters + SQLite test)
├─ bugtracker-codeigniter/    # CodeIgniter 4 app (Auth + Tickets + Filters)
└─ README.md
```

---

## ⚙️ Features (Both)

- Users can **register / login** (password hashing).
- **Tickets CRUD**: create, view, edit, delete.
- **Filters** by `status` and `severity`.
- Simple **Bootstrap UI**.
- **Security**: CSRF, XSS escaping, validation basics.

### Laravel extras
- Seeded demo users + sample tickets.
- `.env.testing` + **SQLite** `database/test.db` for fast tests.
- `Security_Guidelines.md` with best practices.
- Eloquent models, migrations, factories, seeders.

### CodeIgniter extras
- Minimal controllers/models/views.
- `database.sql` to create tables quickly.
- `Security_Guidelines.md` (CI4-focused).

---

## 🚀 Quickstart — Laravel (Recommended)

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

## 🚀 Quickstart — CodeIgniter

```bash
cd bugtracker-codeigniter
composer install
# create a MySQL database, e.g. bugtracker_ci
# import database.sql (users, tickets tables)
php spark serve
# open http://127.0.0.1:8080
```

---

## 🔐 Security Highlights

- CSRF protection enabled in both apps.
- Output escaping: Blade `{{ }}` (Laravel) and `esc()` (CI4).
- Request validation before persistence.
- Password hashing (`Hash::make` / `password_hash`).
- Env-based secrets; no secrets committed.
- See each app’s `Security_Guidelines.md`.

---

## 🧱 Project Scripts

```bash
# From Laravel app
composer audit           # check vulnerabilities
php artisan migrate:fresh --seed
php artisan tinker       # REPL

# From CI4 app
php spark migrate        # if you add migrations later
php spark routes         # list routes
```

---

## 🧭 Version Control & Branch Setup (GitHub Workflow)

Here’s how to push this combined project to GitHub, using a **feature branch** instead of pushing directly to `main`.

### Step-by-Step Commands

```bash
# 1️⃣ Create combined folder and move both apps
mkdir bugtracker-project && cd bugtracker-project
mv ../bugtracker-laravel .
mv ../bugtracker-codeigniter .

# 2️⃣ Initialize a new git repo
git init
git add .
git commit -m "Add Laravel and CodeIgniter bug tracker projects"

# 3️⃣ Create and switch to a feature branch
git checkout -b feature/dual-framework-bugtracker

# 4️⃣ Add your GitHub remote (replace with your username)
git remote add origin https://github.com/<youruser>/bugtracker-project.git

# 5️⃣ Push the feature branch
git push -u origin feature/dual-framework-bugtracker
```

---

### 💡 Recommended Branch Naming Conventions

| Type | Example | Description |
|------|----------|-------------|
| **Feature** | `feature/dual-framework-bugtracker` | New feature, project, or integration |
| **Fix** | `fix/login-validation` | Bug or hotfix |
| **Refactor** | `refactor/ticket-controller` | Code cleanup or structure improvements |
| **Docs** | `docs/update-readme` | Documentation-only changes |
| **Release** | `release/v1.0.0` | Production-ready release branch |

---

### 🧱 Framework-Specific Branches (optional)

| Framework | Suggested Branch | Purpose |
|------------|------------------|----------|
| Laravel | `feature/laravel-bugtracker` | Work on Laravel features, seeders, migrations |
| CodeIgniter | `feature/codeigniter-bugtracker` | Work on CodeIgniter-specific features or refactors |

---

###  GitHub Flow Summary

1. Work locally → commit often on feature branches.  
2. Push branch → open a **Pull Request** on GitHub.  
3. Merge to `main` after testing both Laravel & CodeIgniter apps.  
4. Tag releases (e.g., `v1.0.0`) when stable.

---

## 🧾 License

MIT © 2025 Anees Busari

