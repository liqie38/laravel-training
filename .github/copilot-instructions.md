# Copilot Instructions for AI Agents

## Project Overview
- This is a Laravel-based CRUD web application using the default Laravel structure.
- Main components: Models (app/Models), Controllers (app/Http/Controllers), Views (resources/views), Migrations/Seeders/Factories (database/), and Routes (routes/web.php).
- Data flows from HTTP requests (routes/web.php) → Controllers → Models (Eloquent ORM) → Database. Views render data for the user.

## Key Workflows
- **Development server:** Use `php artisan serve` (runs on http://localhost:8000 by default).
- **Database:** Default is MySQL (see `.env`). SQLite file is present for local testing.
- **Migrations:** `php artisan migrate` applies schema changes.
- **Seeding:** `php artisan db:seed` populates sample data.
- **Testing:** `php artisan test` or `vendor\bin\phpunit` (tests/ directory).
- **Asset build:** `npm run dev` (uses Vite, see `vite.config.js`).

## Project Conventions
- **Blade templates:** All views use Blade (`resources/views`). Layouts in `resources/views/layouts/`.
- **Controllers:** Placed in `app/Http/Controllers/`. Follow Laravel resource controller conventions.
- **Models:** In `app/Models/`. Use Eloquent ORM for DB access.
- **Routes:** Web routes in `routes/web.php`. Use route names for redirects and form actions.
- **Validation:** Use Laravel's built-in validation in controllers.
- **Session/Cache/Queue:** Use database drivers (see `.env`).

## Integration Points
- **Authentication:** Standard Laravel auth (see `users` table, `register`/`login` routes, and `auth` views).
- **Policies:** Authorization logic in `app/Policies/`.
- **Mail/Queue/Cache:** Configured via `.env` and `config/` files. Uses database and log drivers by default.

## Examples
- Registration form: see `resources/views/inventories/test.blade.php` for a Blade form using CSRF and route names.
- Model example: `app/Models/Inventory.php`.
- Migration example: `database/migrations/2025_08_26_070940_create_inventories_table.php`.

## Tips
- Always use route names (e.g., `route('register')`) in Blade for maintainability.
- Use factories for test data (`database/factories/`).
- For new features, follow Laravel's conventions for directory and file naming.

---

If you need to update these instructions, merge with existing project-specific knowledge and keep examples up to date with the codebase.
