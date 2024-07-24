-- Create database
CREATE DATABASE IF NOT EXISTS angkulam;

-- Use the database
USE angkulam;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create books table
CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    subtitle VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create articles table
CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert dummy data into books table
INSERT INTO books (title, subtitle, image, price) VALUES
    ('Book Title 1', 'Book Subtitle 1', 'book1.jpg', 500.00),
    ('Book Title 2', 'Book Subtitle 2', 'book2.jpg', 600.00)
    ON DUPLICATE KEY UPDATE title=VALUES(title), subtitle=VALUES(subtitle), image=VALUES(image), price=VALUES(price);

-- Insert dummy data into articles table
INSERT INTO articles (title, content, image) VALUES
    ('Article Title 1', 'This is the content of article 1.', 'article1.jpg'),
    ('Article Title 2', 'This is the content of article 2.', 'article2.jpg')
    ON DUPLICATE KEY UPDATE title=VALUES(title), content=VALUES(content), image=VALUES(image);
