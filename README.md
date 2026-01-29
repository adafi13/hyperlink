# Hyperlink Project

Project Laravel untuk mengelola dan membangun aplikasi web modern.

## 📋 Requirements

Sebelum memulai, pastikan sistem Anda sudah terinstall:

- PHP >= 8.2
- Composer
- Node.js >= 18.x & NPM
- MySQL/MariaDB atau database lainnya
- Laragon/XAMPP/WAMP (opsional untuk Windows)

## 🚀 Panduan Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/adafi13/hyperlink.git
cd hyperlink
```

### 2. Install Dependencies PHP

```bash
composer install
```

### 3. Install Dependencies JavaScript

```bash
npm install
```

### 4. Setup Environment

Salin file `.env.example` menjadi `.env`:

```bash
# Windows (Command Prompt)
copy .env.example .env

# Windows (PowerShell) / Linux / Mac
cp .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Konfigurasi Database

Edit file `.env` dan sesuaikan dengan konfigurasi database Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hyperlink
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Buat Database

Buat database baru dengan nama sesuai `DB_DATABASE` di phpMyAdmin atau MySQL:

```sql
CREATE DATABASE hyperlink;
```

### 8. Jalankan Migrasi

```bash
php artisan migrate
```

Jika ingin dengan sample data (seeder):

```bash
php artisan migrate --seed
```

### 9. Build Assets Frontend

Untuk development:

```bash
npm run dev
```

Untuk production:

```bash
npm run build
```

## 🏃 Menjalankan Aplikasi

### Opsi 1: Menggunakan Laravel Development Server

```bash
php artisan serve
```

Aplikasi akan berjalan di: `http://localhost:8000`

### Opsi 2: Dengan Vite Development Server (Hot Reload)

Buka 2 terminal:

**Terminal 1** - Laravel Server:
```bash
php artisan serve
```

**Terminal 2** - Vite Server:
```bash
npm run dev
```

Akses aplikasi di: `http://localhost:8000`

### Opsi 3: Menggunakan Laragon

Jika menggunakan Laragon:
1. Pastikan project berada di folder `c:\laragon\www\hyperlink`
2. Start Laragon (Apache & MySQL)
3. Akses melalui: `http://hyperlink.test`

## 📝 Perintah Berguna

### Cache Management

```bash
# Clear semua cache
php artisan optimize:clear

# Clear cache spesifik
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize untuk production
php artisan optimize
```

### Database

```bash
# Rollback migrasi terakhir
php artisan migrate:rollback

# Reset semua migrasi
php artisan migrate:reset

# Fresh migration dengan seeder
php artisan migrate:fresh --seed
```

### Testing

```bash
# Jalankan semua test
php artisan test

# Test spesifik
php artisan test --filter ExampleTest
```

## 📁 Struktur Folder Penting

```
hyperlink/
├── app/                    # Kode aplikasi utama
│   ├── Http/Controllers/   # Controllers
│   ├── Models/            # Eloquent Models
│   └── Providers/         # Service Providers
├── config/                # File konfigurasi
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/          # Database seeders
├── public/               # Public assets & entry point
├── resources/
│   ├── css/             # Stylesheet
│   ├── js/              # JavaScript
│   └── views/           # Blade templates
├── routes/
│   └── web.php          # Web routes
└── storage/             # File storage & logs
```

## 🛠️ Troubleshooting

### Error: "No application encryption key has been specified"

```bash
php artisan key:generate
```

### Error: Permission denied (Linux/Mac)

```bash
chmod -R 775 storage bootstrap/cache
```

### Error: NPM dependencies outdated

```bash
npm update
# atau
npm install
```

### Error: Database connection failed

- Pastikan MySQL/MariaDB sudah running
- Cek kredensial database di file `.env`
- Pastikan database sudah dibuat

### Assets tidak dimuat (CSS/JS)

```bash
# Rebuild assets
npm run build

# Atau jalankan dev server
npm run dev
```

## 👥 Tim Development

Untuk berkontribusi ke project:

1. Buat branch baru untuk fitur/bug fix
2. Commit perubahan dengan pesan yang jelas
3. Push ke repository
4. Buat Pull Request untuk review

```bash
git checkout -b feature/nama-fitur
git add .
git commit -m "Deskripsi perubahan"
git push origin feature/nama-fitur
```

## 📚 Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Bootcamp](https://bootcamp.laravel.com)
- [Laracasts](https://laracasts.com)

## 📄 License

Project ini menggunakan [MIT license](https://opensource.org/licenses/MIT).
