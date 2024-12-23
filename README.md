# Laravel Auth Dashboard

## Project Description

This is a Laravel-based project that demonstrates user authentication, displaying a dashboard with a list of products fetched from a REST API. The project includes features like login authentication, fetching user data, paginating product lists, and a logout functionality.

- **Login Form**: Uses credentials authentication with **DummyJSON API**.
- **User Dashboard**: Fetches and displays products in a paginated table.
- **Responsive UI**: Built with **Bootstrap** and custom styles.

---

## Installation Instructions

### 1. Clone the repository:
```
git clone https://github.com/syazanihafiy/laravel-auth-dashboard.git
cd laravel-auth-dashboard
```

### 2. Set up environment variables
Go to (../laravel-auth-dashboard/src)
```
cp .env.example .env
```

### 3. Build and start the Docker containers
Go to (../laravel-auth-dashboard/docker)
```
docker-compose up --build -d
```

### 4. Install Composer dependencies
```
docker exec -it laravel_app bash
composer install
php artisan key:generate
exit
```

### 5. Access the application
Access the application via http://localhost:8000

## Screenshots

### 1. Login Page
![image](https://github.com/user-attachments/assets/bf4cc106-0b6d-4846-bed2-1ba0678f3c74)

### 2. Dashboard Page
![image](https://github.com/user-attachments/assets/7ee8f788-5719-462c-8160-47286937d457)





