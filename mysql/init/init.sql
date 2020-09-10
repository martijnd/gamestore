CREATE DATABASE IF NOT EXISTS `gamestore_testing`;
CREATE USER 'tester'@'%' IDENTIFIED BY 'tester_password';
GRANT ALL ON *.* TO 'tester'@'%';
