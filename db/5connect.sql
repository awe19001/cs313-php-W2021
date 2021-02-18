CREATE TABLE usertracker 
(
    id SERIAL PRIMARY KEY,
    firstname VARCHAR(25) NOT NULL,
    lastname VARCHAR(25) NOT NULL ,
    email VARCHAR(50) NOT NULL,
    userpassword VARCHAR(50) NOT NULL, 
    gender VARCHAR(25) NOT NULL
);


