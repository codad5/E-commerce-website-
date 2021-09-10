CREATE TABLE users (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    fullName varchar(300) NOT NULL,
    userName varchar(300) NOT NULL,
    pwd varchar(300) NOT NULL,
    age int(3) NOT NULL,
    nationality varchar(55) NOT NULL,
    prof varchar(300) NOT NULL,
    
   	email varchar(257) NOT NULL,
    phone varchar(15) NOT NULL,
    datejoin DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP    
    
    );


    CREATE TABLE Ads (
    AdsId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    AdsName varchar(300) NOT NULL,
    Adssn varchar(1500) NOT NULL,
    userName varchar(300) NOT NULL,
    Adsdes varchar(900) NOT NULL,
    AdsImg1 varchar(900) NOT NULL,
    AdsImg2 varchar(900) NOT NULL,
    AdsImg3 varchar(900) NOT NULL,
    price int(30) NOT NULL,
    location varchar(55) NOT NULL,
    class  varchar(300) NOT NULL,
    
   	paid varchar(257) NOT NULL,
    
    adsCat varchar(150) NOT NULL
    );
    