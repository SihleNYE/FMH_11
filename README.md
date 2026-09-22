# FundMyHustle — Laravel 11

The complete Laravel 11 FundMyHustle crowdfunding application is available on the `laravel-11-migration` branch.

## What it includes
- Account registration, login, logout, and password resets
- Account-linked campaign submissions that are reviewed before publication
- Public campaign discovery, search, category filtering, and mock donation flow
- FundMyHustle-branded Blade UI and Vite frontend build

## Run locally

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
npm run dev
php artisan serve
```

Use `php artisan test` to run the feature test suite.
