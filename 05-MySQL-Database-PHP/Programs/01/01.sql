CREATE DATABASE studentdb; 
 
USE studentdb; 
 
CREATE TABLE students ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    rollno VARCHAR(10) NOT NULL, 
    name VARCHAR(100) NOT NULL, 
    email VARCHAR(100) NOT NULL, 
    mobile VARCHAR(10) NOT NULL 
); 
 