# 💰 Cryptocurrency Price Tracker (Laravel + CoinGecko API)

A simple Laravel-based application that fetches and displays the top 10 cryptocurrencies from the CoinGecko API.

---

## 📦 Features

* Fetch top 10 cryptocurrencies using CoinGecko API
* Store and update data in local database
* Auto-remove coins that are no longer in top 10
* Artisan command to update data manually or via scheduler
* Blade view to display latest prices
* Dark/Light mode ready UI (TailwindCSS-based)

---

## 🚀 Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/crypto-tracker.git
cd crypto-tracker
```

### 2. Install Dependencies

```bash
composer install
npm install && npm run build
```

### 3. Environment Setup

Copy `.env.example` to `.env` and update your DB settings:

```bash
cp .env.example .env
```

#### Example `.env` for SQLite:

```dotenv
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
```

#### Example `.env` for MySQL:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crypto_tracker
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Generate App Key

```bash
php artisan key:generate
```

### 5. Run Migrations

```bash
php artisan migrate
```

---

## 🛠️ Usage

### Run the command to fetch top 10 cryptocurrencies:

```bash
php artisan fetch:crypto-prices
```

This will:

* Fetch the top 10 coins
* Update or create entries
* Delete old entries not in the top 10 anymore

---

## 🔤 View in Browser

Start local server:

```bash
php artisan serve
```

Then visit:

```
http://localhost:8000
```

---

## 🧹 Artisan Command

Custom command file:
`app/Console/Commands/FetchCryptoPrices.php`

Register in `App\Console\Kernel.php`:

```php
protected function schedule(Schedule $schedule)
{
    $schedule->command('fetch:crypto-prices')->hourly();
}
```

Add the following cron job to your server (runs every minute):

```
* * * * * php /path-to-project/artisan schedule:run >> /dev/null 2>&1
```

---

## 🗄️ Database Schema

Migration file:
`database/migrations/xxxx_xx_xx_create_cryptocurrencies_table.php`

Fields:

* `id` (auto-increment)
* `name` (string)
* `symbol` (string)
* `price` (decimal)
* `image` (string, URL to logo)
* `retrieved_at` (timestamp)
* `timestamps`

---

## 📙 Tech Stack

* Laravel 10+
* TailwindCSS (UI)
* Livewire (optional - for dynamic refresh)
* CoinGecko Public API
* SQLite / MySQL

---

## 📸 Screenshot

![Crypto Table UI](public/images/screenshot.png) <!-- optional -->

---

## 📄 License

This project is open-source and available under the MIT license.

---

## 🙌 Credits

Data powered by [CoinGecko API](https://www.coingecko.com/en/api)
