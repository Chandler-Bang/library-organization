CREATE DATABASE library;
USE library;
CREATE TABLE book(
    bookNo varchar(10) primary key,
    bookName varchar(20)not null ,
    importDate date not null ,
    inLibStatus varchar(10) not null ,
    bookStatus varchar(10) not null ,
    bookPrice double not null ,
    frequency int not null ,
    category varchar(20) not null
);

CREATE TABLE reader(
    readerNo varchar(10) primary key,
    readerName varchar(20) not null
);

CREATE TABLE borrowBook(
    borrowId varchar(10) primary key,
    readerNo varchar(10) not null,
    bookNo varchar(10) not null unique,
    borrowDate date not null,
    foreign key (readerNo) references reader(readerNo),
    foreign key (bookNo) references book(bookNo)
);

CREATE TABLE returnBook(
    returnId varchar(10) primary key,
    readerNo varchar(10) not null,
    bookNo varchar(10) not null,
    returnDate date not null,
    fine double check (fine>=0),
    foreign key (readerNo) references reader(readerNo),
    foreign key (bookNo) references book(bookNo)
);

CREATE TABLE loss(
    bookNo varchar(10) primary key,
    lossResult varchar(20) not null,
    recordDate date not null,
    foreign key (bookNo) references book(bookNo)
)
