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
    eMail VARCHAR(100) NOT NULL UNIQUE,
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
    CONSTRAINT p_key PRIMARY KEY (mId, aId)
);