# CodeIgniter 4 Bug Tracker (Minimal)

Auth (basic), Tickets CRUD, filters, Bootstrap UI.

## Quickstart
```bash
composer install
# Create MySQL DB: bugtracker_ci (or update app/Config/Database.php)
php spark serve   # or: php -S localhost:8080 -t public
```

### Create tables
Use `database.sql` to create `users` and `tickets` tables, or build migrations later.

### Optional: SQLite for testing
You can point to an SQLite file by adding a connection in `app/Config/Database.php` and updating DSN or database path.

## Security
- CSRF is enabled by default (App config).
- Escape output with `esc()` in views.
- Use password hashing (already used on register).

This is a minimal educational scaffold. For production, add Filters (auth), Migrations, Seeds, and proper validation rules.
