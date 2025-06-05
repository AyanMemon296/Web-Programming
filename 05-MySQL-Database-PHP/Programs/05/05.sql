CREATE DATABASE CompanyDB; 
 
USE CompanyDB; 
 
CREATE TABLE employee ( 
    e_id INT PRIMARY KEY, 
    e_name VARCHAR(100), 
    e_dept VARCHAR(50), 
    e_exp INT, 
    e_salary DECIMAL(10,2) 
); 
 -- Sample data 
INSERT INTO employee VALUES 
(101, 'Ayan Memon', 'IT', 3, 40000.00), 
(102, 'User2', 'HR', 5, 38000.00), 
(103, 'User3', 'IT', 2, 35000.00); 