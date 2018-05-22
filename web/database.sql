CREATE TABLE  public.posts 
(
    id SERIAL NOT NULL PRIMARY KEY,
    description_text TEXT,
    images BYTEA,
    price MONEY,
    tips TEXT,
    rating SMALLINT
);

CREATE TABLE  public.users 
(
    first_name VARCHAR(40),
    last_name VARCHAR(100),
    email TEXT UNIQUE NOT NULL PRIMARY KEY,
    password VARCHAR(30),
    post_id INT REFERENCES public.posts(id)
);


CREATE TABLE  public.categories
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(50),
    post_id INT NOT NULL REFERENCES public.posts(id)

);

SELECT * FROM users;

SELECT * FROM posts;

SELECT * FROM categories;

INSERT INTO users(first_name, last_name, email, password) VALUES ('Emma', 'Fisher', 'fis17001@byui.edu', 'myPassword');