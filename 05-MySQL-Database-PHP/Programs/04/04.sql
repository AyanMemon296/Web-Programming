CREATE DATABASE LibraryDB; 
 
USE LibraryDB; 
 
CREATE TABLE Books ( 
    BookID INT PRIMARY KEY, 
    Title VARCHAR(100), 
    Author VARCHAR(100), 
    Price DECIMAL(8,2) 
); 
 
INSERT INTO Books VALUES 
(1, 'The Alchemist', 'Paulo Coelho', 299.50), 
(2, 'Wings of Fire', 'A.P.J. Abdul Kalam', 199.00), 
(3, 'Think Like a Monk', 'Jay Shetty', 349.75); 