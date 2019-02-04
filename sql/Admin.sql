CREATE TABLE Admin(
    admin_id INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(120),
    Address VARCHAR(100),
    Phone VARCHAR(25),
    Email VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255),
    memberSince DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (admin_id)
);