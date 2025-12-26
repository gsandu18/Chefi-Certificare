CREATE TABLE cereri_audit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tip_client ENUM('chef', 'restaurant') NOT NULL,
    nume VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefon VARCHAR(20) NOT NULL,
    detalii_specifice VARCHAR(255), 
    data_inregistrarii DATETIME DEFAULT CURRENT_TIMESTAMP
);
