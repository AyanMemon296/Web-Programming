CREATE DATABASE company_db; 
 
USE company_db; 
 
CREATE TABLE employees ( 
    emp_id VARCHAR(10) PRIMARY KEY, 
    name VARCHAR(100), 
    department VARCHAR(50), 
    designation VARCHAR(50) 
); 
