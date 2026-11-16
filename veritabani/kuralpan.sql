
CREATE DATABASE IF NOT EXISTS kuralpan_dekorasyon
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_turkish_ci;

USE kuralpan_dekorasyon;


CREATE TABLE IF NOT EXISTS iletisim_talepleri (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

  ad VARCHAR(80) NOT NULL,
  email VARCHAR(120) NOT NULL,
  telefon VARCHAR(30) NOT NULL,
  konu VARCHAR(120) NOT NULL,
  mesaj TEXT NOT NULL,

  ip_adresi VARCHAR(45) NULL,
  user_agent VARCHAR(255) NULL,

  olusturma_tarihi TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

  INDEX idx_email (email),
  INDEX idx_telefon (telefon),
  INDEX idx_tarih (olusturma_tarihi)

) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_turkish_ci;
