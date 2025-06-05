CREATE DATABASE userdb; 
 
USE userdb; 
 
CREATE TABLE users ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(100) NOT NULL, 
    lastname VARCHAR(100) NOT NULL, 
    email VARCHAR(150) NOT NULL 
); 