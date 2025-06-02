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
git clone https://github.com/aliaslanii/crypto-tracker.git
cd crypto-tracker
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Environment Setup

Copy `.env.example` to `.env`:

```bash
cp .env.example .env
```


#### Example `.env` for MySQL:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crypto-tracker
DB_USERNAME=root
DB_PASSWORD=
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



## 📙 Tech Stack

* Laravel 12+
* TailwindCSS (UI)
* Livewire
* CoinGecko Public API
* MySQL
