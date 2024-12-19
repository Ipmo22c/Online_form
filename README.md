Your file structure should look something like this:
C:\xampp\htdocs\online_form
  ├── index.html
  ├── styles.css
  ├── script.js
  ├── submit.php
Create the Database: If it doesn't exist:

Execute the following SQL query in your MySQL interface to create it:

CREATE DATABASE registration;
Create the users Table: Once the database exists, ensure the required table is present:

Use the registration database:

USE registration;

Create the users table if it doesn’t already exist:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    gender VARCHAR(10) NOT NULL
);

