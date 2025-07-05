# 📚 Library Management System

A full-stack web application to streamline library operations such as managing books, issuing and returning books, and tracking library inventory and users. Developed as part of a Full Stack Development Internship project at Anil Neerukonda Institute of Technology and Sciences.

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Server:** XAMPP (Apache + MySQL)

---

## 📌 Features

### 👨‍💼 Librarian Panel
- Secure login for librarians
- Dashboard with navigation to manage all modules

### 📚 Book Management
- Add, view, and delete books
- Upload book images and categorize them
- Search and filter capabilities

### 🔁 Book Transactions
- Issue books to employees with issue date logging
- Return books with return date update
- Automatically track availability status

### 📖 Inventory Overview
- List of all books with availability status
- Display issued book details including employee info
- Simple and clean UI with CSS styling

---

## 📂 Project Structure

LibraryManagementSystem/
├── add_books.php
├── book_issue.php
├── book_return.php
├── list_of_books.php
├── login.php
├── styles.css
├── uploads/ # Book images
├── library.sql # MySQL DB schema
└── index.html # Landing/Login page
---

## 🗃️ Database Tables

- **librarians** – Stores librarian credentials
- **books** – Stores book details (title, author, publisher, category, image)
- **issued_books** – Tracks book issue and return transactions
- **employees** – Stores employee info (employee_id, name, department, etc.)

---

## ✅ How to Run the Project

1. **Install XAMPP** and start Apache & MySQL services.
2. **Clone this repository**:
   ```bash
   git clone https://github.com/your-username/library-management-system.git
Place files in the htdocs folder of your XAMPP installation.

Create the database:

Open phpMyAdmin

Import library.sql file to create the required tables

Run the project:
Visit http://localhost/library-management-system in your browser.

🔒 Login Credentials
Use the following to log in:

Username: [Your employee ID]
Password: [Your password]

✅ Testing
Manual unit testing for:

Login functionality

Add book

Issue/return book

Integration testing for:

Form submission

Database updates

Image upload validation

📈 Future Enhancements

User roles (admin, librarian, assistant)

Email reminders for overdue books

Book search by filters (author, category)

Responsive mobile UI

Analytics for most issued books

📜 License
This project is developed as part of academic internship and is free to use for educational purposes.

👨‍💻 Developed By
A Ashish
📘 B.Tech CSE 



