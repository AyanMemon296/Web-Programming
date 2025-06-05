CREATE DATABASE student_db; 
USE student_db; 
 
CREATE TABLE students ( 
    EnrollmentNo VARCHAR(20) PRIMARY KEY, 
    Name VARCHAR(100), 
    College VARCHAR(100), 
    Branch VARCHAR(50), 
    Year INT 
); 