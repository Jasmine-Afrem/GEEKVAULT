# GEEKVAULT  

GEEKVAULT is a simple and efficient online store for gaming enthusiasts. It offers a wide range of gaming products, including consoles, games, accessories, and merchandise. Designed for ease of use, GEEKVAULT provides gamers with a straightforward and reliable shopping experience.  

---

## 🛠️ Tech Stack  

- **Frontend**: HTML and CSS  
- **Backend**: PHP  
- **Database**: phpMyAdmin with MySQL  

---

## 🚀 Features  

- **Product Catalog**: Displays a variety of gaming products.  
- **Shopping Cart**: Allows users to add items and manage their orders.  
- **Database Integration**: All products, users, and orders are managed using phpMyAdmin (MySQL).  

---

## 🧑‍💻 How to Run the Project Locally (Expanded Steps)

### 1️⃣ **Set Up a Local Server**
- Install XAMPP, WAMP, or any local server capable of running PHP and MySQL.
- Launch the server and start the **Apache** and **MySQL** modules.

### 2️⃣ **Clone the Repository**
- Open a terminal or command prompt and run:
  ```bash
  git clone https://github.com/your-username/GEEKVAULT.git
  cd GEEKVAULT
Ensure Git is installed on your system. If not, download and install it from Git's official site.

### 3️⃣ **Set Up the Database**

- Open phpMyAdmin in your browser (usually available at http://localhost/phpmyadmin).
- Create a new database called geekvault (or as specified in your project configuration).
- Import the database schema:
    - Navigate to the **Import** tab in phpMyAdmin.
    - Select the SQL file provided in the repository (usually found in a folder like `database/` or `sql/`).
    - Click **Go** to execute the import.


### 4️⃣ **Configure the Project**

- Open the project folder and locate the config.php (or equivalent) file.
- Update database credentials to match your local setup:
   ```php 
    $db_host = 'localhost';    // Hostname
    $db_user = 'root';         // Default username
    $db_pass = '';             // Default password for XAMPP
    $db_name = 'geekvault';    // Database name

### 5️⃣ **Run the Project**

- Place the project folder (GEEKVAULT/) inside your web server’s root directory:
     - For XAMPP, this is typically htdocs/.
     - For WAMP, it’s www/.
- Open your browser and navigate to http://localhost/GEEKVAULT/.

### 6️⃣ **Test the Features**

- Browse the site to ensure all features (e.g., product catalog, shopping cart) are working as intended.
-  Check the database to confirm that data is being stored and retrieved correctly.
