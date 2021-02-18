CREATE TABLE usertracker 
(
    id SERIAL PRIMARY KEY,
    firstname VARCHAR(25) NOT NULL,
    lastname VARCHAR(25) NOT NULL ,
    email VARCHAR(50) NOT NULL,
    userpassword VARCHAR(50) NOT NULL, 
    gender VARCHAR(25) NOT NULL
);

SELECT * FROM usertracker;



INSERT INTO note_user (username, password) VALUES ('john', 'pass');
INSERT INTO usertracker (id, firstname, lastname, email, userpassword, gender) VALUES ('')
