-- This sql file is written for PostgreSQL database

CREATE TABLE privilege (
    pId SERIAL PRIMARY KEY,
    privilegeName VARCHAR(30) UNIQUE NOT NULL
);

-- Seed this using laravel
CREATE TABLE account (
    aId SERIAL PRIMARY KEY,
    pId INTEGER DEFAULT 1 REFERENCES privilege(pId),
    fName VARCHAR(40) NOT NULL,
    lName VARCHAR(40) NOT NULL,
    password VARCHAR(255) NOT NULL,
    eMail VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE carListing (
    cId SERIAL PRIMARY KEY,
    model VARCHAR(50) NOT NULL,
    mileage INTEGER NOT NULL,
    comments VARCHAR(100),
    makeYear INTEGER NOT NULL,
    color VARCHAR(20) NOT NULL,
    price INTEGER NOT NULL,
    imgPath VARCHAR(255) NOT NULL,
    manufacturer VARCHAR(50) NOT NULL
);

CREATE TABLE meeting (
    mId SERIAL NOT NULL,
    aId INT REFERENCES account(aId),
    date DATE NOT NULL,
    time TIME NOT NULL,
    CONSTRAINT p_key PRIMARY KEY (mId, aId)
);

INSERT INTO privilege (pid, privilegeName) VALUES
(default, 'User'),
(default, 'Admin');

-- This later will be seeded with laravel, only creating admin now
INSERT INTO account (aid, pid, fname, lname, password, email) VALUES
(default, 2, 'admin', 'admin', 'goodadmin', 'admin@admin.com');
(default, 1, 'testuser', 'testuser', 'testuser', 'test@user.com');

INSERT INTO carListing (cid, model, mileage, comments, makeyear, color, price, imgpath, manufacturer) VALUES 
(default, 'SF90', 2198, 'Condition great', 2019, 'red', 250000, 'somepath', 'Ferrari'),
(default, '812 Superfast', 2198, 'Condition mint', 2020, 'red', 750000, 'somepath', 'Ferrari');

INSERT INTO meeting (mid, aid, date, time) VALUES
(default, 2, '2025-04-16', '15:25');