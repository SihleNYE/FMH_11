# FundMyHustle — Laravel 11

A Laravel 11 crowdfunding demo with account registration, account-linked campaign submissions, public campaign discovery, and a demo donation flow.

## Requirements

- PHP 8.2 or newer
- [Composer](https://getcomposer.org/)
- Node.js 20 or newer with npm
- SQLite support enabled in PHP (`pdo_sqlite`)

## Run locally

```bash
git clone https://github.com/SihleNYE/FMH_11.git
cd FMH_11
composer install
npm install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
```

In one terminal, start Laravel:

```bash
php artisan serve
```

In a second terminal, start the frontend assets:

```bash
npm run dev
```

Then open the local address Laravel prints, usually `http://127.0.0.1:8000`. Register a new account before creating a campaign.

## Checks

```bash
php artisan test
npm run build
```

## Notes

- The app uses SQLite for the local setup.
- Donations are a demo database flow: no real payment is processed.
- `.env` and `database/database.sqlite` are local-only and must not be committed.
