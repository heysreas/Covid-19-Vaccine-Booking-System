-- schema.sql

-- Create database if not exists
CREATE DATABASE IF NOT EXISTS vaccine_booking_system;

-- Use the database
USE vaccine_booking_system;

-- Create appointments table
CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    date DATE NOT NULL
);
