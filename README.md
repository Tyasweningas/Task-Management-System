
# Task Manager API

Simple RESTful API to manage tasks using Laravel.

---

## 🚀 Features

- Task CRUD (Create, Read, Update, Delete)
- Filtering & sorting tasks
- API tested with Postman
- Feature testing via PHPUnit
- Laravel 10+

---

## 🛠️ Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/your-username/task-manager.git
cd task-manager
```

2. Install dependencies
```bash
composer install
npm install && npm run build
```

3. Configure environment
Copy .env.example to .env:
```bash
cp .env.example .env
```
Edit .env file sesuai konfigurasi database lokal:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

4. Generate key
```bash
php artisan key:generate
```

5. Run migrations and seeders
```bash
php artisan migrate --seed
```

6. Serve locally
```bash
php artisan serve
```

🧱 API Structure
Base URL
```bash
http://localhost:8000/api
```
Endpoints
## Endpoints

| Method | URI         | Description       |
|--------|-------------|-------------------|
| GET    | /tasks      | List all tasks    |
| GET    | /tasks/{id} | Show task details |
| POST   | /tasks      | Create new task   |
| PUT    | /tasks/{id} | Update task       |
| DELETE | /tasks/{id} | Delete task       |

Query Parameters (optional)
status=pending or completed

sort=asc or desc

🧪 Postman Collection
Import koleksi Postman dari:
```bash
postman/TaskManager.postman_collection.json
```
Atau klik di sini jika melihat dari GitHub.

📐 Design Decisions
Menggunakan Laravel MVC structure

Folder Postman ditambahkan untuk dokumentasi API

File .env.testing untuk kebutuhan test

Seeder dan Factory disiapkan agar mudah testing data

Menggunakan commit message dengan format standar
