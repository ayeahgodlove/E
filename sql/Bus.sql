DROP TABLE IF EXISTS BusSchedule;
CREATE TABLE BusSchedule(
    id INT NOT NULL AUTO_INCREMENT,
    bus_id INT NOT NULL,
    depature_time  DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    number_of_seats INT NOT NULL,
    journey_description VARCHAR (255),
    destination VARCHAR (255),
    PRIMARY KEY (id),
    FOREIGN KEY(bus_id)

    REFERENCES 
    Bus (bus_id)
    
);