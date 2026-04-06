# Laravel PWA Assignment

## 🚀 Project Setup Guide

Follow these steps to clone, install, and run the Laravel PWA project.

---

## 📥 1. Clone the Repository

```bash
git clone https://github.com/KG-DI-KXNG/laravel-Pwa-Assignment.git
cd laravel-Pwa-Assignment
```

---

## 📦 2. Install Dependencies

```bash
composer install
```

---

## 🔑 3. Generate Application Key

```bash
php artisan key:generate
```

---

## 🗄️ 4. Database Setup (SQLite)

This project uses **SQLite** by default.

### Ensure `.env` has the following:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### Create the SQLite file (if it does not exist):

```bash
touch database/database.sqlite
```

---

## 🧱 5. Run Migrations & Seed Database

```bash
php artisan migrate --seed
```

---

## ▶️ 6. Serve the Application

```bash
php artisan serve
```

The app will be available at:

👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🎨 7. Install Frontend Dependencies (Optional)

If the project includes frontend assets (Vite):

```bash
npm install
npm run dev
```

---

## ⚠️ Troubleshooting

### Database file does not exist

```bash
mkdir -p database
touch database/database.sqlite
```

### Clear cache/config issues

```bash
php artisan config:clear
php artisan cache:clear
```

### Reset database

```bash
php artisan migrate:fresh --seed
```

---

## ✅ One-Line Setup Command

```bash
git clone https://github.com/KG-DI-KXNG/laravel-Pwa-Assignment.git && cd laravel-Pwa-Assignment && composer install && php artisan key:generate && php artisan migrate --seed && php artisan serve
```

---

## 📌 Notes

* This project
# Laravel PWA Assignment

## 🚀 Project Setup Guide

Follow these steps to clone, install, and run the Laravel PWA project.

---

## 📥 1. Clone the Repository

```bash
git clone https://github.com/KG-DI-KXNG/laravel-Pwa-Assignment.git
cd laravel-Pwa-Assignment
```

---

## 📦 2. Install Dependencies

```bash
composer install
```

---

## 🔑 3. Generate Application Key

```bash
php artisan key:generate
```

---

## 🗄️ 4. Database Setup (SQLite)

This project uses **SQLite** by default.

### Ensure `.env` has the following:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### Create the SQLite file (if it does not exist):

```bash
touch database/database.sqlite
```

---

## 🧱 5. Run Migrations & Seed Database

```bash
php artisan migrate --seed
```

---

## ▶️ 6. Serve the Application

```bash
php artisan serve
```

The app will be available at:

👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🎨 7. Install Frontend Dependencies (Optional)

If the project includes frontend assets (Vite):

```bash
npm install
npm run dev
```

---

## ⚠️ Troubleshooting

### Database file does not exist

```bash
mkdir -p database
touch database/database.sqlite
```

### Clear cache/config issues

```bash
php artisan config:clear
php artisan cache:clear
```

### Reset database

```bash
php artisan migrate:fresh --seed
```

---

## ✅ One-Line Setup Command

```bash
git clone https://github.com/KG-DI-KXNG/laravel-Pwa-Assignment.git && cd laravel-Pwa-Assignment && composer install && php artisan key:generate && php artisan migrate --seed && php artisan serve
```

---

## 📌 Notes

* This project
