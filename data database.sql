-- Membuat database jika tidak ada database bernama museum_sonobudoyo
CREATE DATABASE IF NOT EXISTS museum_sonobudoyo

-- Membuat table jika tidak ada table bernama data_pengunjung
CREATE TABLE IF NOT EXISTS data_pengunjung (
    id INT PRIMARY KEY AUTO_INCREMENT,
    jam_kunjungan DATETIME DEFAULT NOW(),
    nama_pengunjung TEXT NOT NULL,
    email VARCHAR(100),
    catatan TEXT
);