CREATE DATABASE olx;

-- Use the newly created database
USE olx;
CREATE TABLE toyota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description1 TEXT,
     description2 TEXT,
    price VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);
INSERT INTO toyota (name, description1,description2, price, image_url)
VALUES ('Land Cruise ', 'Model:2018','Milage:10km', '12.6 Lakhs', 'Toyoto/cruise.jpg');

INSERT INTO toyota (name, description1,description2,  price, image_url)
VALUES ('Supra MK4', 'Model:1998','Milage:5km', '500 Lakhs', 'Toyoto/supra.jpg');

INSERT INTO toyota (name, description1,description2,  price, image_url)
VALUES ('Supra MK5', 'Model:2010','Milage:6km', '550 Lakhs', 'Toyoto/mk5.jpg');

INSERT INTO toyota (name, description1,description2,  price, image_url)
VALUES ('Camry', 'Model:20167','Milage:17km', '10 Lakhs', 'Toyoto/camry.jpg');

INSERT INTO toyota (name,description1,description2,  price, image_url)
VALUES ('Glanze', 'Model:2016','Milage:20km', '12 Lakhs', 'Toyoto/glanze.jpg');

INSERT INTO toyota (name, description1,description2,  price, image_url)
VALUES ('Innova', 'Model:2017','Milage:22km', '13.5 Lakhs', 'Toyoto/innova.jpg');


CREATE TABLE honda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description1 TEXT,
     description2 TEXT,
    price VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);
INSERT INTO honda (name, description1,description2, price, image_url)
VALUES ('City', 'Model:2023','Milage:13km','13.2 K', 'https://bit.ly/3RDY2XB');

INSERT INTO honda (name, description1,description2,  price, image_url)
VALUES ('Amaze', 'Model:2023','Milage:14km','7.2 K', 'Honda/amaze.jpg');

INSERT INTO honda (name, description1,description2,  price, image_url)
VALUES ('Civic', 'Model:2020','Milage:17km', '9.8 K', 'Honda/civic.jpg');



CREATE TABLE laptop (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description1 TEXT,
     description2 TEXT,
    price VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);
INSERT INTO laptop (name, description1,description2, price, image_url)
VALUES ('HP intel core i5 10th gen', 'RAM/storage : 8GB/HDD','Used : 2 Months','60 K' , 'Laptop/hp.jpg');

INSERT INTO laptop (name, description1,description2,  price, image_url)
VALUES ('Dell intel core i3', 'RAM/storage : 8GB/SSD','Used : 8 Months', '50 K', 'https://bit.ly/3RyItjZ');

INSERT INTO laptop (name, description1,description2,  price, image_url)
VALUES ('Lenova I3 processor', 'RAM/storage : 8GB/SSD','Used : 2 Years','30 K', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxS8ic7mkuxbXVJQMo9tDUUP33W_UMes8yKg&usqp=CAU');


CREATE TABLE mobile (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description1 TEXT,
     description2 TEXT,
    price VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);
INSERT INTO mobile (name, description1,description2, price, image_url)
VALUES ('Vivo X60', 'RAM/storage : 7GB/128','Used : 2 Years', '20 K', 'https://bit.ly/3PWgTfo');

INSERT INTO mobile (name, description1,description2,  price, image_url)
VALUES ('Samsung X60', 'RAM/storage : 8GB/128','Used : 1.5 Years', '15 K', 'https://bit.ly/466TVry');

INSERT INTO mobile (name, description1,description2,  price, image_url)
VALUES ('Iphone 13 pro max', 'RAM/storage : 8GB/256','Used : 2 Years', '60 K', 'https://bit.ly/3PxV704');


CREATE TABLE furniture(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description1 TEXT,
     description2 TEXT,
    price VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);
INSERT INTO furniture (name, description1,description2, price, image_url)
VALUES ('sofa', 'Condition : Good','Used : 2 Years', '20 K', 'https://bit.ly/3ZxlTdg');

INSERT INTO furniture (name, description1,description2,  price, image_url)
VALUES ('Cupboard', 'Condition : Good','Used : 1.5 Years', '15 K', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzV3T1tg6o_2MX3k49n4T7S9qnGb6YUop7ww&usqp=CAU');

INSERT INTO furniture (name, description1,description2,  price, image_url)
VALUES ('Table', 'Condition : Good','Used : 2 Years', '10 K', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEz_o3En7i_9ATQak31-KndFwdhKdL3bcXhA&usqp=CAU');


