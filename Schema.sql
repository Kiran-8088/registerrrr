-- Use the existing database
USE register;

-- Drop the users table if it exists
DROP TABLE IF EXISTS users;

-- Create a fresh users table
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(15) NOT NULL,
  gender VARCHAR(10),
  dob DATE,
  address TEXT,
  website VARCHAR(200),
  search_term VARCHAR(100),
  number_field INT,
  range_field INT,
  color_field VARCHAR(20),
  file_name VARCHAR(255),
  time_field TIME,
  month_field VARCHAR(20),
  week_field VARCHAR(20),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
