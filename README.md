
# Product Category CRUD in PHP

📌 Project Overview

This project is a CRUD (Create, Read, Update, Delete) application for managing product categories using PHP and MySQL. It provides a simple interface to add, view, edit, and delete categories and products.


🛠️ Features

Add categories and products

Edit existing records

Delete categories and products

Display data in a tabular format


🚀 Technologies Used

PHP (Core PHP, No OOP)

MySQL (Database management)

Bootstrap (For responsive design)

jQuery & AJAX (For interactive UI)


📂 Project Structure

/product-category-crud-php
│── index.php          # Main UI with form and data table
│── add_category.php   # Handles category addition
│── add_product.php    # Handles product addition
│── delete.php         # Deletes categories/products
│── update.php         # Updates categories/products
│── db.php             # Database connection file
│── style.css          # Custom styling
│── README.md          # Project documentation
└── assets/            # Contains images, scripts, and styles


⚡ Installation Guide

Clone the repository

git clone https://github.com/parthkhokhar25/product-category-crud-php.git

Import the Database

Create a database in MySQL (e.g., product_db).

Import database.sql from the project folder.

Update Database Credentials

Open db.php and update the following:

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "product_db";

Run the Project

Start your local server (XAMPP, WAMP, or MAMP).

Open http://localhost/product-category-crud-php/ in your browser.


🎯 Future Enhancements

Implement validation for form inputs.

Add category filtering.

Use prepared statements for better security.

Convert to an OOP-based approach.


🤝 Contributing

Feel free to fork this repository and contribute! Open a pull request with your improvements.


📜 License

This project is open-source and available under the MIT License.


✅ Developed by Parth Khokhar | 🌟 Star the repo if you like it!



