# 🛒 MiniStore - PHP E-Commerce Web Application

🚀 MiniStore is a fully functional E-commerce web application built using **PHP & MySQL**, designed to provide a seamless online shopping experience with both **User and Admin functionalities**.

⭐ If you like this project, don't forget to give it a star!

---

## 🌍 Project Overview

MiniStore allows users to:
- Browse products 🛍️
- Add items to cart 🛒
- Place orders easily 📦

It also includes a powerful **Admin Panel** to manage:
- Products 📦
- Orders 📊
- Customer data 👤

---

## 🧠 Key Features

### 👤 User Features:
- User Signup & Login 🔐
- Browse Products 🛍️
- Add to Cart 🛒
- Buy Products 💳
- View Product Details 📄
- Order Placement System 📦

---

### 🛠️ Admin Features:
- Admin Login 🔑
- Add / Edit / Delete Products 📦
- Manage Orders 📊
- Approve / Reject Orders ✅❌
- View Payment Receipts 💳
- Dashboard Overview 📈

---

## ⚙️ Tech Stack

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  

---

## 🏗️ Project Structure
MiniStore/
│
├── admin_panel/ # Admin functionalities
├── login/ # User authentication
├── images/ # Product images
├── index.php # Home page
├── cart.php # Cart system
├── buy.php # Purchase logic
├── dbconfig.php # Database connection (ignored)
└── README.md


---

## 🖥️ Screenshots

### 🏠 Home Page
![Home](./images/newbannerforHome.jpg)

### 🛒 Product Listing
![Products](./images/Iphone.png)

### 🔐 User Login
![Login](./images/background.jpg)

### 🛠️ Admin Dashboard
![Admin](./images/adminproduct.jpg)

---

## 🚀 How to Run Locally

### 1️⃣ Clone the repository
```bash
git clone https://github.com/Darshit-Mehta-11/ministore.git

2️⃣ Move project to XAMPP / WAMP

Place the project folder inside:

htdocs/

3️⃣ Start Server
Start Apache
Start MySQL

4️⃣ Setup Database
Open phpMyAdmin
Create database: music_portal
Import .sql file (if available)

5️⃣ Configure Database

Update in:

dbconfig.php
$conn = mysqli_connect("localhost","root","","ministore");

6️⃣ Run Project

Open browser:

http://localhost/MiniStore

📈 Future Enhancements
Online Payment Gateway Integration 💳
User Order History 📜
Product Reviews ⭐
Mobile Responsive UI 📱
AI Product Recommendation 🤖

👨‍💻 Author
Pranav Amreliya
