# 🌬️ AiraPHP — Adaptive Intelligent Rapid Architecture for PHP

AiraPHP is a **lightweight, fast, and modern mini PHP framework** designed for building  
APIs, micro websites, CRMs, admin panels, and custom business applications with ease.

Its goal is to provide **only the essential tools**, without the heavy structure of large frameworks  
— fast to deploy, easy to understand, and perfect for rapid development.

---

## 🌟 What “AiraPHP” Stands For

**AIRA = Adaptive Intelligent Rapid Architecture**

### ✔ **Adaptive**  
Flexible structure that adapts to small and large projects.

### ✔ **Intelligent**  
Smart routing, smart helpers, and clean architecture inspired by modern frameworks.

### ✔ **Rapid**  
Lightning-fast setup and minimal boilerplate for rapid development.

### ✔ **Architecture**  
A clean, modular architecture that keeps projects maintainable and scalable.

Together → **AiraPHP = A lightweight, airy, rapid PHP framework.**

---

## ✨ Features

### 🔹 Core Framework
- Clean folder structure (MVC style)
- Fast router with middleware support
- Controller system with automatic view loading
- Request & Response handling
- Session manager
- Helper functions (redirect, env, view, dd, etc.)

### 🔹 View System
- Simple view loader  
- Layout support  
- Optional template engine (Blade-like)

### 🔹 Database Layer
- PDO wrapper
- Query Builder  
  - `select`, `insert`, `update`, `delete`
  - `where`, `orderBy`, `limit`
  - `first()`, `get()`

### 🔹 Middleware
- Route-level middleware  
- Auth middleware  
- Custom middleware support  

### 🔹 Security & Auth
- Password hashing & verification
- Login / logout
- Session-based authentication

### 🔹 System Tools
- File upload handler
- Flash messages
- Config loader
- Error handler & logging

### 🔹 API Ready
- JSON response helpers
- Basic rate-limiter
- Clean and simple request parsing

### 🔹 Mail System
- PHPMailer wrapper  
- Easy SMTP configuration  
- Email templates  

---

## 📂 Folder Structure

AiraPHP/
│
├── app/
│ ├── Controllers/
│ ├── Models/
│ ├── Views/
│ ├── Middleware/
│ └── Routes/
│
├── public/
│ └── index.php
│
├── system/
│ ├── Core/
│ │ ├── Router.php
│ │ ├── Controller.php
│ │ ├── View.php
│ │ └── App.php
│ ├── Database/
│ │ └── QueryBuilder.php
│ ├── Support/
│ ├── Session.php
│ ├── Mail.php
│ └── Helpers.php
│
├── storage/
├── vendor/
└── composer.json

yaml
Copy code

---

## 🚀 Getting Started

1. **Install dependencies**
```bash
composer install
Configure environment
Create a .env file:

env
Copy code
APP_URL=http://localhost
DB_HOST=localhost
DB_NAME=test
DB_USER=root
DB_PASS=
