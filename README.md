<p style="align=center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://laravel.com/img/logomark.min.svg" width="100">
  </a>
</p>

<h1 style="align=center">Beginner Laravel Task API</h1>

<p style="align=center">
  🚀 A simple Laravel API project for managing tasks. It demonstrates basic CRUD (Create, Read, Update, Delete) operations using Laravel's Eloquent ORM and resourceful controllers.
</p>

---

## Features

- **List Tasks:**  
  Retrieve all tasks.

- **Create Task:**  
  Add a new task with a title and completion status.

- **Update Task:**  
  Update the title and/or completion status of an existing task.

- **Delete Task:**  
  Remove a task by its ID.

- **Boolean Casting:**  
  The `completed` attribute is always returned as a boolean (`true`/`false`) in API responses.

## API Endpoints

All endpoints are prefixed with `/api` (e.g., `/api/tasks`):

| Method | Endpoint            | Description           |
|--------|---------------------|----------------------|
| GET    | /api/tasks          | List all tasks       |
| POST   | /api/tasks          | Create a new task    |
| GET    | /api/tasks/{id}     | Get a single task    |
| PUT    | /api/tasks/{id}     | Update a task        |
| PATCH  | /api/tasks/{id}     | Partially update     |
| DELETE | /api/tasks/{id}     | Delete a task        |

## Example Task Object

```json
{
  "id": 1,
  "title": "Sample Task",
  "completed": false,
  "created_at": "2025-05-23T12:00:00.000000Z",
  "updated_at": "2025-05-23T12:00:00.000000Z"
}
```

## Getting Started

1. **Clone the repository**
2. **Install dependencies**
   ```sh
   composer install
   ```
3. **Set up your `.env` file and database**
4. **Run migrations**
   ```sh
   php artisan migrate
   ```
5. **Start the server**
   ```sh
   php artisan serve
   ```
6. **Test the API** using Postman or any HTTP client.

## Notes

- All API routes are defined in `routes/api.php`.
- The `Task` model uses `$casts` to ensure the `completed` field is always a boolean.
- No authentication is required for these endpoints (for learning/demo purposes).

---