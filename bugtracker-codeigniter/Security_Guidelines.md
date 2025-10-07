# Security Guidelines (PHP/CodeIgniter 4)

- Keep CSRF protection enabled.
- Escape output with `esc()` helpers.
- Validate all user inputs with Validation library.
- Use password hashing (`password_hash`).
- Never expose detailed errors in production.
- Keep database credentials outside VCS; use env files if possible.
