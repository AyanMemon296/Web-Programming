CREATE DATABASE studentdb; 
 
USE studentdb; 
 
CREATE TABLE students ( 
    enrollment_no VARCHAR(20) PRIMARY KEY, 
    name VARCHAR(100), 
    course VARCHAR(50), 
    semester INT 
); 
 -- Insert sample data 
INSERT INTO students VALUES  
('ENR001', 'Ayan Memon', 'BE', 6), 
('ENR002', 'User2', 'BCA', 4);