-- 31. autokinita

create database autokinita;

use autokinita;

create TABLE cars
(id integer PRIMARY KEY AUTO_INCREMENT,
 montelo varchar(50),
 kyvismos integer,
 ippodinami integer,
 epitaxinsi float
 );
 
INSERT INTO cars (montelo, kyvismos, ippodinami, epitaxinsi) 
VALUES
('AUDI A5 1.8 TFSI', 1798, 170, 7.9),
('FIAT 500 1.2', 1242, 69, 12.9),
('CITROEN C3 1.1',1124 , 60, 16.5),
('MERCEDES B 180',1595 , 122, 10.4),
('KIA RIO 1.2 5D', 1248, 85, 13.1),
('LEXUS IS 250',2500, 208, 8.4),
('NISSAN MICRA 1.2', 1198, 80, 13.7),
('OPEL ANTARA 2.4',2384 ,167, 10.3),
('MINI COOPER 1.6', 1598, 122, 9.1),
('TOYOTA YARIS 1.33',1329, 99, 11.7),
('SEAT LEON 1.4 TSI', 1395, 140, 8.2)
;

--6 Βρείτε το όνομα και το κυβισμό για όσα έχουν κυβισμό < 1300 ή > 2000
SELECT montelo, kyvismos FROM cars
WHERE (kyvismos < 1300) or (kyvismos > 2000);

-- 7. Βρείτε όλα τα στοιχείαγια όσα έχουν κυβισμό < 1600 και ιπποδύναμη >=80
SELECT * FROM cars
WHERE (kyvismos < 1600) and (ippodinami >= 80);

--8. Διαγράψτε όσα έχουν επιτάχυνση > 10
DELETE * FROM cars
WHERE epitaxinsi > 10;
