CREATE TABLE Shops (
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    fullName varchar(300) NOT NULL,
    userName varchar(300) NOT NULL,
    pwd varchar(300) NOT NULL,
    age int(3) NOT NULL,
    nationality varchar(55) NOT NULL,
    prof varchar(300) NOT NULL,
    shopLogo varchar(700) NOT NULL,
    shopCover varchar(700) NOT NULL,
    subType varchar(700) NOT NULL,
    
   	email varchar(257) NOT NULL,
    phone varchar(15) NOT NULL,
    Remita  tinyint NOT NULL,
    Card  tinyint NOT NULL,
    PayInCash  tinyint NOT NULL,
    datejoin DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP    
    
    );
 CREATE TABLE shopCoupon (
    CouponId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Coupon varchar(300) NOT NULL,
    ShopName varchar(300) NOT NULL,
    CouponDis varchar(300) NOT NULL,
    CouponType varchar(300) NOT NULL,
    nationality varchar(55) NOT NULL,
    CouponAvailability  varchar(300) NOT NULL,
    payType varchar(257) NOT NULL,
    
   	
    dateCreated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    startDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    stopDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    
     
    
    );


    CREATE TABLE Prds (
    PrdId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    PrdName varchar(300) NOT NULL,
    Prdsn varchar(1500) NOT NULL,
    Coupon varchar(1500) NOT NULL,
    userName varchar(300) NOT NULL,
    Prddes varchar(900) NOT NULL,
    PrdImg1 varchar(900) NOT NULL,
    PrdImg2 varchar(900) NOT NULL,
    PrdImg3 varchar(900) NOT NULL,
    price int(30) NOT NULL,
    location varchar(55) NOT NULL,
    class  varchar(300) NOT NULL,
    
    dateEnd DATETIME,
        
   	payType varchar(257) NOT NULL,
    
    PrdCat varchar(150) NOT NULL
    );
    