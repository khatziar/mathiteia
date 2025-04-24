 create database if not exists company;

use company;
 
create TABLE customers
(id integer PRIMARY KEY AUTO_INCREMENT,
 firstname varchar(50),
 lastname varchar(50),
 email varchar(50),
 Age integer
 );
 
INSERT INTO customers (firstname, lastname, email, age) 
VALUES
('Παπαδόπουλος', 'Κώστας', 'papkostas@gmail.com', 35),
('Γεωργίου', 'Νικόλαος', 'gnik@yahoo.gr', 42),
('Καρυστινού', 'Ελπίδα', 'elpid202@gmail.com', 22)
;