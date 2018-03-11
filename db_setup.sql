/* I don't think I have this all set up correctly to reflect the relationships between the different entities.*/

CREATE TABLE Customers (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	address VARCHAR(255),
	phone VARCHAR(10),
	email VARCHAR(255), /*Separate Entity*/
	is_subscriber INT,
	password VARCHAR(42) /*Set this up to hash under SHA-1*/
);

/*CREATE TABLE Email (
	customer_id INT Foreign KEY,
	is_subscriber INT
)*/

CREATE TABLE Orders (
	order_id INT AUTO_INCREMENT PRIMARY KEY, /* HOW DO I GO ABOUT ADDING PUZZLES TO THIS AS THEY HAVE THEIR OWN TABLE? */
	shipped INT,
	pname VARCHAR(255) FOREIGN KEY REFERENCES Puzzles(pname)
	/*Puzzles!*/
);

CREATE TABLE Employees (
	e_id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	email VARCHAR(255),
	address VARCHAR(255),
	phone VARCHAR(10),
	role VARCHAR(255)
);

CREATE TABLE OrdersPuzzles (
	order_id INT Foreign KEY,
	pname VARCHAR(255) FOREIGN KEY REFERENCES Puzzles(pname)
);

CREATE TABLE Puzzles (
	pname VARCHAR(255) PRIMARY KEY,
	quantity INT,
	numberofpieces INT,
	size VARCHAR(255),
	difficulty VARCHAR(255), /*Separate Entity*/
	theme VARCHAR(255) /*Separate Entity*/
);

CREATE TABLE Manufacturers (
	manu_id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR
);

CREATE TABLE Permissions ( /*Need to be able to assign multiple roles to each employee*/
	role VARCHAR(255) PRIMARY KEY,
	description VARCHAR(255)
	);

CREATE TABLE Roles (
	title varchar(255) PRIMARY KEY,
);

/*Adding the known Customers*/
insert into Customers values('0', 'Sally Sue', '123 Easy St. New York, NY 12345', '9876543210', 'sallysue@gmail.com', 'TRUE');

/*Adding the known Orders*/
/*insert into Orders values();*/ /*TO DO*/

insert into Administrators values('test', 'Unsecure,Iknow', '0');

/*Adding the known employees*/
insert into Employees values('1','Jeff Lastname', 'jeff@piecebypiece.com', '123 Easy St. Lincoln, NE 12345', '1234567890');
insert into Employees values('2','Linsey Secondname', 'linsey@piecebypiece.com', '125 Easy St. Lincoln, NE 12345', '1233456789');

/*Adding the known Puzzles*/
insert into Puzzles values('Water by the Woods', '3', '500', '24x24', 'Easy', 'Nature');
insert into Puzzles values('Carousel', '7', '750', '36x18', 'Hard', 'People');
insert into Puzzles values('Children Playing', '1', '1000', '18x18', 'Extremly Hard', 'People');
insert into Puzzles values('Water Under the Bridge', '6', '750', '24x12', 'Medium', 'Nature');
insert into Puzzles values('Playing Catch', '8', '25', '12x12', 'Kids Puzzle', 'Animal');

/*Adding the known Manufacturers*/
insert into Manufacturers values('1', 'Puzzles R US');
insert into Manufacturers values('2', 'Nice Puzzles');
insert into Manufacturers values('3', 'Family Time');

/*Adding the known Permissions with a rough description*/
insert into Permissions values('Admin', 'Full read/write on Puzzles');
insert into Permissions values('Customer', 'Read/edit their own information, NO delete, read their own orders');
insert into Permissions values('System', 'read quantity and title of puzzles page');
insert into Permissions values('Shipper', 'Read access to address to ship puzzle, read access to orders')
