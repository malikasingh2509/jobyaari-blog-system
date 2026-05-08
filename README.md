# JobYaari Blog System

A modern Laravel-based job and blog portal where admins can manage job-related blogs, results, admit cards, placements, and other updates through a responsive admin dashboard.

---

# Live Demo

Frontend:
https://jobyaari-blog-system-dt6i.onrender.com

Admin Panel:
https://jobyaari-blog-system-dt6i.onrender.com/login
---

# Admin Credentials

Email: admin@jobyaari.com 
Password: admin123

---

# Features

## Frontend Features

- Responsive homepage
- Blog listing section
- Blog detail page
- Search blogs
- Category-wise filtering
- Recent blogs sidebar
- Modern UI design
- Mobile responsive layout

## Admin Features

- Secure admin login
- Add new blogs
- Edit blogs
- Delete blogs
- Upload blog images
- Manage categories
- Dashboard interface
- Rich text blog editor

---

# Tech Stack

## Backend
- Laravel 13
- PHP
- MySQL

## Frontend
- HTML
- CSS
- Bootstrap 5
- JavaScript
- jQuery
- AJAX

## Deployment
- GitHub
- Render

---

# Installation & Setup

## 1. Clone Repository

```bash
git clone https://github.com/malikasingh2509/jobyaari-blog-system
```

---

## 2. Open Project

```bash
cd jobyaari-blog-system
```

---

## 3. Install Dependencies

```bash
composer install
```

```bash
npm install
```

---

## 4. Configure Environment File

Create `.env` file and configure:

```env
APP_NAME=JobYaari
APP_ENV=local
APP_KEY=
APP_DEBUG=true

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

---

## 5. Generate Application Key

```bash
php artisan key:generate
```

---

## 6. Run Migrations

```bash
php artisan migrate
```

---

## 7. Start Development Server

```bash
php artisan serve
```

---

# Project Structure

```text
app/
resources/views/
routes/
public/
database/
```

---

# Main Functionalities

- CRUD Operations for blogs
- Dynamic filtering system
- Search functionality
- Image upload system
- Responsive UI
- Authentication system
- Category management

---

# Deployment

The project is deployed on Render and source code is hosted on GitHub.

---

# Future Improvements

- User authentication
- Comments system
- Blog likes
- Pagination
- Rich text formatting
- SEO optimization

---

# Author

Malika Singh