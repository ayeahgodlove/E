DROP TABLE IF EXISTS Registration;
CREATE TABLE Registration(
    regist_id INT NOT NULL AUTO_INCREMENT,
    cust_id INT NOT NULL,
    Name VARCHAR (120),
    Phone VARCHAR (25),
    Email VARCHAR (255),
    username VARCHAR (255),
    password VARCHAR (255),
    PRIMARY KEY (regist_id),
    FOREIGN KEY (cust_id)

    REFERENCES
    Customer (cust_id)
);