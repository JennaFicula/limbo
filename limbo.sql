#	Purpose: create and populate the user and location tables for lost and found system 
#	Authors: Faith, Brittany, Jenna
#	Version: 1.0


drop database if exists limbo_db;
create database limbo_db;
use limbo_db;

CREATE TABLE IF NOT EXISTS users 
(
user_id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(40) NOT NULL,
email VARCHAR(60) NOT NULL UNIQUE,
pass CHAR(40) NOT NULL,
reg_date DATETIME


);

CREATE TABLE IF NOT EXISTS stuff 
(
id int   AUTO_INCREMENT PRIMARY KEY,

stuff_id TEXT NOT NULL, 
locations_id INT NOT NULL,
description TEXT,
create_date DATETIME NOT NULL,
update_date DATETIME NOT NULL,
room TEXT,
owner TEXT,
finder TEXT,
status SET ("Found", "Lost", "Claimed") NOT NULL
);

INSERT INTO stuff (stuff_id, locations_id, description ,create_date, update_date, room, owner, status)
VALUES 
("Water Bottle", 23, "Red Marist water bottle",'2016-05-01 05:42:34','2016-11-01 10:30:00', "Byrne House","Jessica Simmons", "Lost" ),
("gloves", 24, "Green wool gloves", '2016-09-12 15:21:00','2016-11-05 12:30:00', "Byrne House","Kevin Heart" , "Lost"),
("coat", 32, "White fur coat",  '2016-01-29 17:01:18','2016-10-31 01:30:00', "Fontaine","Nicki Minaj" , "Lost");

INSERT INTO stuff (stuff_id, locations_id, description ,create_date, update_date, room, owner, finder, status)
VALUES
("calculator", 01, "Silver TI-84 Calculator",  '2016-01-07 18:11:18','2016-10-31 01:18:00', "Marian Hall","Amy Val" , "Yasmine Peru","Found"),
("Id Card", 13, "ID Card",  '2016-03-13 19:21:18','2016-11-10 12:20:00', "Dyson Center","Connor Johnson" , "Bob Dylan","Found"),
("Ring", 7, "Blue Ring",  '2016-02-21 13:31:18','2016-08-31 09:36:00', "Hancock Center","Liz Morey" , "Chucky Paw","Found");



CREATE TABLE IF NOT EXISTS locations 
(
id int  AUTO_INCREMENT PRIMARY KEY,
name TEXT NOT NULL,
create_date DATETIME NOT NULL,
update_date DATETIME NOT NULL
);


INSERT INTO users (first_name, last_name, pass, email, reg_date)
VALUES ("Admin", "Admin", "gaze11e", "faithmatt97@gmail.com", Now());

INSERT INTO locations(name, create_date, update_date)
VALUES 


("Byrne House", Now() , Now()),
("Cannavino Library", Now() , Now()),
("Champagnat Hall", Now() , Now()),
("Chapel", Now(), Now()),
("Cornell Boathouse", Now(), Now()),
("Donnelly Hall", Now(), Now()),
("Dyson Center", Now(), Now()),
("Fontaine", Now(), Now()),
("Foy Townhouses", Now(), Now()), 
( "Fulton Street Townhouses(Lower)", Now(), Now()),
("Fulton Street Townhouses(Upper)", Now(), Now()),
("Greystone Hall", Now(), Now()),
("Hancock Center", Now(), Now()	),
("Kieran Gatehouse", Now(), Now()	),
("Kirk House", Now(), Now()	),
("Leo Hall", Now(), Now()	),
("Lowell Thomas", Now(), Now()	),
("Communications Center", Now(), Now()	),
("Lower Townhouses ", Now(), Now()	),
("Marian Hall", Now(), Now()	),
("Marist Boathouse", Now(), Now()),
("McCann Center", Now(), Now()	),
("Mid-Rise Hall", Now(), Now()	),
("North Campus Housing Complex", Now(), Now()),
("St. Ann's Hermitage", Now(), Now()),
("St.Peter's", Now(), Now()),
("Science and Allied Health Building", Now(), Now()),
("Sheahan Hall", Now(), Now()),
("Steel Plant Studios and Gallery", Now(), Now()),
("Student Center/Music Building", Now(), Now()),
("West Cedar Townhouses(Lower)", Now(), Now()),
("West Cedar Townhouses(Upper)", Now(), Now());



Select * from stuff;