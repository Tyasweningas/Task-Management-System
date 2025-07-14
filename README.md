
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
Edit the 
```bash
.env
```
file to match your local database configuration:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

4. Generate application key
```bash
php artisan key:generate
```

5. Run database migrations and seeders
```bash
php artisan migrate --seed
```

6. Start the local development server
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

```bash
status=pending
```
or 
```bash
completed
```
```bash
sort=asc
```
or 
```bash
desc
```

🧪 Postman Collection
You can import the Postman collection from:
```bash
postman/TaskManager.postman_collection.json
```

📐 Design Decisions
Built using Laravel's MVC architecture

Includes a postman folder for API documentation

Includes .env.testing for test-specific environment settings

Database seeders and factories added for easier testing

Follows standardized commit message conventions
