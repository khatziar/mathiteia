-- 30. etaireia

create database etaireia;

create TABLE ypalliloi
(id integer PRIMARY KEY AUTO_INCREMENT,
 eponymo varchar(50),
 thesi varchar(15),
 ilikia integer,
 misthos decimal(6,2)
 );
 
 INSERT INTO ypalliloi (id, eponymo, thesi, ilikia, misthos) 
VALUES
(1, 'Georgiou', 'Sales', 25, 800),
(2, 'Ioannou', 'Sales', 28, 850),
(3, 'Kali', 'Secretariat', 22, 700),
(4, 'Konti', 'Support', 35, 950),
(5, 'Vrettos', 'Administration', 42, 1400),
(6, 'Alexiou', 'Sales', 30, 850),
(7, 'Kokkinos', 'Support', 34, 900),
(8, 'Halatsis', 'Secretariat', 38, 1037),
(9, 'Grigoradou', 'Administration', 40, 1180),
(10, 'Anastasiou', 'Sales', 44, 980),
(11, 'Karageorgiou', 'Sales', 29, 860)
;

--6 Αυξήστε το μισθό των πωλητών (sales) κατά 10%
update ypalliloi
set misthos = misthos * 1.10
where thesi like 'Sales';


-- 7. Εμαφανίστε όσους ξεκινούν από Κ με φθίνουσα σειρά ηλικίας
SELECT *
FROM ypalliloi
where eponymo like 'K%'
ORDER BY ilikia DESC;

--8. Εμφανίστε όσους έχουν ηλικία πάνω ή ίση των 35 και μισθό μικρότερο του 1000
SELECT * FROM `ypalliloi`
WHERE (`ilikia` >= 35 ) and (misthos <1000);

--extra: Πλήθος υπαλλήλων
SELECT count(*) FROM ypalliloi; 

-- πλήθος ανά Θέση
SELECT thesi, count(*) 
FROM ypalliloi 
group by thesi; 

-- MO των μισθών και της ηλικίας ανά θέση
SELECT thesi, avg(misthos), avg(ilikia)
FROM ypalliloi 
group by thesi;

-- MO των μισθών μόνο για πωλητές και support
SELECT thesi, avg(misthos)
FROM ypalliloi 
group by thesi
having thesi like 'Sales' or thesi like 'Support';

-- MO των μισθών μόνο για πωλητές και support που η ηλικία τους είναι μεγαλύτερη των 30
SELECT thesi, avg(misthos)
FROM ypalliloi 
where ilikia > 30
group by thesi
having thesi like 'Sales' or thesi like 'Support';

--προσθέσαμε πεδίο thesiErgasias int;

-- θέτω όπου Sales το 2
update ypalliloi 
SET thesiErgasias = 2 
where thesi like 'Sales';

--Ομοίως
update ypalliloi 
SET thesiErgasias = 1 
where thesi like 'Administration';

update ypalliloi
SET thesiErgasias = 3
where thesi like 'Support';

-- Διαγράφουμε τη στήλη thesi
ALTER TABLE ypalliloi
DROP COLUMN thesi;

