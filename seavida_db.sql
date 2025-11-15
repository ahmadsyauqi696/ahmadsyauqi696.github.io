-- Buat database
CREATE DATABASE IF NOT EXISTS seavida_db;
USE seavida_db;

-- Tabel berita
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contoh data berita
INSERT INTO news (title, image, content) VALUES
('Seaweed Export Reaches New Record', 'assets/img/product/galery1.jpg', 'Indonesia berhasil mencatat rekor baru ekspor rumput laut pada tahun ini dengan peningkatan 30% dibandingkan tahun lalu.'),
('Sustainable Farming in Coastal Areas', 'assets/img/product/galery2.jpg', 'Petani rumput laut di daerah pesisir mulai mengadopsi metode ramah lingkungan untuk menjaga ekosistem laut.'),
('New Partnership with Global Buyers', 'assets/img/product/galery3.jpg', 'Seavida resmi menjalin kemitraan dengan pembeli global untuk memperluas distribusi produk laut Indonesia.');

-- Tabel pesan dari form kontak
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(50),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
