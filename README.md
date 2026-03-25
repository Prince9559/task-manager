# ⚙️ Backend Setup (Laravel API)

This project uses **Laravel (PHP)** as the backend to provide RESTful APIs for the Task Manager application.

---

## 📌 Requirements

Make sure the following are installed:

* PHP >= 8.x
* Composer
* PostgreSQL
* Laravel CLI (optional)

---

## 🚀 Setup Instructions

### 🔹 1. Navigate to Backend Folder

```bash id="b1"
cd backend
```

---

### 🔹 2. Install Dependencies

```bash id="b2"
composer install
```

---

### 🔹 3. Configure Environment File

```bash id="b3"
cp .env.example .env
php artisan key:generate
```

---

### 🔹 4. Configure Database

Open `.env` file and update:

```env id="b4"
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=task_manager
DB_USERNAME=system
DB_PASSWORD=1234
```

---

## 🗄️ Database Setup

### Option 1: Using Migration

```bash id="b5"
php artisan migrate
```

---

### Option 2: Using SQL File

```bash id="b6"
psql -U postgres -d task_manager -f ../task_manager.sql
```

---

## ▶️ Run Backend Server

```bash id="b7"
php artisan serve
```

Server will run at:
👉 http://127.0.0.1:8000

---

## 🔗 API Endpoints

| Method | Endpoint        | Description        |
| ------ | --------------- | ------------------ |
| GET    | /api/tasks      | Fetch all tasks    |
| POST   | /api/tasks      | Create new task    |
| PUT    | /api/tasks/{id} | Update task status |

---

## 🔄 API Response Format (Example)

```json id="b8"
[
  {
    "id": 1,
    "task_name": "Learn Laravel",
    "status": "Created",
    "created_at": "2026-03-25T10:00:00.000000Z"
  }
]
```

---

## 📌 Notes

* Backend is built using Laravel REST API
* Uses PostgreSQL as database
* JSON responses are consumed by frontend using Fetch API
* Status lifecycle: Created → WIP → Completed

---

## 👨‍💻 Developer

Prince Kumar
Full Stack Developer
📧 [kumarprince95596186@gmail.com](mailto:kumarprince95596186@gmail.com)
