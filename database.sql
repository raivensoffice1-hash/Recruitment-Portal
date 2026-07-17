CREATE DATABASE recruitment_portal;

USE recruitment_portal;

CREATE TABLE candidates (

id INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(100) NOT NULL,

mobile VARCHAR(10) NOT NULL,

district VARCHAR(100) NOT NULL,

age INT NOT NULL,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE TABLE admin(

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50),

password VARCHAR(255)

);

INSERT INTO admin(username,password)

VALUES('admin','admin123');
