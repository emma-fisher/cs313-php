CREATE TABLE  posts 
(
    id SERIAL NOT NULL PRIMARY KEY,
    description_text TEXT,
    images BYTEA,
    price MONEY,
    tips TEXT,
    rating SMALLINT
);

CREATE TABLE  users 
(
    first_name VARCHAR(40),
    last_name VARCHAR(100),
    email TEXT UNIQUE NOT NULL PRIMARY KEY,
    password VARCHAR(30),
    post_id INT REFERENCES posts(id)
);


CREATE TABLE  categories
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(50),
    post_id INT NOT NULL REFERENCES posts(id)

);

INSERT INTO users(first_name, last_name, email, password) VALUES ('Emma', 'Fisher', 'fis17001@byui.edu', 'myPassword');
INSERT INTO users(first_name, last_name, email, password) VALUES ('Kate', 'Carter', 'car13044@byui.edu', 'KatePassword');
INSERT INTO users(first_name, last_name, email, password) VALUES ('Zach', 'Fisher', 'zach@byui.edu', 'ZachPassword');

INSERT INTO posts(description_text, price, tips, rating) VALUES ('This is a cool place to go', 3, 'Do not do something stupid', 5);