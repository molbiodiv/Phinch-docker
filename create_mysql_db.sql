CREATE DATABASE IF NOT EXISTS phinch;
CREATE USER IF NOT EXISTS 'phinch'@'localhost' IDENTIFIED BY 'phinch';
GRANT ALL PRIVILEGES ON phinch.* TO 'phinch'@'localhost';
FLUSH PRIVILEGES;
