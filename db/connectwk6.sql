CREATE TABLE landing (
    id SERIAL PRIMARY KEY,
    code VARCHAR(25) NOT NULL UNIQUE,
    name VARCHAR(100) NOT NULL 
);
CREATE TABLE notenewfamily (
    id SERIAL PRIMARY KEY,
    family_id INT NOT NULL REFERENCES landing(id),
    content text NOT NULL
);

INSERT INTO landing(code, name) VALUES ('CNF', 'New Families');
INSERT INTO landing(code, name) VALUES ('CNU', 'New Users');
INSERT INTO landing(code, name) VALUES ('CNE', 'New Event for Family');
INSERT INTO landing(code, name) VALUES ('LEA', 'List of Events and Alert');

INSERT INTO notenewfamily(family_id, content) VALUES (1, 'Family is ordained of God.');
INSERT INTO notenewfamily(family_id, content) VALUES (2, 'New users are welcome.');
INSERT INTO notenewfamily(family_id, content) VALUES (3, 'What activity we are going to do as family.');
INSERT INTO notenewfamily(family_id, content) VALUES (4, 'See the events you have made.');

SELECT * FROM notenewfamily n JOIN landing l ON n.family_id = l.id;


