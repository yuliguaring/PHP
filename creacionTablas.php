CREATE table users (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    second_name VARCHAR(30) NULL,
    last_name varchar(30) NULL,
    second_lastname VARCHAR(30)NOT NULL,
    document BIGINT(10) UNIQUE NOT NULL,
    password VARCHAR(100) NULL,
    email VARCHAR(50) NULL,
    phone BIGINT(10) NULL,
    age int(2) NULL
);