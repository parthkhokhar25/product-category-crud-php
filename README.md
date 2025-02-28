# Product Category CRUD in PHP

This is a simple Product-Category CRUD (Create, Read, Update, Delete) application built using PHP, MySQL, and Bootstrap. It allows users to manage product categories and related products efficiently.

## Features
- Add, edit, and delete product categories
- Add, edit, and delete products
- Display products with their categories in a table
- User-friendly UI with Bootstrap

## Technologies Used
- PHP (Procedural)
- MySQL (Database)
- Bootstrap (Frontend UI)
- jQuery (For AJAX and frontend enhancements)

## Installation Steps
1. **Clone the repository:**
   ```sh
   git clone https://github.com/parthkhokhar25/product-category-crud-php.git
   ```
2. **Move into the project directory:**
   ```sh
   cd product-category-crud-php
   ```
3. **Create a database:**
   - Open phpMyAdmin or any MySQL client.
   - Create a new database (e.g., `product_db`).
   - Import the provided `database.sql` file into the database.

4. **Update database credentials:**
   - Open `config.php` and update the database details:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_NAME', 'product_db');
   ```
5. **Start a local server:**
   - If using XAMPP, move the project to the `htdocs` folder and start Apache & MySQL.
   - Access the project at `http://localhost/product-category-crud-php/`

## Usage
- Click "Add Category" to add a new category.
- Select a category, enter product details, and click "Submit" to add a product.
- The product list will be displayed in a table below.
- Options to edit and delete categories/products are available.

## Screenshots
![Project Screenshot](screenshot.png)

## License
This project is open-source and available under the [MIT License](LICENSE).

---
### Author
Developed by **Parth Khokhar** 🚀
