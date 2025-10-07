# Security Guidelines (PHP/Laravel)

## 1) Authentication & Session
- Always use Laravel's `Auth` and session guards. Avoid rolling your own.
- Regenerate session ID after login: `request()->session()->regenerate()`.
- Use `Authenticate` middleware to protect routes.

## 2) CSRF
- Keep `VerifyCsrfToken` middleware enabled for web routes.
- Use `@csrf` in all POST/PUT/PATCH/DELETE Blade forms.

## 3) XSS
- Escape output by default with Blade `{{ }}`.
- Only use `{!! !!}` for trusted HTML and sanitize beforehand.
- Validate and normalize user input; prefer `FormRequest`s for complex logic.

## 4) SQL Injection
- Use Eloquent/Query Builder bindings (never build raw SQL from user input).
- If using raw queries, always pass bindings: `DB::select('...', [$var])`.

## 5) Passwords
- Hash using `Hash::make()`. Never store plaintext.
- Enforce minimal password length; consider HaveIBeenPwned checks in production.

## 6) Authorization
- Use policies/gates for edit/delete/assign operations on tickets.
- Hide/disable UI actions the user can’t perform.

## 7) File & Env
- Never commit `.env` or secrets. Use `.env` per environment.
- Restrict `public/` to web root. Keep `storage/` non-public.

## 8) Rate Limiting & Brute Force
- Throttle login endpoints in production: `Route::middleware('throttle:login')`.

## 9) Errors & Logs
- Don’t expose stack traces in production (`APP_DEBUG=false`).
- Log sensitive events; rotate logs.

## 10) Headers & HTTPS
- Force HTTPS in production; use HSTS.
- Set secure cookies when on HTTPS: `SESSION_SECURE_COOKIE=true`.

## 11) Input Validation
- Validate all inputs server-side using `$request->validate(...)` or FormRequests.

## 12) Dependencies
- Run `composer audit`. Keep Laravel & PHP updated.
- Track CVEs for key packages.

## 13) Backups & Migrations
- Backup DB before destructive changes.
- Use migrations for schema changes and seeds for safe test data.

--
This repo’s code follows these principles (CSRF tokens, escaped templates, validation, hashed passwords).
