CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10, 2)
);

INSERT INTO products (name, price) VALUES
('Product 1', 10.50),
('Product 2', 20.00),
('Product 3', 15.75);
