CREATE DATABASE student_db; 
 
USE student_db; 
 
CREATE TABLE students ( 
    enrollment_no VARCHAR(20) PRIMARY KEY, 
    name VARCHAR(100), 
    semester INT, 
    gender VARCHAR(10), 
    qualification VARCHAR(100) 
); 