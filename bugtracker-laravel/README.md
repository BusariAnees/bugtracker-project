# Laravel Bug Tracker (Minimal)

Auth (register/login/logout), Tickets CRUD, filters, and simple assignment.

## Quickstart

```bash
cp .env.example .env
# Update DB settings for MySQL
composer install
php artisan key:generate
php artisan migrate --seed
php -S localhost:8000 -t public
# or: php artisan serve
```

### Default Seeded Accounts
- **admin@example.com / password**
- **user@example.com / password**

## Features
- User auth (session + CSRF)
- Tickets: create, edit, delete, show
- Filters: `status`, `severity`
- Assignment to user
- Basic Bootstrap UI

## Notes
- This is a minimal source export. Composer will fetch framework files.
- For production, enable opcache, queues, and configure cache/session drivers.
