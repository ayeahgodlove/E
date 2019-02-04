CREATE TABLE Reservation(
    reservation_id INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR (120),
    Email VARCHAR (255),
    phone VARCHAR (25),
    Time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Destination VARCHAR(100),
    charge VARCHAR(255),
    PRIMARY KEY (reservation_id)
);