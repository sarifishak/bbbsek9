
USE bbbsek9;

DROP TABLE IF EXISTS residents;
CREATE TABLE residents(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    noahli VARCHAR(10) default 'TIADA',
    norumah VARCHAR(10) default '',
	jalan VARCHAR(50) default '',
    name VARCHAR(100) default '',
    kadinduk1 VARCHAR(20) default '',
	kadinduk2 VARCHAR(20) default '',
    no_hp1  VARCHAR(50) default '',
    no_hp2  VARCHAR(50) default '',
    email1  VARCHAR(100) default '',
    email2  VARCHAR(100) default '',
    status int DEFAULT 0,
    createdDate DATETIME ,
    createdId int
);


CREATE TABLE usertypes(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
    userType VARCHAR(100) NOT NULL,
    defaultPage VARCHAR(200) NOT NULL
);

INSERT INTO usertypes(userType,defaultPage) VALUES('admin','home.php');
INSERT INTO usertypes(userType,defaultPage) VALUES('user','marketing.php');



CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    lastname VARCHAR(100),
    firstname VARCHAR(100),
    userType int DEFAULT 0,
	status int DEFAULT 0,
    createdDate DATETIME ,
    createdId int,
    userTypeData VARCHAR(100)

);

INSERT INTO users(username,password,lastname,firstname,userType,status,createdDate,createdId) VALUES ('sarif',md5('sarif'),'Ishak','Sarif',2,1,Now(),0);

CREATE TABLE contacts(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    contactTypeId int,	
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100),
    ic VARCHAR(100),
    address VARCHAR(200),
    city VARCHAR(100),
    state VARCHAR(50),
    postcode VARCHAR(50),
    mobile VARCHAR(50),
    office VARCHAR(50),
    home VARCHAR(50),
    fax VARCHAR(50),
    email VARCHAR(100),
    createdDate DATETIME,
    createdId int
);

ALTER TABLE `contacts` ADD `contactCode` VARCHAR(100) NOT NULL AFTER `id`;

INSERT INTO contacts(contactTypeId,contactCode,firstName,lastName,ic,address,city,state,postcode,mobile,office,home,fax,email,createdDate,createdId) VALUES (1,'CA0123','sarif','ishak','34343434343','addd','city','state','32232','01434334','034343434','03675644','0355422','email@com',Now(),1);



CREATE TABLE contacttypes(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
    contactType VARCHAR(100) NOT NULL
);


INSERT INTO contacttypes(contactType) VALUES ('CUSTOMER');
