-- https://onecompiler.com/


-- create
CREATE TABLE tainies (
  tainId INTEGER PRIMARY KEY,
  titlos varchar(100),
  etos integer NOT NULL,
  diarkeia integer,
  trisd bit
);

-- insert
INSERT INTO tainies VALUES (1, 'The Dark Knight', 2008, 152, 0);
insert into tainies VALUES
(2, 'The Godfather', 1972, 175, 0),
(3, 'Amelie', 2001, 122, 0),
(4, 'The Sting', 2001, 129, 0),
(5, 'How to Train your Dragon', 2010, 98, 1),
(6, 'Avatar', 2009, 162, 1),
(7, 'Gravity', 2013, 90, 1),
(8, 'Toy Story 3', 2010, 103, 1),
(9, 'Coudy With a Chance of Meatballs', 2009, 90, 0),
(10, 'Casablanca', 1942, 102, 0)
;

-- fetch 
SELECT * FROM tainies where trisd=1;


