# Task Manager API

A simple RESTful API to manage tasks using Laravel.

---

## 🚀 Features

- Task CRUD (Create, Read, Update, Delete)
- Filtering and sorting tasks
- API tested with Postman
- Feature testing via PHPUnit
- Built with Laravel 10+

---

## 🛠️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/task-manager.git
cd task-manager
```

### 2. Install Dependencies

```bash
composer install
npm install && npm run build
```

### 3. Configure Environment

Copy `.env.example` to `.env`:

```bash
cp .env.example .env
```

Edit the `.env` file to match your local database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations and Seeders

```bash
php artisan migrate --seed
```

### 6. Serve the Application

```bash
php artisan serve
```

---

## 🧱️ API Structure

### Base URL

```bash
http://localhost:8000/api
```

### Endpoints

| Method | URI          | Description         |
|--------|--------------|---------------------|
| GET    | /tasks       | List all tasks      |
| GET    | /tasks/{id}  | Show task details   |
| POST   | /tasks       | Create new task     |
| PUT    | /tasks/{id}  | Update task         |
| DELETE | /tasks/{id}  | Delete task         |

### Query Parameters (Optional)

- `status=pending` or `status=completed`
- `sort=asc` or `sort=desc`

Example:

```bash
/tasks?status=pending&sort=desc
```

---

## 🧪 Postman Collection

You can import the Postman collection from:

```bash
postman/TaskManagement.postman_collection.json
```

---

## 📊 Design Decisions

- Built using Laravel's MVC architecture
- Includes a `postman/` folder for API documentation
- Includes `.env.testing` for test-specific configuration
- Database seeders and factories added for simplified testing
- Uses standardized commit message format:

```bash
feat(talent-growth): Add task filtering feature
```

