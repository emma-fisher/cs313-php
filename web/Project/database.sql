CREATE TABLE  users 
(
    id SERIAL NOT NULL PRIMARY KEY,
    first_name VARCHAR(40),
    last_name VARCHAR(100),
    email TEXT UNIQUE NOT NULL,
    password VARCHAR(30)
);

CREATE TABLE  categories
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(50)
);

CREATE TABLE  posts 
(
    id SERIAL NOT NULL PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    description_text TEXT,
    price MONEY,
    tips TEXT,
    rating SMALLINT,
    user_id INT REFERENCES users(id),
    category_id INT NOT NULL REFERENCES categories(id)
);

INSERT INTO users(first_name, last_name, email, password) VALUES ('Emma', 'Fisher', 'fis17001@byui.edu', 'myPassword');
INSERT INTO users(first_name, last_name, email, password) VALUES ('Kate', 'Carter', 'car13044@byui.edu', 'KatePassword');
INSERT INTO users(first_name, last_name, email, password) VALUES ('Zach', 'Fisher', 'zach@byui.edu', 'ZachPassword');

INSERT INTO posts(title, description_text, price, tips, rating) VALUES ('Walmart' ,'This is a cool place to go', 3, 'Do not do something stupid', 3);
INSERT INTO posts(title, description_text, price, tips, rating) VALUES ('Eat a burrito', 'This type of food is the bomb', 50, 'One tip is to do it with another couple', 5);
INSERT INTO posts(title, description_text, price, tips, rating) VALUES ('Picnic', 'This is a romantic idea. All you need is some food and a date to share it with!', 20, 'Light some candles to make it really romantic', 5);
INSERT INTO posts(title, description_text, price, tips, rating) VALUES ('Pick up trash' ,'This is such a great service idea', 3, 'Take your date to do this and if they do not complain, marry them for sure!', 0);

INSERT INTO categories(name) VALUES ('Outdoor');
INSERT INTO categories(name) VALUES ('Service');
INSERT INTO categories(name) VALUES ('Romantic');
INSERT INTO categories(name) VALUES ('Group Date');