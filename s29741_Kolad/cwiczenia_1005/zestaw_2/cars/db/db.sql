CREATE DATABASE samochody_db_wprg

CREATE TABLE samochody
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    marka TEXT(150),
    model TEXT(150),
    cena FLOAT(7,2),
    rok INT,
    opis TEXT(500)
)