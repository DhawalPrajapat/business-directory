# Business Directory (Vue + PHP)

A responsive web application to showcase and register local businesses.

## 💻 Tech Stack
- **Frontend:** Vue 3 + Bootstrap 5 + Vite
- **Backend:** PHP (Core) + MySQL
- **API:** REST-based with CORS support

## 📂 Project Structure
business-directory/
│
├── backend/ # PHP Backend
│ ├── config.php
│ ├── cors.php
│ ├── getBusinesses.php
│ └── addBusiness.php
│
├── frontend/ # Vue 3 Frontend (Vite)
│ ├── public/
│ ├── src/
│ │ ├── assets/
│ │ ├── components/
│ │ ├── router/
│ │ ├── views/
│ │ └── App.vue
│ ├── index.html
│ └── package.json




## 🚀 Setup Instructions

### 📦 Backend (PHP + MySQL)
1. Place the `backend/` folder inside `htdocs` (XAMPP).
2. Create a MySQL DB named `business_directory`.
3. Import the SQL schema (if provided).
4. Configure DB in `backend/config.php`.

> **Required PHP Version**: PHP **7.4** or higher 

### 🌐 Frontend (Vue)
```bash
cd frontend
npm install
npm run dev
```

---

## 🚀 Features

- Responsive Landing Page with Header, Footer, and CTA
- Business Search (by keyword and category)
- Add/Register a Business
- Backend API using PHP + MySQL
- Bootstrap 5 styling
- Vue 3 + Vue Router + Axios

---

## 📦 Tech Stack

**Frontend:**
- Vue 3 (Composition API)
- Vue Router
- Axios
- Bootstrap 5
- Vite

**Backend:**
- PHP (Core)
- MySQL
- CORS-enabled API

---

### 🔧 Backend Setup

1. Open XAMPP and start **Apache** and **MySQL**
2. Place the `backend/` folder inside your XAMPP `htdocs/` directory:
