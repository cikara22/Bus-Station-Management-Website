
CREATE DATABASE IF NOT EXISTS reservations;


USE reservations;


CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);





CREATE TABLE IF NOT EXISTS reservationsInfo (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    departure_station VARCHAR(255),
    arrival_station VARCHAR(255),
    ticket_type VARCHAR(50),
    num_passengers INT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    
);


