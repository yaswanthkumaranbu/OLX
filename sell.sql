USE olx;
CREATE TABLE sell (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description1 TEXT,
     description2 TEXT,
    price VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);