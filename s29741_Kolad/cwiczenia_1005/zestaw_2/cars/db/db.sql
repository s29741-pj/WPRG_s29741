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


INSERT INTO samochody (marka, model, cena, rok, opis) VALUES
('Toyota', 'Corolla', 45000.00, 2018, 'Niezawodny sedan, idealny do miasta.'),
('Volkswagen', 'Golf', 52000.50, 2019, 'Popularny hatchback z niskim spalaniem.'),
('BMW', '3 Series', 95000.00, 2020, 'Sportowy sedan z napędem na tył.'),
('Audi', 'A4', 99000.99, 2021, 'Luksusowy i komfortowy samochód klasy średniej.'),
('Mercedes-Benz', 'C-Class', 105000.00, 2021, 'Elegancki i dynamiczny model klasy premium.'),
('Ford', 'Focus', 43000.00, 2017, 'Ekonomiczny hatchback o dobrej trakcji.'),
('Opel', 'Astra', 41000.75, 2016, 'Klasyczny wybór dla młodych kierowców.'),
('Skoda', 'Octavia', 48000.20, 2018, 'Przestronny sedan o dobrej opinii.'),
('Kia', 'Ceed', 46000.00, 2019, 'Nowoczesny wygląd i niskie spalanie.'),
('Hyundai', 'i30', 45500.00, 2020, 'Dobre wyposażenie w standardzie.'),
('Peugeot', '308', 47000.99, 2017, 'Stylowy i wygodny kompakt.'),
('Renault', 'Megane', 44000.00, 2018, 'Zawieszenie dobrze dopasowane do polskich dróg.'),
('Mazda', '3', 52000.00, 2019, 'Dynamiczny i oszczędny silnik benzynowy.'),
('Honda', 'Civic', 55000.00, 2020, 'Japońska niezawodność w nowoczesnym wydaniu.'),
('Fiat', 'Tipo', 39000.00, 2016, 'Przystępna cena i przestronne wnętrze.');
