

CREATE TABLE AdminUser(
  id INT NOT NULL PRIMARY KEY,
  AdminName VARCHAR(50),
  PasswordAdmin VARCHAR(160)
);

INSERT INTO AdminUser(id,AdminName,PasswordAdmin)
VALUES(1,'project','f925916e2754e5e03f75dd58a5733251');

CREATE TABLE Category (
id INT NOT NULL PRIMARY KEY,
CategoryName VARCHAR(100)

);

CREATE TABLE Product (
id INT NOT NULL PRIMARY KEY,
CategoryId INT NOT NULL REFERENCES Category(id),
productName  VARCHAR(100) NOT NULL,
Price FLOAT NOT NULL,
StatusProduct TEXT NOT NULL,
CHECK(StatusProduct="remaining" OR StatusProduct="Sold out"),
importNum     FLOAT NOT NULL,
exportNum    FLOAT NOT NULL
);

INSERT INTO Category (id,CategoryName)
VALUES  (1,'Gasoline'),
		(2,'Diesel Fuel'),
		(3,'Engine Lubricants');
        
                                 
INSERT INTO Product (id,CategoryId,productName,Price,StatusProduct,importNum,exportNum)
VALUES  (1,1,'Ron 92',19.138,'remaining',1500,1550),
		(2,1,'Ron 95-IV',22.970,'remaining',1000,1550),
		(3,1,'Ron 95-III',22.870,'remaining',1100,1550),
		(4,1,'E5 RON 92-II',21.680,'remaining',1000,1550),
        (5,1,'E85',20.132,'remaining',1100,1550),
        (6,1,'E15',21.634,'remaining',1200,1550),
        (7,1,'E10',20.125,'remaining',1300,1550),
        (8,1,'E20',22.142,'remaining',1400,1550),
		(9,1,'E30',19.142,'remaining',1500,1550),
        
        (10,2,'DO 0,05S-II',17.540,'remaining',1510,1550),
        (11,2,'Diesel',17.695,'remaining',1550,1550),
        (12,2,'Mazut ',16.002 ,'remaining',1120,1550),
		(13,2,'DO 0,001S-V',17.890 ,'remaining',1000,1550),
        (14,2,'S15',18.434 ,'remaining',1000,1550),
        (15,2,' S500',17.436 ,'remaining',1000,1550),
        (16,2,'S5000 ',18.593 ,'remaining',1000,1550),
		
        (17,3,'Motul 300V Factory Line 10W40 ',425.000,'remaining',200,250), 
        (18,3,'Liqui Moly Môtrbike Synth 4T 10W40',335.000,'remaining',110,250), 
        (19,3,'Repsol Moto HMEOC 4T 10W30',295.000,'remaining',50,100), 
        (20,3,'Repsol Racing 4T 10W40',280.000,'remaining',80,100), 
        (21,3,'Repsol Moto Sintetico 4T 10W40',195.000,'Sold out',300,300), 
        (22,3,'Repsol MXR Platium 10W40 1L',195.000,'remaining',100,200), 
        (23,3,'Repsol MXR Platium 10W40 0,8L', 175.000,'Sold out',100,100), 
        (24,3,'Repsol Moto Speed 4T 20W40 0.8L',105.000,'remaining',100,200), 
        (25,3,'Repsol Racing 10W40 100ml',32.000,'remaining',100,100), 
        (26,3,'Repsol Sintetico 10W40 100ml',24.000,'Sold out',100,100), 
        (27,3,'Fuchs Sikolene Pro 4 10W40 XP',275.000,'remaining',100,150),
        (28,3,'Repsol Moto Scooter 4T 5W40 ',215.000,'remaining',100,150),
        (29,3,'Caltex Havoline 10W40 Scooter',110.000,'remaining',100,150),
        (30,3,'Shell AX7 10W40 ',105.000,'Sold out',100,100),
        (31,3,'Motul scooter expert le 10w40 800ml',130.000,'Sold out',100,100),
        (32,3,'Castrol Scooter 10W40 ',145.000,'remaining',100,150),
        (33,3,'castrol Ultimate 10W30',165.000,'remaining',100,150),
        (34,3,'Liqui Moly 10W40 Scooter Race', 290.000,'Sold out',100,100) ;
	
