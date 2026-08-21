CREATE DATABASE IF NOT EXISTS bcaecommerce;

USE bcaecommerce;

CREATE TABLE IF NOT EXISTS users (
    uid INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100),
    gender ENUM('male', 'female', 'others'),
    role ENUM('admin', 'users') DEFAULT 'users',
    image VARCHAR(100),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP
);






CREATE TABLE IF NOT EXISTS category (
    cid INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS products (
    pid INT AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    cadegory_id int,
    title varchar(255),
    slug varchar(255) UNIQUE,
    Quantity int,
    price float,
    inage varchar(100),
    description text,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(uid) ON DELETE RESTRICT,
    FOREIGN KEY (category_id) REFERENCES category(cid) ON DELETE RESTRICT
    
);

